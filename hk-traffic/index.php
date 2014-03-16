<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => '想看看香港交通實況？快來看看「香港交通直播」吧！',
	'keywords' => '香港交通直播, 香港交通, 交通直播',
);
?>
<?php get_header("香港交通直播", $seo); ?>

<div class="centerd">
	<input type="button" class="<?php echo get_btn(); ?>" onclick="reply_click('hk')" value="港島">
	<input type="button" class="<?php echo get_btn(); ?>" onclick="reply_click('kl')" value="九龍">
	<input type="button" class="<?php echo get_btn(); ?>" onclick="reply_click('tw')" value="荃灣">
	<input type="button" class="<?php echo get_btn(); ?>" onclick="reply_click('tm')" value="屯門及天水圍">
	<input type="button" class="<?php echo get_btn(); ?>" onclick="reply_click('yl')" value="大埔、北區及元朗">
	<input type="button" class="<?php echo get_btn(); ?>" onclick="reply_click('st')" value="沙田與馬鞍山">
	<input type="button" class="<?php echo get_btn(); ?>" onclick="reply_click('li')" value="大嶼山">
</div>

<br/>

<p id="place" class="centerd">請選擇你想查看的地區</p>
<?php
$footer = array(
	'more_footer' => '本工具之交通圖像來自「<a target="_blank" href="http://traffic.td.gov.hk/">香港特別行政區政府-運輸署</a>」',
);
?>
<?php get_footer($footer); ?>