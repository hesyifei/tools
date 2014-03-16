<?php
if (in_array("cd", $_SESSION['command_each_word'])){
	$cd_folder = $_SESSION['command_each_word'][1];
	if (in_array($cd_folder, $file_path)){
		$_SESSION["path"] = $cd_folder;
	} else if ($cd_folder == "..") {
		$_SESSION["path"] = "~";
	} else if (empty($_SESSION["path"])){					//如果沒有目前路徑
		$_SESSION["path"] = "~";
	} else {
		$return_message = "-bash: cd: ".$cd_folder.": No such file or directory";
	}
}
?>