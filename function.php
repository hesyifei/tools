<?php
/******************************* Functions Of All Tools *******************************/

//不顯示任何錯誤
error_reporting(0);

//開啟 Session
session_start();

//設定
require "tools_config.php";

//導航欄
require get_option("root_path")."/navbar.php";

//頭部內容
require get_option("root_path")."/header.php";

//底部內容
require get_option("root_path")."/footer.php";

//其他引用文件
require get_option("inc_path")."/all.php";
?>