<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => '需要域名的證書？快來使用這個「域名證書生成器」吧！',
	'keywords' => '域名證書, 新網, 證書生成, 域名證書生成',
);
?>
<?php get_header("域名證書生成", $seo); ?>
<form class="form-horizontal" action="cert.php" method="POST" role="form">
	<div class="form-group">
		<label for="domain" class="col-sm-2 control-label">域名</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="domain" name="domain" required="required" />
		</div>
	</div>
	<div class="form-group">
		<label for="chinese_name" class="col-sm-2 control-label">中文姓名</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="chinese_name" name="chinese_name" required="required" />
		</div>
		<label for="english_name" class="col-sm-2 control-label">英文姓名</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="english_name" name="english_name" required="required" />
		</div>
	</div>
	<div class="form-group">
		<label for="register_date" class="col-sm-2 control-label">註冊日期</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="register_date" name="register_date" required="required" />
		</div>
		<label for="upcoming_date" class="col-sm-2 control-label">到期日期</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="upcoming_date" name="upcoming_date" required="required" />
		</div>
	</div>
	<div class="form-group">
		<label for="chinese_address" class="col-sm-2 control-label">中文通訊地址</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="chinese_address" name="chinese_address" required="required" />
		</div>
		<label for="english_address" class="col-sm-2 control-label">英文通訊地址</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="english_address" name="english_address" required="required" />
		</div>
	</div>
	<div class="form-group">
		<div class="centerd">
			<button type="submit" class="<?php echo get_btn(); ?>">生成證書</button>
		</div>
	</div>
</form>
<?php get_footer(); ?>