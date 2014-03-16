<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => '想看看自己瀏覽器的詳細資料？現在就來Arefly製作的「User Agent」來看看吧！',
	'keywords' => 'User Agent, 瀏覽器資料, 瀏覽器',
);
$header = array(
	'extra_script' => array("useragent.min.js"),			//Extra Script File
);
?>
<?php get_header("User Agent", $seo, $header); ?>
 
<script>
	//alert(navigator.userAgent);
	Browsers = new UserAgents(navigator.userAgent);
	var txt = "<h2>" + Browsers.toString() + "</h2>" +
			  "<h3>瀏覽器：" + (Browsers.browser.name ? Browsers.browser.name : '') + '</h3>' +
			  "<p>瀏覽器頻道：" + (Browsers.browser.channel ? Browsers.browser.channel : '') + '</p>' +
			  "<p>瀏覽器版本：" + (Browsers.browser.version ? Browsers.browser.version.toString() : '') + '</p>' +
			  "<p>引擎名稱：" + (Browsers.engine.name ? Browsers.engine.name : '') + '</p>' +
			  "<p>引擎版本：" + (Browsers.engine.version ? Browsers.engine.version.toString() : '') + '</p>' +
			  "<h3>系統：" + (Browsers.os.name ? Browsers.os.name : '') + '</h3>' +
			  "<p>系統版本：" + (Browsers.os.version ? Browsers.os.version.toString() : '') + '</p>' +
			  "<p>設備廠商：" + (Browsers.device.manufacturer ? Browsers.device.manufacturer : '') + '</p>' +
			  "<p>設備型號：" + (Browsers.device.model ? Browsers.device.model : '') + '</p>' +
			  "<p>設備種類：" + (Browsers.device.type ? Browsers.device.type : '') + '</p>' +
			  "<p>詳細信息：<br>" + navigator.userAgent + "</p>";
	//alert(txt);
	window.document.write(txt);
</script>

<?php get_footer(); ?>