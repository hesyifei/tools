<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => '寫好文章想要數數字數？但是又懶得自己數？快來使用這個「字數統計」小工具吧！',
	'keywords' => '字數統計, 文章',
);
?>
<?php get_header("字數統計", $seo); ?>
<form class="form-horizontal" role="form" onreset="clearSpans()">
	<div class="form-group">
		<div class="col-sm-10 centerd">
			<textarea class="form-control" rows="15" id="doc" onchange="calcStats()"></textarea>
		</div>
	</div>
	<div class="form-group text-center">
			<button type="button" class="<?php echo get_btn(); ?>" onclick="calcStats()">計算開始</button>
			<button type="reset" class="<?php echo get_btn(); ?>">清除重算</button>
	</div>
</form>
<div id="result">
	<p id="words"></p>
	<p id="charsnospaces"></p>
	<p id="characters"></p>
	<p id="lines"></p>
</div>
<?php get_footer(); ?>