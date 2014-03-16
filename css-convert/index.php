<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => '想要最小化CSS文件？或者格式化CSS文件？Arefly製作的「CSS轉換工具」絕對幫到你！',
	'keywords' => 'CSS, CSS轉換',
);
?>
<?php get_header("CSS轉換工具", $seo); ?>
<form class="form-horizontal" role="form">
	<div class="text-center <?php echo get_alert_class('info'); ?>">
		使用方法：輸入想要格式化或壓縮的CSS代碼即可
	</div>
	<div class="form-group">
		<div class="col-sm-10 centerd">
			<textarea class="form-control" id="code" rows="10" cols="86"></textarea>
		</div>
	</div>
	<div class="form-group text-center">
		轉換為：<button type="button" class="<?php echo get_btn(); ?>" onclick="CSS('packAdv');">高級壓縮</button> <button type="button" class="<?php echo get_btn(); ?>" onclick="CSS('pack');">普通壓縮</button> <button type="button" class="<?php echo get_btn(); ?>" name="B3" onclick="CSS('format');">格式化</button>
	</div>
	<div class="form-group">
		<div class="col-sm-10 centerd">
			<textarea class="form-control" id="packer" rows="10" cols="86"></textarea>
		</div>
	</div>
</form>
<?php get_footer(); ?>