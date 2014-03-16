<?php include "../function.php"; ?>
<?php
if (isset($_POST['stop'])){												//如果點擊「停止轟炸」
	//刪除所有Cookie
	setcookie("email", "", time()-3600);
	setcookie("subject", "", time()-3600);
	setcookie("content", "", time()-3600);
	setcookie("time", "", time()-3600);
	header('refresh: 0;url="./"');										//自動刷新頁面以便即使刪除Cookie
	exit();																//不要繼續執行程序
}

if (isset($_POST['submit'])){											//如果點擊「開始轟炸」
	setcookie("email", $_POST['email'], time()+3600);					//郵件收件人Cookie
	setcookie("subject", $_POST['subject'], time()+3600);				//郵件標題Cookie
	setcookie("content", nl2br($_REQUEST['content']), time()+3600);		//郵件內容Cookie
	setcookie("time", 1, time()+3600);									//發送次數Cookie
	header('refresh: 0;url="./"');										//自動刷新頁面以便Cookie生效
}


if (!empty($_COOKIE['email'])){											//如果存在Cookie（下同）
	$email = $_COOKIE['email'];
	setcookie("time", $_COOKIE['time'] + 1, time()+3600);
	header('refresh: 10;url="./"');										//10秒自動刷新頁面已起到「轟炸」的效果
}else{																	//如果不存在Cookie（下同）
	$email = $_POST['email'];
}

if (!empty($_COOKIE['subject'])){
	$subject = $_COOKIE['subject'];
}else{
	$subject = $_POST['subject'];
}

if (!empty($_COOKIE['content'])){
	$content = $_COOKIE['content'];
}else{
	$content = nl2br($_REQUEST['content']);
}

?>
<?php
$seo = array(
	'description' => '想要給某人發送垃圾郵件？「郵件轟炸機」幫到你！',
	'keywords' => '郵件轟炸, 郵件',
);
?>
<?php get_header("郵件轟炸機", $seo); ?>
<div class="<?php echo get_alert_class("info"); ?>">
	這是一個郵件轟炸機小程序，僅供娛樂，請勿用於商業或個人用途
</div>
<br />
<form class="form-horizontal centerd" action="" method="post" role="form" style="width: 500px; padding-bottom: 20px;">
	<div class="form-group">
		<label for="email">可悲的垃圾郵件接受者</label>
		<input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" />
	</div>
	<div class="form-group">
		<label for="subject">郵件標題</label>
		<input type="text" class="form-control" id="subject" name="subject" value="<?php echo $subject; ?>" />
	</div>
	<div class="form-group col-sm-12 centerd" style="padding-bottom: 20px;">
		<label for="subject">郵件內容（可以使用HTML）</label>
		<textarea class="form-control" id="content" name="content" cols="40" rows="10"><?php echo $content; ?></textarea>
	</div>
	<button type="submit" class="<?php echo get_btn("primary"); ?>" id="submit" name="submit">開始轟炸</button>
	<button type="submit" class="<?php echo get_btn("danger"); ?>" id="stop" name="stop">停止轟炸</button>
</form>

<?php

if ((isset($_COOKIE['email'])) && (isset($_COOKIE['subject'])) && (isset($_COOKIE['content']))){				//如果存在郵件發送信息
	require 'class.phpmailer.php';							//加載PHPMailer
	$mail = new PHPMailer;

	$mail->IsSMTP();										//使用SMTP

	$mail->Host = 'smtp.163.com';							//SMTP服務器
	$mail->Port = 465;										//SMTP服務器端口

	$mail->SMTPAuth = true;									//需要認證
	$mail->Username = 'do_not_reply_this';					//SMTP用戶名
	$mail->Password = '123456';								//SMTP密碼
	$mail->SMTPSecure = 'ssl';								//使用SSL驗證

	$mail->From = 'do_not_reply_this@163.com';				//發件人
	$mail->FromName = "可氣的垃圾郵件發送者";					//發件人名稱

	$mail->AddAddress(htmlspecialchars($email), "可悲的垃圾郵件接受者");			//收件人1

	$mail->IsHTML(true);									//郵件使用HTML

	$mail->Subject = htmlspecialchars($subject);			//郵件標題

	$mail->Body    = htmlspecialchars($content);			//郵件內容

	if(!$mail->Send()) {
		$message = '轟炸失敗（原因：'.$mail->ErrorInfo.'）';
		$class = "danger";
	}else{
		$message = '<h2>正在轟炸中......</h2><h2>已經轟炸'.$_COOKIE['time'].'次！</h2>';
		$class = "success";
	}
}else{
	if(isset($_POST['submit'])){
		if(!isset($_COOKIE['email'])){
			$message = "你還沒有輸入收件人郵箱呢！";
			$class = "warning";
		}else if(!isset($_COOKIE['subject'])){
			$message = "你還沒有輸入郵件標題呢！";
			$class = "warning";
		}else if(!isset($_COOKIE['content'])){
			$message = "你還沒有輸入郵件內容呢！";
			$class = "warning";
		}
	}
}
?>
<?php if(isset($message)){ ?>
<div class="<?php echo get_alert_class($class); ?>">
	<?php echo $message; ?>
</div>
<?php } ?>

<?php
$footer = array(
	'more_footer' => '請不要將此工具用於非法用途，否則後果自負！',
);
?>
<?php get_footer($footer); ?>