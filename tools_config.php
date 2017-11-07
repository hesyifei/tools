<?php
/********************************* Config File **********************************/

//主網站名稱
define("SITE_NAME", "暢想資源");
//主網站英文名稱
define("SITE_ENG_NAME", "Arefly");
//主網站地址
define("SITE_URL", "https://www.arefly.com/");

/************************* PLEASE DO NOT CHANGE THE CODE BELOW ***************************/
define("__ROOT__", dirname(__FILE__));
define("__INC__", __ROOT__."/includes");

$folder_path = dirname(__FILE__);
$tools_path = $_SERVER['DOCUMENT_ROOT'];
$tools_url = str_replace($tools_path, "", $folder_path);
$tools_url = "//".$_SERVER['HTTP_HOST'].$tools_url;
define("TOOLS_URL", $tools_url);

function get_option($option){
	switch ($option){
		case "site_name":
			if(LANG == "en_US"){				//如果小工具為英文則獲取英文標題（LANG定義於header.php）
				return SITE_ENG_NAME;
			}else{
				return SITE_NAME;
			}
			return SITE_NAME;
		break;
		case "site_eng_name":
			return SITE_ENG_NAME;
		break;
		case "site_url":
			return SITE_URL;
		break;
		case "root_path":
			return __ROOT__;
		break;
		case "inc_path":
			return __INC__;
		break;
		case "tools_url":
			return TOOLS_URL;
		break;
	}
}
?>
