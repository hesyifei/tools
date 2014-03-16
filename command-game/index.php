<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => 'Arefly精心製作的命令行小游戲，讓你飽嘗當黑客的滋味！',
	'keywords' => '命令行, 小游戲, 命令行小游戲, 黑客小游戲',
);
$header = array(
	'head_only' => true,
	'no_bootstrap' => true,
);
?>
<?php get_header("命令行小游戲", $seo, $header); ?>
<?php
/********************** 注釋開始 *************************/
/*
文件名稱 = index.php
詳細描述 = 首頁文件
*/
/*
變量注釋：

$command 輸入的命令

例如：$command = "cd Folder1";


$_SESSION['path'] 使用Session傳達的現在所在的文件夾名稱

例如：$_SESSION['path'] = "~";


$now_path 現在所在的文件夾名稱（~目錄就是 root）

例如：$now_path = "root";


$_SESSION['command_each_word'] 將命令使用 空格 分割為幾部分並使用Array儲存

例如：$_SESSION['command_each_word'] = array("cd", "Folder1");

*/
/********************** 注釋結束 *************************/


session_start();									//開啟Session

error_reporting(0);									//不顯示錯誤

include './other_function.php';						//載入支持文件

if (empty($_SESSION["path"])){					//如果沒有目前路徑
	$_SESSION["path"] = "~";
}

if ((empty($_SESSION["level"])) || (empty($_SESSION["command_all"])) || (isset($_POST['reset']))){
	unset($_SESSION['command_all']);
	unset($_SESSION['vim_screen']);
	unset($_SESSION['vim_all']);
	unset($_SESSION['command_each_word']);
	$_SESSION["level"] = 1;
	$_SESSION["path"] = "~";
	$_SESSION['command_all'] = 
"login as: root
root@127.0.0.1's password:
Last login: ". $time ." from ". $ip ."
Type \"help\" for help";
$_SESSION['command_all'] = $_SESSION['command_all'].$command."
".$message."
[root@command-game ".$_SESSION["path"]."]# ";
}

$command=$_POST['command'];

if ($_SESSION['path'] == "~"){
	$now_path = "root";
}else{
	$now_path = $_SESSION['path'];
}

include './level'.$_SESSION["level"].'.php';							//載入關卡文件


if(!empty($command)){
	$_SESSION['command_each_word'] = explode(" ", $command);
}


$ok_command = '/(' .implode('|', $ok_command_all) .')/i';

include ('./vim.php');
include ('./cd.php');
include ('./echo.php');

if(!empty($command)){
	if (preg_match($ok_command, $command)){									//如果命令可用
		$message = $return_message;
	}else{																	//如果命令不可用
		$real_command = $_SESSION['command_each_word'][0];								//取得命令的頭一個單詞（也就是真正的命令）
		$message = "-bash: ".$real_command.": command not found";
	}

$_SESSION['command_all'] = $_SESSION['command_all'].$command."
".$message."
[root@command-game ".$_SESSION["path"]."]# ";
}



?>

<?php if(isset($_SESSION['vim_screen'])){ ?>
<textarea rows="36" cols="105" id="vim_textarea" name="vim_textarea">
<?php echo $_SESSION['vim_all']; ?>
</textarea>
<?php }else{ ?>
<textarea rows="36" cols="105" readonly="1" id="textarea" name="textarea">
<?php echo $_SESSION['command_all']; ?>
</textarea>
<?php } ?>


<form action="" method="post">
	<p>
		<?php if(isset($_SESSION['vim_screen'])){ ?>
		<input type="text" id="vim_command" name="vim_command" size="80" autofocus="autofocus" autocomplete="off" />
		<?php }else{ ?>
		<input type="text" id="command" name="command" size="80" autofocus="autofocus" autocomplete="off" />
		<?php } ?>
		<input type="submit" />
		<input type="submit" id="reset" name="reset" value="重設" onclick="return confirm('你確定要重新開始游戲麼？\n注意：這將把你的游戲進度清零')" />
	</p>
</form>

<?php
$footer = array(
	'foot_only' => true,
	'no_bootstrap' => true,
);
?>
<?php get_footer($footer); ?>