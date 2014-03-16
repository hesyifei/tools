<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => '想要批量替換文字？Arefly小工具「搜索並替換」絕對能幫到你！',
	'keywords' => '搜索並替換, 替換文字',
);
?>
<?php get_header("搜索並替換", $seo); ?>
<div class="<?php echo get_alert_class('info'); ?>">請輸入你想替換的文字：</div>
<form class="form-horizontal" action="" method="post" role="form">
	<div class="form-group">
		<div class="col-sm-10 centerd">
			<textarea class="form-control" cols="50" rows="10" id="input" name="input"><?php echo $_POST["input"]; ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-7 centerd input-group">
			<span class="input-group-addon">尋找</span>
			<input name="search" class="form-control" type="text" id="search" />
			
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-7 centerd input-group">
			<span class="input-group-addon">替換為</span>
			<input name="replace" class="form-control" type="text" id="replace" />
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-4 centerd input-group">
			<span class="input-group-addon">替換次數</span>
			<input type="number" name="time" class="form-control" id="time" <?php enter_num_only(); ?> />
			<span class="input-group-addon">留空為不限</span>
		</div>
	</div>
	<div class="form-group text-center">
		<button class="<?php echo get_btn(); ?>" type="submit" name="Submit">確認</button>
	</div>
</form>

<?php
$old=$_POST["input"];
$search=$_POST["search"];
$replace=$_POST["replace"];
$time=$_POST["time"];

if( (empty($old)) || (empty($replace)) || (empty($search)) ){ //未填寫任何內容
	?>
	<div class="<?php echo get_alert_class('warning'); ?>">
		你還沒有輸入任何內容哦！
	</div>
	<?php
} else if(!preg_match('/'.$search.'/i', $old, $matches)){ //沒有可以替換的內容
	?>
	<div class="<?php echo get_alert_class('warning'); ?>">
		沒有找到可以替換的內容！
	</div>
	<?php
} else {	//正常替換
	if(empty($time)){
		$time = "-1";
	}
	$new = preg_replace('/'.$search.'/i',$replace,$old,$time, $count); //替換，並把次數儲存位$count
	?>
	<div class="<?php echo get_alert_class('success'); ?>">
		替換成功！
		（把<?php echo $count; ?>個「<?php echo $search; ?>」替換為「<?php echo $replace; ?>」）
	</div>
	<div class="col-sm-10 centerd">
		<textarea class="form-control" cols="50" rows="10"><?php echo $new; ?></textarea>
	</div>
	<?php
}
?>
<?php get_footer(); ?>