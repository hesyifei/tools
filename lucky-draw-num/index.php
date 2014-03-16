<?php include "../function.php"; ?>
<?php
if(!empty($_POST["number"])){  //如果「總數」框不是空的，那麼就把框內的內容設置位Cookie，並且再24小時後過期
	setcookie("number", $_POST["number"] , time()+3600*24);
	header('refresh: 0;url="./"');
}
?>
<?php
$seo = array(
	'description' => '需要抽獎？需要抽號碼？Arefly小工具「抽籤」一定能達到你的要求！',
	'keywords' => '抽籤, 抽獎, 抽號碼',
);
?>
<?php get_header("抽籤", $seo); ?>

<form class="form-inline centerd text-center" action="" method="POST" role="form" style="width: 500px;">
	<div class="form-group">
		<div class="centerd input-group">
			<span class="input-group-addon">總數</span>
			<input type="number" class="form-control" name="number" id="number" value="<?php echo $_SESSION['number']; ?>" autofocus="autofocus" <?php enter_num_only(); ?> />
		</div>
	</div>
	<br /><br />
	<div class="form-group text-center">
		<div class="text-center">
			<button type="button" class="<?php echo get_btn('primary btn-lg'); ?>" onclick="<?php echo use_ajax('draw', 'number'); ?>">抽吧</button>
		</div>
	</div>
</form>
<br /><br />
<div id="result"></div>
<?php get_footer(); ?>