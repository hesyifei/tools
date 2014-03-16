<?php include "../function.php"; ?>
<?php include "domain_lookup.php"; ?>
<?php
$seo = array(
	'description' => '需要查詢域名持有者信息或者域名過期日期？快來使用Arefly製作的「Whois查詢」小工具吧！',
	'keywords' => '域名, Whois, Whois查詢',
);
?>
<?php get_header("Whois查詢", $seo); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<form action="<?php echo curPageURL(); ?>" class="form-horizontal" role="form">
	<div class="form-group">
		<label class="col-sm-2 control-label" for="domain">域名/IP：</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="domain" id="domain" value="<?php echo $domain; ?>" placeholder="請輸入域名">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="<?php echo get_btn(); ?>">查詢</button>
		</div>
	</div>
</form>
<?php
if(!empty($domain)) {
	$domain = trim($domain);
	if(substr(strtolower($domain), 0, 7) == "http://") $domain = substr($domain, 7);
	if(substr(strtolower($domain), 0, 4) == "www.") $domain = substr($domain, 4);
	if(ValidateIP($domain)){
		$result = '<pre class="<?php echo get_alert_class("info"); ?>">'.LookupIP($domain).'</pre>';
	}else if(ValidateDomain($domain)){
		$result = '<pre class="<?php echo get_alert_class("info"); ?>">'.LookupDomain($domain).'</pre>';
	}else{
		$result = '<div class="<?php echo get_alert_class("danger"); ?>">輸入格式錯誤！</div>';
	}
}
?>
<?php echo $result; ?>

<?php get_footer(); ?>