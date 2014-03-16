<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => '我會變魔術哦！我一定能猜出你心中所想的數字！',
	'keywords' => '猜出你所想的數字, 魔術, 猜數字',
);
?>
<?php get_header("猜出你所想的數字", $seo); ?>
<?php
if ( (!isset($_SESSION['table'])) || ($_SESSION['table'] > 6) || ($_SESSION['table'] < 0) ){
	$_SESSION['table'] = 1;
}
if (!isset($_SESSION['number'])){
	$_SESSION['number'] = 0;
}
?>
<?php include "num.php"; ?>

<?php if ($_SESSION['table'] < 7){ ?>
<div class="<?php echo get_alert_class('info'); ?>">請在0-63之間任意想一個數字，並且看看你想的數字在下表是否存在。最後我一定能猜到你想出的數字！ :D</div>
<div id="result">
<?php include "table.php"; ?>
</div>
<?php } ?>
<?php
$footer = array(
	'more_footer' => '資料提供者：Dr.Steins Stark',
);
?>
<?php get_footer($footer); ?>