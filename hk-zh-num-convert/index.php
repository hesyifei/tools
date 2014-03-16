<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => '搞不清楚中港單位的分別？沒關係！「中港單位轉換器」幫到你！',
	'keywords' => '中港單位轉換, 中國香港單位, 單位',
);
?>
<?php get_header("中港單位轉換", $seo); ?>

<div class="<?php echo get_alert_class('info'); ?>">
	教程：你只需要輸入你想轉換的數字，然後按下回車就可以顯示結果啦！
</div>

<form class="form-horizontal" role="form">
<table class="table table-striped table-bordered table-hover" style="width: 800px;">
	<tr>
		<th rowspan="2">長度</th>
		<td>
			<div class="col-sm-10 centerd input-group">
				<span class="input-group-addon">米</span>
				<input type="number" class="form-control" id="m" onkeypress="convert_length(1);" />
			</div>
		</td>
		<td>
			<div class="col-sm-10 centerd input-group">
				<span class="input-group-addon">呎</span>
				<input type="number" class="form-control" id="cf" onkeypress="convert_length(2);" />
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="col-sm-10 centerd input-group">
				<span class="input-group-addon">公里</span>
				<input type="number" class="form-control" id="km" onkeypress="convert_long_length(1);" />
			</div>
		</td>
		<td>
			<div class="col-sm-10 centerd input-group">
				<span class="input-group-addon">哩</span>
				<input type="number" class="form-control" id="mi" onkeypress="convert_long_length(2);" />
			</div>
		</td>
	</tr>
	<tr>
		<th rowspan="2">面積</th>
		<td>
			<div class="col-sm-10 centerd input-group">
				<span class="input-group-addon">平方米</span>
				<input type="number" class="form-control" id="m2" onkeypress="convert_size(1);" />
			</div>
		</td>
		<td>
			<div class="col-sm-10 centerd input-group">
				<span class="input-group-addon">平方呎</span>
				<input type="number" class="form-control" id="cf2" onkeypress="convert_size(2);" />
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="col-sm-10 centerd input-group">
				<span class="input-group-addon">市畝</span>
				<input type="number" class="form-control" id="mu" onkeypress="convert_big_size(1);" />
			</div>
		</td>
		<td>
			<div class="col-sm-10 centerd input-group">
				<span class="input-group-addon">英畝</span>
				<input type="number" class="form-control" id="ac" onkeypress="convert_big_size(2);" />
			</div>
		</td>
	</tr>
	<tr>
		<th rowspan="1">重量</th>
		<td>
			<div class="col-sm-10 centerd input-group">
				<span class="input-group-addon">千克</span>
				<input type="number" class="form-control" id="kg" onkeypress="convert_weight(1);" />
			</div>
		</td>
		<td>
			<div class="col-sm-10 centerd input-group">
				<span class="input-group-addon">磅</span>
				<input type="number" class="form-control" id="p" onkeypress="convert_weight(2);" />
			</div>
		</td>
	</tr>
	<tr>
		<th rowspan="1">容積</th>
		<td>
			<div class="col-sm-10 centerd input-group">
				<span class="input-group-addon">升</span>
				<input type="number" class="form-control" id="l" onkeypress="convert_volume(1);" />
			</div>
		</td>
		<td>
			<div class="col-sm-10 centerd input-group">
				<span class="input-group-addon">加侖</span>
				<input type="number" class="form-control" id="gal" onkeypress="convert_volume(2);" />
			</div>
		</td>
	</tr>
</table>
</form>

<?php get_footer(); ?>