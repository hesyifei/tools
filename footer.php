<?php
/******************************* Footer Of All Tools *******************************/
/*
Function: get_footer($footer)

Variable: 
$footer (Array){
	$more_footer
	$more_footer_copyright
	$jquery 						// jQuery version of the tool (Can Be "disable" too)
	$extra_script					// Extra Script File
	$foot_only						// If true, the function will only return the foot without text
	$no_bootstrap					// If true, the function will not return bootstrap code of the page
}

E.G.: 
$footer = array(
	'more_footer' => 'More Hints',
	'more_footer_copyright' => 'Another Person',
	'jquery' => '2.0.3',
	'extra_script' => array("script1.js", "script2.js", "script3.js"),
	'foot_only' => true,
	'no_bootstrap' => true,
);
*/
?>
<?php function get_footer($footer) { ?>
<?php extract($footer); ?>
<?php
if (empty($jquery)){
	$jquery = "2.1.1";
}
?>
<?php if($foot_only != 1){ ?>
</div>

<div class="text-center">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 文章底部（580*90） -->
<ins class="adsbygoogle"
style="display:inline-block;width:580px;height:90px"
data-ad-client="ca-pub-4890802000578360"
data-ad-slot="6863330530"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<div id="footer">
	<div class="container">
		<p class="text-center text-muted credit">Copyright &copy; <?php echo copyright_year(2013); ?> <a href="<?php echo get_option("site_url"); ?>" title="<?php echo get_option("site_name"); ?>" target="_blank"><?php echo get_option("site_eng_name"); ?></a><?php if(isset($more_footer_copyright)){ ?> &amp; <?php echo $more_footer_copyright; ?><?php } ?> All rights reserved</p>
		<p class="text-center text-muted credit">本站備案號：<a href="http://www.miibeian.gov.cn/" rel="external nofollow" title="備案查詢" target="_blank">沪ICP备14025677号</a></p>
		<?php if (is_array($more_footer)){ ?>
		<?php foreach ($more_footer as $footer_word){ ?>
		<p class="text-center text-muted credit"><?php echo $footer_word; ?></p>
		<?php } ?>
		<?php }else if (isset($more_footer)){ ?>
		<p class="text-center text-muted credit"><?php echo $more_footer; ?></p>
		<?php } ?>
	</div>
</div>

<?php
//如果有多餘的FOOTER內容則引用小工具目錄下的「footer.php」文件
if(is_file("footer.php")){
	include "footer.php";
}
?>
<?php } ?>
<!-- Bootstrap core JavaScript -->
<!-- ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php if ($jquery != "disable"){ ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//apps.bdimg.com/libs/jquery/<?php echo $jquery; ?>/jquery.min.js"></script>
<?php } ?>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<?php if($no_bootstrap != 1){ ?>
<script src="<?php echo get_option("tools_url"); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_option("tools_url"); ?>/js/bootstrap-select.js"></script>
<script src="<?php echo get_option("tools_url"); ?>/js/bootstrap-select.min.js"></script>
<?php } ?>
<script src="<?php echo get_option("tools_url"); ?>/js/function.js"></script>
<?php if(is_file("script.js")){ ?>
<script src="script.js"></script>
<?php } ?>
<?php foreach ($extra_script as $script){ ?>
<script src="<?php echo $script; ?>"></script>
<?php } ?>

<script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','//www.arefly.com/analytics.js','ga');  ga('create', 'UA-38324036-1', 'arefly.com');  ga('send', 'pageview');</script>

<script>
$(window).load(function() {
	$("#circle").fadeOut(500);
	$("#circle1").fadeOut(700);
});
</script>

<?php
//如果有多餘的FOOT內容則引用小工具目錄下的「foot.php」文件
if(is_file("foot.php")){
	include "foot.php";
}
?>

</body>
</html>
<?php } ?>
