<?php

$ok_command_all = array("ls", "help");				//可用指令

$ok_command = '/(' .implode('|', $ok_command_all) .')/i';

$_SESSION["path"] = "~";

switch ($command){
	case "ls":
		$return_message = 
"Applications               Desktop
Documents                  Documents
[--------------------恭喜你成功通過第一關！-----------------------------]";
		echo '<script>
		alert("恭喜你成功通過第一關！");
		</script>';
		$_SESSION["level"] = 2;
	break;

	case "help":
		$return_message = 
"幫助：
你好！歡迎來到這個「命令小游戲」，這是我們的第一關
首先，你需要瞭解這臺電腦最基本的命令，輸入 ls 試試看吧！
";
	break;

	default:
	
}

?>