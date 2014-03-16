function in_array(item, list){
	for(var i=0; i<list.length; i++){
		if(item == list[i]){
			return true;
		}
	}
	return false;
}

/**
 * 返回指定元素在數組中的索引, 如果沒找到, 返回-1;
 */
function array_find(list, item){
	for(var i=0; i<list.length; i++){
		if(item == list[i]){
			return i;
		}
	}
	return -1;
}

// 從數組中刪除元素. 返回新數組.
function array_del(list, item){
	var arr = [];
	for(var i=0; i<list.length; i++){
		if(item != list[i]){
			arr.push(list[i]);
		}
	}
	return arr;
}

// 從數組中刪除元素. 返回新數組.
function array_del_all(list, items){
	var arr = [];
	for(var i=0; i<list.length; i++){
		if(array_find(items, list[i]) == -1){
			arr.push(list[i]);
		}
	}
	return arr;
}

/**
 * 把數組當作環形的, 返回從start開始, 一共count個元素.
 * 如果count大於數組長度, 返回整個數組.
 */
function array_slice(list, start, count){
	var ret;

	ret = list.slice(start, start + count);
	if(ret.length < count){
		ret = ret.concat(list.slice(0, count - ret.length));
	}

	return ret;
}

// 擾亂數組元素的順序.
function array_shuffle(list){
	var len = list.length;
	for(var i=0; i<len*5; i++){
		var p1 = parseInt(len * Math.random());
		var p2 = parseInt(len * Math.random());
		var tmp = list[p1];
		list[p1] = list[p2];
		list[p2] = tmp;
	}
}


/*
狀態/動作

開場(open)
循環{
	獎項開場(step_open)
	獎項抽獎(rotate_start)
	獎項抽獎(rotate_stop)
	獎項閉場(step_close)
}
閉場(close)

*/
var Game = function(){
	var self = this;

	this.step = -1;
	this.interval = 100;
	this.rotate_index = 0;
	self.action = 'open';

	this.prizes = [];
	this.candidates = [];
	this.results = [];

	this.init = function(){
		this.step = 0;
		this.stop = false;
		this.rotate_index = 0;
		self.action = 'open';
		this.results = [];

		for(var i=0; i<self.prizes.length; i++){
			var p = self.prizes[i];
			self.results[i] = [];
		}
		
		show_current_step('');
		var str = '請按回車開始';
		str += '<br/><br/>';
		str += '<a href="http://www.ideawu.net/blog/">ideawu</a>';
		print_box('請按回車開始');
		
		$('#rolling_board').hide();
		$('#rotate_div').css('background', '');
	}

	this.reset = function(){
		this.prizes = [];
		this.candidates = [];
		this.results = [];
	}

	this.process = function(){
		show_results();

		// 先更新狀態再執行函數
		switch(self.action){
			case 'open':
				self.action = 'step_open';
				$('#rotate_div').hide();
				on_open();
				$('#rotate_div').fadeIn('slow');
				break;
			case 'close':
				self.action = '';
				on_close();
				break;
			case 'step_open':
				self.action = 'rotate_start';
				$('#rotate_div').hide();
				on_step_open();
				$('#rotate_div').fadeIn('fast');
				break;
			case 'step_close':
				if(self.step == self.prizes.length){
					self.action = 'close';
				}else{
					self.action = 'step_open';
				}
				on_step_close();
				break;
			case 'rotate_start':
				self.action = 'rotate_stop';
				on_rotate_start();
				break;
			case 'rotate_stop':
				on_rotate_stop();
				break;
			default:
				save_setting();
				break;
		}
	};
}

function on_open(){
	show_current_step('活動說明');

	var str = '<table align="center">';
	str += '<tr><th>獎項</th><th>數量</th><th>獎品</th></tr>\n';
	for(var i=game.prizes.length-1; i>=0; i--){
		var p = game.prizes[i];
		str += '<tr><td>' + p.name + '</td><td>' + p.num + '</td><td>' + p.award + '</td></tr>\n';
	}
	str += '</table>';
	print_box(str);
}

function on_close(){
	show_current_step('');

	$('#print_box').hide();
	var str = '';
	str += '<span><b style="font-size: 62px; background: #36f;">抽獎結束</b><span><br/>';
	str += '<br/><br/>';
	str += '官方網站：';
	str += '<a href="http://www.arefly.com/">http://www.arefly.com/</a>';
	print_box(str);
	$('#print_box').fadeIn('slow', function(){
		$('#rotate_div').css('background', 'url(framework.gif)');
	});
}

function on_step_open(){
	show_current_step();
	print_box('按回車開始');
	$('#rolling_board').html('...');
}

function on_step_close(){
	var str = '';
	str += '<span>&nbsp;* 中獎名單 *&nbsp;<br/><br/>';
	var r = game.results[game.step - 1];
	for(var n=0; n<r.length; n++){
		str += ' &nbsp;' + r[n];
	}
	str += '&nbsp;</span>';
	
	print_box(str);
	$('#rolling_board').slideUp('normal');
}

function on_rotate_start(){
	$('#rolling_board').slideDown('normal');

	game.interval = parseInt($('input[name=interval]').val());

	game.stop = false;
	game.rotate_index = 0;

	// 打亂順序
	array_shuffle(game.candidates);
	
	rotate_run();

	show_current_step();
	print_box('按回車停止');
}


function on_rotate_stop(){
	// 等一段隨機時間再停止.
	game.interval += parseInt(0.9 * game.interval);
	setTimeout('game.stop=true', 230 + parseInt(230*Math.random()));
	//game.stop = true;
}


function rotate_run(){
	var num_a = game.prizes[game.step].num_a_time;
	var size = game.prizes[game.step].num - game.results[game.step].length;
	if(size > num_a){
		size = num_a;
	}

	var arr = array_slice(game.candidates, game.rotate_index, size);
	$('#rolling_board').html(arr.join(' '));

	game.rotate_index += num_a;
	if(game.rotate_index >= game.candidates.length){
		game.rotate_index -= game.candidates.length;
	}

	if(game.stop){
		game.action = 'rotate_start';
		
		game.results[game.step] = game.results[game.step].concat(arr);
		game.candidates = array_del_all(game.candidates, arr);

		show_results();
		print_box('按回車繼續');

		if(game.results[game.step].length == game.prizes[game.step].num){
			game.step ++;
			game.action = 'step_close';
		}

		var h = '<span style="color: #f33">' + $('#rolling_board').html() + '</span>';
		$('#rolling_board').html(h)
	}else{
		setTimeout('rotate_run()', game.interval);
	}
}


function show_current_step(str){
	if(str == undefined){
		var found = game.results[game.step].length;
		var all = game.prizes[game.step].num;
		var num_a = game.prizes[game.step].num_a_time;
		var b = (num_a+found) > all? all : (num_a+found);

		var str = game.prizes[game.step].name + '(' + game.prizes[game.step].num + '個';
		if(num_a != all){
			str += ', ' + (found + 1) + '-' + b;
		}
		str +=  ')';
	}
	if(str == ''){
		$('#current_step').hide('fast');
	}else{
		$('#current_step').html(str);
		$('#current_step').show();
	}
}

function print_box(str){
	if(str == undefined){
		var str = '<span>';
		var r = game.results[game.step];
		for(var n=0; n<r.length; n++){
			str += r[n] + ' &nbsp;';
		}
		str += '</span>';
	}
	if(str == ''){
		$('#print_box').hide('fast');
	}else{
		$('#print_box').html(str);
		$('#print_box').show();
	}
}

function show_results(){
	var str = '';
	for(var i=game.results.length-1; i>=0; i--){
		str += '<h2>' + game.prizes[i].name + '</h2>';
		var r = game.results[i];
		for(var n=0; n<r.length; n++){
			str += r[n] + ' &nbsp;';
		}
		str += '<br/>';
	}
	$('#tabs-3').html(str);
}


function save_setting(){
	game.reset();

	var ps = $.trim($('textarea[name=prizes]').val()).split('\n');
	for(var i=0; i<ps.length; i++){
		var p = $.trim(ps[i]);
		if(p.length == 0){
			continue;
		}
		var ex = p.split('|');
		var prize = {
			name : $.trim(ex[0]),
			num : parseInt($.trim(ex[1])),
			num_a_time : parseInt($.trim(ex[2])),
			award : $.trim(ex[3])
		};
		game.prizes.push(prize);
	}

	var ps = $.trim($('textarea[name=candidates]').val()).replace(/,/g, '\n').split('\n');
	for(var i=0; i<ps.length; i++){
		var p = $.trim(ps[i]);
		if(p.length == 0){
			continue;
		}
		game.candidates.push(p);
	}

	$('#event_title span').html($('input[name=title]').val());
	$('#tabs-1').css('background', 'url(' + $('input[name=background_image]').val() + ') no-repeat');

	game.init();
}