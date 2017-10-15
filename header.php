<?php
/******************************* Header Of All Tools *******************************/
/*
Function: get_header($title, $seo, $header)

Variable: 
$title (*)
$seo (* Array){
	$description 	// (*)
	$keywords 		// (*)
}
$header (Array){
	$head_only		// If true, the function will only return <head> part of the page
	$no_bootstrap	// If true, the function will not return bootstrap code of the page
	$body_tag		// Extra Body TAG
	$extra_script	// Extra Script File
	$extra_css		// Extra CSS File
	$lang			// Language of Tools
}

E.G.: 
$title = "My Tools"
$seo = array(
	'description' => 'This Tools can let you...',
	'keywords' => 'Tools, My Tools',
);
$header = array(
	'head_only' => true,
	'no_bootstrap' => true,
	'body_tag' => 'class="body-class"',
	'extra_script' => array("script1.js", "script2.js", "script3.js"),
	'extra_css' => array("style1.css", "style2.css", "style3.css"),
	'lang' => 'en_US',
);
*/
?>
<?php function get_header($title, $seo, $header) { ?>
<?php extract($seo); ?>
<?php extract($header); ?>
<?php
if(empty($lang)){
	$lang = "zh_TW";
}
define("LANG", $lang);
?>
<?php
/* 工具多語言開始 */
$package = 'tools';

putenv('LANG='.$lang);
setlocale(LC_ALL, $lang);

bindtextdomain($package, get_option("root_path").'/locale');
textdomain($package);
bind_textdomain_codeset ($package, "UTF-8");
/* 工具多語言結束 */
?>
<?php
$html_lang = str_replace("_", "-", $lang);
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="<?php echo $html_lang; ?>">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="<?php echo $html_lang; ?>">
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html lang="<?php echo $html_lang; ?>">
<!--<![endif]-->
<head>

<!-- <?php echo sprintf(_('Tools Made By %s'), get_option("site_name")); ?> -->
<!-- <?php echo sprintf(_('(C) Copyright %s'), get_option("site_eng_name")); ?> -->

<!--

 .---.  .----. .----..-.  .-..----. .-. .---. .-. .-. .---. 
/  ___}/  {}  \| {}  }\ \/ / | {}  }| |/   __}| {_} |{_   _}
\     }\      /| .--'  }  {  | .-. \| |\  {_ }| { } |  | |  
 `---'  `----' `-'     `--'  `-' `-'`-' `---' `-' `-'  `-'  
           _____  ______ ______ _  __     __
     /\   |  __ \|  ____|  ____| | \ \   / /
    /  \  | |__) | |__  | |__  | |  \ \_/ / 
   / /\ \ |  _  /|  __| |  __| | |   \   /  
  / ____ \| | \ \| |____| |    | |____| |   
 /_/    \_\_|  \_\______|_|    |______|_|   
                                            
-->

<meta charset="UTF-8">
<title><?php echo $title; ?> | <?php echo get_option("site_name"); ?></title>
<?php if(isset($description)){ ?>
<meta name="description" content="<?php echo $description; ?>" />
<?php } ?>
<?php if(isset($keywords)){ ?>
<meta name="keywords" content="<?php echo $keywords; ?>, <?php echo _("Arefly's Tools"); ?>" />
<?php } ?>
<?php
//如果有多餘的HEAD內容則引用小工具目錄下的「head.php」文件
if(is_file("head.php")){
	include "head.php";
}
?>
<link rel="shortcut icon" href="//file.arefly.com/favicon.ico" />
<link rel="icon" href="//file.arefly.com/favicon.ico" />
<link href="<?php echo get_option("tools_url"); ?>/style.css" rel="stylesheet">
<?php if($no_bootstrap != 1){ ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Bootstrap -->
<link href="<?php echo get_option("tools_url"); ?>/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="<?php echo get_option("tools_url"); ?>/css/navbar-fixed-top.css" rel="stylesheet">
<!-- Bootstrap Select Style -->
<link href="<?php echo get_option("tools_url"); ?>/css/bootstrap-select.min.css" rel="stylesheet">
<?php } ?>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<?php if(is_file("style.css")){ ?>
<link rel="stylesheet" href="style.css">
<?php } ?>
<?php foreach ($extra_css as $css){ ?>
<link rel="stylesheet" href="<?php echo $css; ?>">
<?php } ?>
<?php foreach ($extra_script as $script){ ?>
<script src="<?php echo $script; ?>"></script>
<?php } ?>
</head>
<div id="circle"></div><div id="circle1"></div>
<body<?php if(isset($body_tag)){ echo ' '.$body_tag; } ?>>
<?php if($head_only != 1){ ?>

<?php if($no_bootstrap != 1){ ?>
<?php get_navbar($title); ?>
<?php } ?>

<div class="container">

<?php
//如果有多餘的頂部內容則引用小工具目錄下的「header.php」文件
if(is_file("header.php")){
	include "header.php";
}
?>

<h1 class="title"><?php echo $title; ?></h1>
<?php } ?>
<?php } ?>
