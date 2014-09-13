<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => '需要直接查詢App Store中的軟體APP信息？快來用AREFLY所精心製作的「App Store程式信息查詢」，只需輸入APP網址即可查詢APP的名稱、價格、版本等！',
	'keywords' => 'App Store, iTunes, Apple',
);
?>
<?php get_header("App Store程式信息查詢", $seo); ?>

<form class="form-horizontal" action="" method="GET" role="form">
	<div class="form-group">
		<label for="domain" class="col-sm-2 control-label">App Store程式網址</label>
		<div class="col-sm-8">
			<input type="url" class="form-control" id="url" name="url" placeholder="https://itunes.apple.com/us/app/name/id88888888" value="<?php if(!empty($_GET['url'])) echo htmlspecialchars($_GET['url']); ?>" required="required" />
		</div>
	</div>
	<div class="form-group">
		<div class="centerd">
			<button type="submit" class="<?php echo get_btn(); ?>">立即查詢</button>
		</div>
	</div>
</form>

<?php if(!empty($_GET['url'])){ ?>
<?php
$itunes_url = parse_url($_GET['url']);
$itunes_url = $itunes_url['path'];
$itunes_url = end(explode("/", $itunes_url));
sscanf($itunes_url, 'id%d', $id);

if( (parse_url($_GET['url'])['host'] == 'itunes.apple.com') && (!empty($id)) ){
	$url = "https://itunes.apple.com/lookup?id=".$id;
	$json = file_get_contents($url);
	$data = json_decode($json, TRUE);
	$result = $data['results'][0];
	//print_r($result);
	$name = $result['trackName'];
	if($result['price'] == "0"){
		$price = "免費";
	}else{
		$price = '$'.$result['price'];
	}
	$version = $result['version'];
	$category = $result['primaryGenreName'];
	$description = $result['description'];
	$app_store_url = $result['trackViewUrl'];
	?>
<div class="<?php echo get_alert_class('success'); ?>">
	<p>名稱：<?php echo $name; ?></p>
	<p>價格：<?php echo $price; ?></p>
	<p>版本：<?php echo $version; ?></p>
	<p>分類：<?php echo $category; ?></p>
	<p>描述：<?php echo $description; ?></p>
	<p>地址：<a href="<?php echo $app_store_url; ?>" target="_blank"><?php echo $app_store_url; ?></a></p>
</div>
<?php }else{ ?>
<div class="<?php echo get_alert_class('warning'); ?>">
	<p>你輸入的網址並非App Store網址！</p>
</div>
<?php } ?>

<?php } ?>

<?php get_footer(); ?>