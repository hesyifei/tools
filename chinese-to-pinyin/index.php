<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => '想要把一段文字轉換為拼音？快來試試Arefly製作的「拼音轉換器」吧！',
	'keywords' => '拼音, 拼音轉換, 中文',
);
$header = array(
	'extra_script' => array("pinyin.js"),
);
?>
<?php get_header("拼音轉換", $seo, $header); ?>
<form class="form-horizontal" action="" method="post" role="form">
	<div class="text-center <?php echo get_alert_class('info'); ?>">
		使用方法：在下方文本框輸入中文（簡繁皆可），然後點擊要「轉換」即可
	</div>
	<div class="form-group">
		<div class="col-sm-10 centerd">
			<textarea class="form-control" id="Hsource" rows="10" cols="86" onfocus="textarea_onfocus('hide')" onblur="textarea_onfocus('show')">請輸入你想要轉換的文字</textarea>
		</div>
	</div>
	<div class="form-group text-center">
		<button type="button" class="<?php echo get_btn(); ?>" name="convert" onclick="z()">轉換至拼音</button>
		<button type="button" class="<?php echo get_btn(); ?>" name="convert" onclick="resetAll()">重置</button>
	</div>
	<div class="form-group">
		<div class="col-sm-10 centerd">
			<textarea class="form-control" id="Uresult" rows="10" cols="86"></textarea>
		</div>
	</div>
<?php get_footer(); ?>