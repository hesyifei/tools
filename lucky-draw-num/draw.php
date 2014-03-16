<?php include "../function.php"; ?>
<?php
$_SESSION["number"] = $_POST['number'];
$number_session = $_SESSION["number"]; //將這個變數設置為「number」的Session

$rand = rand("1", $number_session); //算出一個隨機數
?>

<?php if(empty($_POST["number"])){ ?>
<div class="<?php echo get_alert_class('warning'); ?>">請輸入總數！</div>
<?php }else{ ?>
<div class="<?php echo get_alert_class('success'); ?>">
	<p>哎呀，抽中了<?php echo $rand; ?>號！！</p>
	<p>（總數：<?php echo $number_session; ?>）</p>
</div>
<?php } ?>