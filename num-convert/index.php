<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => '搞不清楚單位之間如何換算？Arefly製作的「單位轉換器」一定能幫到你！',
	'keywords' => '單位轉換, 單位',
);
?>
<?php get_header("單位轉換"); ?>

<div class="<?php echo get_alert_class('info'); ?>">
	教程：你只需要輸入你想轉換的數字，然後按下回車就可以顯示結果啦！
</div>

<form class="form-horizontal" role="form">
<table class="table table-striped table-bordered table-hover" style="width: 800px;">
	<tr>
		<th>長度轉換</th>
		<th>面積轉換</th>
	</tr>
	<tr>
		<td>
			<div class="col-sm-10 centerd input-group">
				<span class="input-group-addon">毫米（mm）</span>
				<input type="number" class="form-control" id="mm" onchange="convert_length(1);" <?php enter_num_only(); ?> />
			</div>
		</td>
		<td>
			<div class="col-sm-10 centerd input-group">
				<span class="input-group-addon">平方毫米（mm²）</span>
				<input type="number" class="form-control" id="mm2" onchange="convert_size(1);" <?php enter_num_only(); ?> /></td>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="col-sm-10 centerd input-group">
				<span class="input-group-addon">厘米（cm）</span>
				<input type="number" class="form-control" id="cm" onchange="convert_length(2);" <?php enter_num_only(); ?> />
			</div>
		</td>
		<td>
			<div class="col-sm-10 centerd input-group">
				<span class="input-group-addon">平方厘米（cm²）</span>
				<input type="number" class="form-control" id="cm2" onchange="convert_size(2);" <?php enter_num_only(); ?> />
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="col-sm-10 centerd input-group">
				<span class="input-group-addon">分米（dm）</span>
				<input type="number" class="form-control" id="dm" onchange="convert_length(3);" <?php enter_num_only(); ?> />
			</div>
		</td>
		<td>
			<div class="col-sm-10 centerd input-group">
				<span class="input-group-addon">平方分米（dm²）</span>
				<input type="number" class="form-control" id="dm2" onchange="convert_size(3);" <?php enter_num_only(); ?> />
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="col-sm-10 centerd input-group">
				<span class="input-group-addon">米（m）</span>
				<input type="number" class="form-control" id="m" onchange="convert_length(4);" <?php enter_num_only(); ?> />
			</div>
		</td>
		<td>
			<div class="col-sm-10 centerd input-group">
				<span class="input-group-addon">平方米（m²）</span>
				<input type="number" class="form-control" id="m2" onchange="convert_size(4);" <?php enter_num_only(); ?> />
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="col-sm-10 centerd input-group">
				<span class="input-group-addon">千米（km）</span>
				<input type="number" class="form-control" id="km" onchange="convert_length(5);" <?php enter_num_only(); ?> />
			</div>
		</td>
		<td>
			<div class="col-sm-10 centerd input-group">
				<span class="input-group-addon">平方千米（km²）</span>
				<input type="number" class="form-control" id="km2" onchange="convert_size(5);" <?php enter_num_only(); ?> />
			</div>
		</td>
	</tr>
</table>
</form>

<?php get_footer(); ?>