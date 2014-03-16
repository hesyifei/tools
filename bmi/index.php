<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => '不知道自己的體重達不達標？不知道自己是否過胖或過瘦？沒關係！現在就來用Arefly製作的BMI指數計算器吧！',
	'keywords' => 'BMI, BMI指數計算器',
);
?>
<?php get_header("計算BMI指數", $seo); ?>

<form class="form-horizontal" role="form">
	<div class="form-group">
		<label for="height" class="col-sm-2 control-label">高度</label>
		<div class="col-sm-4">
			<input type="number" id="height" class="form-control" tabindex="1" onkeypress="return isNumber(event)" />
		</div>
		<div class="col-sm-1">
			<select id="height_type" class="selectpicker">
				<option value="厘米" name="cm" selected="selected">厘米</option>
				<option value="米" name="m">米</option>
				<option value="英呎" name="ft">英呎</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="weight" class="col-sm-2 control-label">體重</label>
		<div class="col-sm-4">
			<input type="number" id="weight" class="form-control" tabindex="2" onkeypress="return isNumber(event)" />
		</div>
		<div class="col-sm-1">
			<select id="weight_type" class="selectpicker"> 
				<option value="千克" name="kg" selected="selected">千克</option>
				<option value="磅" name="pound">磅</option>
				<option value="克" name="g">克</option>
				<option value="毫克" name="mg">毫克</option>
				<option value="噸" name="t">噸</option>
			</select>
		</div>
	</div>

	<div class="form-group text-center">
		<button type="button" class="<?php echo get_btn(); ?>" tabindex="3" onclick="bmi( (document.getElementById('height').value), (document.getElementById('height_type').value), (document.getElementById('weight').value), (document.getElementById('weight_type').value) );">確認</button>
	</div>
</form>

<div id="result">
	<p id="bmi_result"></p>
	<p id="hint"></p>
</div>

<div id="more_info" style="display: none;">

<div class="<?php echo get_alert_class('info'); ?>">想知道多一點關於BMI指數的事情麼？看看這裏吧</div>

<table class="table table-striped table-bordered table-hover text-center centerd" style="width: 500px;">
	<tbody>
		<tr>
			<td>健康狀況</td>
			<td>BMI 值</td>
		</tr>
		<tr class="warning">
			<td>體重過低</td>
			<td>&lt;18.5</td>
		</tr>
		<tr class="success">
			<td>一般體重</td>
			<td>18.5到23.9之間</td>
		</tr>
		<tr class="warning">
			<td>超重</td>
			<td>24到27.9之間</td>
		</tr>
		<tr class="danger">
			<td>肥胖</td>
			<td>&ge;28</td>
		</tr>
	</tbody>
</table>

</div>

<?php get_footer(); ?>