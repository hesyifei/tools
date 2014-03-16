<?php
//不顯示任何錯誤
error_reporting(0);
//錯誤信息（包括彩蛋）
switch ($_POST['domain']){
	case "gov.cn":
		$err_message = "你竟然敢拿天朝政府的网站造谣？！来人，把他抓起来！";
	break;
	case "gov.hk":
		$err_message = "你呃人！你講大話！堂堂香港政府點可能係你ge？";
	break;
	case "usa.gov":
		$err_message = "Sorry, but I don't know such thing as ZXSZZLM. Can I eat it?";
	break;
	case "go.jp":
		$err_message = "中國の違法組織？あなたはそれを食べることができますか？";
	break;
	case "com.kp":
		$err_message = "자본주의 아래로!";
	break;
	case "baidu.com":
		$err_message = "親~度娘可不是你的媽媽哦~";
		break;
	case "google.com":
		$err_message = "親~Google可不是你的哦~";
	break;
	case "360.cn":
		$err_message = "親~360永遠都不可能是你的哦~";
	break;
	case "qq.com":
		$err_message = "你瘋了麼？QQ怎麼可能是你的？";
	break;
	case "000webhost.com":
		$err_message = "你瘋了麼？000webhost不是你的哦~";
	break;
}
?>