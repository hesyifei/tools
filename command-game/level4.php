<?php
/********************** 注釋開始 *************************/
/*
文件名稱 = level4.php;
詳細描述 = 第四關卡文件
日期 = 2013年12月15日-2013年10月1日
*/
/*
變量注釋：

$command 輸入的命令

例如：$command = "cd Folder1";


$_SESSION['path'] 使用Session傳達的現在所在的文件夾名稱

例如：$_SESSION['path'] = "~";


$now_path 現在所在的文件夾名稱（~目錄就是 root）

例如：$now_path = "root";


$file_path = 現在所在的文件夾的包括 $folder_ 的變量

例如：$file_path = $folder_root;


$folder_xxx （xxx為現在所在的文件夾名稱）（使用Array儲存）此文件夾下的所有文件（例如 $folder_root 裏的Array就是 root 文件夾下的所有文件+文件夾）

例如：$folder_root = array("Folder1", "Folder2", "Folder3");


$folder_count 當前文件夾內文件（包括文件夾）的總數

例如：$folder_count = 5;


$ok_command_all 可以使用的命令（使用Array儲存）

例如：$ok_command_all = array("ls", "cd", "help");

$ok_command 使用 | 分割過後的可用命令


$command_each_word 將命令使用 空格 分割為幾部分並使用Array儲存

例如：$command_each_word = array("cd", "Folder1");

*/
/********************** 注釋結束 *************************/
/*
$folder_root = array("Applications", "Desktop", "Documents", "My Photo");			//root內的文件

$folder_Desktop = array("gravatar.jpg", "MTR.jpg", "IMPORTANT.txt");			//Desktop內的文件
$folder_Applications = array("Safari", "Chrome", "Mail", "Sublime Text 2");			//Desktop內的文件

$file_path = ${'folder_'.$now_path};							//取得文件夾Array
$folder_count = count($file_path);								//取得Folder數量總數

$vim_IMPORTANT_txt = "456";

$command_word = explode(".", $_SESSION['command_each_word'][1]);

$sliced = array_slice($command_word, 0, -1);
$file_name_only = implode(" ", $sliced);

$vim_file_name = ${'vim_'.$file_name_only."_".end($command_word)};							//取得文件VIM時的內容

$ok_command_all = array("ls", "dir", "vim", "cd", "echo", "help", "shutdown", "mail");				//可用指令

switch ($command){
	case "ls":
		for ($i=0;$i<$folder_count;++$i){										//取得所有文件夾
			$all_folder = $all_folder.$file_path[$i]."              ";			//輸出所有文件夾
		}
		$return_message = $all_folder;
	break;

	case "dir":
		for ($i=0;$i<$folder_count;++$i){										//取得所有文件夾
			$all_folder = $all_folder.$file_path[$i]."              ";			//輸出所有文件夾
		}
		$return_message = $all_folder;
	break;

	case "help":
		$return_message = 
"幫助：
這是你的真正的第一個挑戰
現在你需要進入一個文件夾，然後竊取當中的重要資料（記得把資料拷貝到你自己的電腦上哦！）";
	break;
}

if ( ($vim_file_name == $vim_IMPORTANT_txt) && ( ($_POST['vim_command'] == ":qa") || ($_POST['vim_command'] == ":qa!") || ($_POST['vim_command'] == ":wq") ) ){
	$return_message = "
[--------------------恭喜你成功通過第三關！-----------------------------]";
		?><script>
		alert("恭喜你成功通過第三關！");
		</script><?php
		$_SESSION["level"] = 4;
};
*/
$return_message = "
[-----------------------第四關開發中-----------------------------]";
?>