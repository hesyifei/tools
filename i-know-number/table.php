<table class="table table-striped table-bordered table-hover table-condensed" style="width: 400px;">
<?php
for($i=0; $i<count($_SESSION['table_name']); $i++){
	echo '	<tr>
';
	for($j=0; $j<4; $j++){
		echo "		<td>" . $_SESSION['table_name'][$i][$j] . "</td>
";
	}
	echo '	</tr>
';
}
?>
</table>
<?php if($_SESSION['table'] < 7){ ?>
<br />
<form class="form-inline text-center" action="" method="POST" role="form">
	<div class="form-group">
		<button type="button" class="<?php echo get_btn('success'); ?>" name="true" id="true" onclick="<?php echo use_ajax('level', '', 'true'); ?>">存在</button>
	</div>
	<div class="form-group">
		<button type="button" class="<?php echo get_btn('warning'); ?>" name="false" id="false" onclick="<?php echo use_ajax('level', '', 'false'); ?>">不存在</button>
	</div>
	<div class="form-group">
		<button type="button" class="<?php echo get_btn('info'); ?>" name="restart" id="restart" onclick="<?php echo use_ajax('level', '', 'restart'); ?>">重新開始</button>
	</div>
</form>
<?php } ?>