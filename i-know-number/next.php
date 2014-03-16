<?php include "../function.php"; ?>
<?php
if (isset($_POST['true'])){
	$_SESSION['number'] = $_SESSION['number'] + $_SESSION['table_name'][0][0];
	$_SESSION['table'] = $_SESSION['table'] + 1;
}else if (isset($_POST['false'])){
	$_SESSION['table'] = $_SESSION['table'] + 1;
}

if (isset($_POST['restart'])){
	$_SESSION['table'] = 1;
	$_SESSION['number'] = 0;
}
?>
<?php include "num.php"; ?>
<?php if($_SESSION['table'] < 7){ ?>
<?php include "table.php"; ?>
<?php }else{ ?>
<div class="<?php echo get_alert_class('success'); ?> text-center">
	<p>哈哈，我知道咯！</p>
	<p>你想的數字一定是 <strong><?php echo $_SESSION['number']; ?></strong> ！</p>
	<p>我猜對了吧？ XD</p>
	<br />
	<form class="form-inline text-center" action="" method="POST" role="form">
		<button type="button" class="<?php echo get_btn('info'); ?>" name="restart" id="restart" onclick="<?php echo use_ajax('level', '', 'restart'); ?>">重新開始</button>
	</form>
</div>
<?php
$_SESSION['table'] = 1;
$_SESSION['number'] = 0;
?>
<?php } ?>