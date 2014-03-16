<script>
var game;
$(function(){
	$('#loading').hide();
	$('#tabs').slideDown('fast');
	$('#tabs').tabs();

	game = new Game();
	save_setting();
});

// 绑定回车键盘操作
$(document).keypress(function (e){
	switch(e.which){
		case 13:
			game.process();
			break;
	}
});
</script>