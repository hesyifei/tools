<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => '不知道自己網站可以承受多少負荷？快來用這個「網站壓力測試」小工具來試試吧！',
	'keywords' => '網站壓力測試, 壓力測試, DDOS',
);
?>
<?php get_header("網站壓力測試 DDOS", $seo); ?>
<div class="centerd">
<h3>攻擊次數：<span id="total">0</span></h3>
<h4 class="padding-top">參數 <small>0威力最大</small></h3>
<div class="col-sm-5 input-group centerd">
	<input type="number" class="form-control" id="sec" value="0.1" <?php enter_num_only(); ?> />
	<span class="input-group-addon">秒 / 次</span>
	<span class="input-group-btn">
		<button class="<?php echo get_btn(); ?>" id="btn-rate" type="button">修改</button>
	</span>
</div>
<h4 class="padding-top">網址清單 <small>一行一個</small></h4>
<div class="col-sm-8 input-group centerd">
	<textarea class="form-control" id="addurl" rows="10" placeholder="http://www.google.com/"></textarea>
</div>
<div class="col-sm-10 input-group centerd padding-top">
<table class="centerd">
	<tbody id="sites"></tbody>
</table>
</div>
<div class="col-sm-10 input-group centerd padding-top">
	<button id="btn-start" class="<?php echo get_btn('success'); ?> btn-large">套用/開始</button>
</div>
</div>
<?php
$footer = array(
	'more_footer' => '請不要將此工具用於非法用途，否則後果自負！',
	'more_footer_copyright' => 'OK-TW',
	'extra_script' => array("underscore.min.js"),			//Extra Script File
);
?>
<?php get_footer($footer); ?>