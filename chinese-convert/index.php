<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => 'Arefly精心製作的「簡繁轉換」小工具為你提供了最專業的中文轉換，還等什麼？快來使用吧！',
	'keywords' => '简繁转换, 簡繁轉換, 简体, 繁體',
);
?>
<?php get_header("簡繁轉換", $seo); ?>
<form class="form-horizontal" name="myForm" onsubmit="return false" role="form">
	<div class="text-center <?php echo get_alert_class('info'); ?>">
		使用方法：在下方文本框輸入繁體或簡體文字，然後點擊要轉之字體即可
	</div>
	<div class="form-group">
		<div class="col-sm-10 centerd">
			<textarea class="form-control" name="S1" rows="10" cols="86"></textarea>
		</div>
	</div>
	<div class="form-group text-center">
		從：<select id="from" class="selectpicker" onchange="onchange_convert(this);">
			<option value="cn" name="cn" selected="selected">內地（中國大陸）</option>
			<option value="tw" name="tw">台灣（中華民國）</option>
			<option value="hk" name="hk">港澳地區</option>
		</select>
		到：<select id="to" class="selectpicker">
			<option value="tw" name="tw" selected="selected">台灣（中華民國）</option>
			<option value="cn" name="cn">內地（中國大陸）</option>
			<option value="hk" name="hk">港澳地區</option>
		</select>
		編碼：<select id="encode" class="selectpicker">
			<option value="utf" name="utf" selected="selected">Unicode</option>
			<option value="gbbig" name="gb">GBK/BIG5</option>
		</select>
		<button type="button" class="<?php echo get_btn(); ?>" name="convert" onclick="convert_string()">轉換</button>
	</div>
	<div class="form-group">
		<div class="col-sm-10 centerd">
			<textarea class="form-control" name="S2" rows="10" cols="86" readonly="readonly" style="background-color: #fff;"></textarea>
		</div>
	</div>
</form>
<?php
$footer = array(
	'extra_script' => array("GB2312TOBIG5.js", "GBCodeUnicode.js", "GB2312TOBIGGB.js", "BIG5TOGB2312.js", "BIGCodeUnicode.js", "BIG5TOGBBIG.js"),			//Extra Script File
);
?>
<?php get_footer($footer); ?>
