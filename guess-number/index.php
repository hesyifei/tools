<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => '想要玩玩小游戲？不用再去找了，這裏就有「猜數字」小游戲，還可以隨機生成一個數字哦！',
	'keywords' => '小游戲, 猜數字',
);
?>
<?php get_header("猜數字", $seo); ?>
<?php
function rand_num(){
	$_SESSION['num'] = rand(0,10000);
	$_SESSION['time'] = 0;
}
?>
<form action="" method="post" class="form-inline text-center" role="form" style="padding-bottom: 20px;"s>
	<div class="form-group">
		<input name="your" class="form-control" type="number" id="your" autofocus="autofocus" <?php enter_num_only(); ?> />
	</div>
	<div class="form-group">
		<button type="button" name="submit" class="<?php echo get_btn(); ?>" onclick="<?php echo use_ajax('guess', 'your'); ?>">猜猜看</button>
	</div>
	<div class="form-group">
		<button type="submit" name="rerand" class="<?php echo get_btn(); ?>">換一個數字</button>
	</div>
</form>
<div id="result"></div>
<?php
if(isset($_POST['rerand'])){						//如果按下「換一個數字」
	rand_num();
}
?>
<?php get_footer(); ?>