<?php include "../function.php"; ?>
<?php
function rand_num(){
	$_SESSION['num'] = rand(0,10000);
	$_SESSION['time'] = 0;
}
function add_time($time){
	$_SESSION['time'] = $_SESSION['time'] + $time;
}
if(!isset($_SESSION['num'])){
	rand_num();
}
$your = $_POST['your'];
if(empty($your)){
	$message = "呃，你還沒輸入任何內容呢。。";
	$alert_class = "warning";
}else if($your == $_SESSION['num']){
	$message = "哇！你真厲害！居然猜到這個數字是".$_SESSION['num']."！<br />我又為你重新設定一個更難的數字，再去猜猜吧！";
	$alert_class = "success";
	rand_num();
}else if($your > $_SESSION['num']){
	$message = "不對哦！不過我可以告訴你，答案比".$your."<strong>更小</strong>";
	$alert_class = "warning";
	add_time(1);
}else if($your < $_SESSION['num']){
	$message = "不對哦！不過我可以告訴你，答案比".$your."<strong>更大</strong>";
	$alert_class = "warning";
	add_time(1);
}
?>
<div class="centerd <?php echo get_alert_class($alert_class); ?>">
	<?php echo $message; ?>
</div>
<?php if($_SESSION['time'] >= 30){ ?>
<br />
<div class="centerd <?php echo get_alert_class("warning"); ?>">
	似乎你已經猜了很多次了，要顯示答案麼？
	<button type="submit" name="rerand" class="<?php echo get_btn(); ?>" onclick="alert('這個數字是 <?php echo $_SESSION['num']; ?> 哦\n快點輸入吧！');">顯示答案</button>
</div>
<?php } ?>