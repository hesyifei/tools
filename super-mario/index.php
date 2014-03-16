<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => 'Game Super Mario is a very very fun game. You can also build your own level in this Version of Game made by Arefly!',
	'keywords' => 'Game, Super Mario',
);
$header = array(
	'head_only' => true,
	'no_bootstrap' => true,
	'body_tag' => 'onload="start()"',
	'extra_script' => array("ui.js"),
	'extra_css' => array("default.css", "Fonts/stylesheet.css"),
	'lang' => 'en_US',
);
?>
<?php get_header("Super Mario", $seo, $header); ?>
	
	<!-- Top header -->
	<div id="header">
		<!-- <img id="beta" src="Theme/Beta.png"> -->
		<!-- <span id="version"></span> -->
	</div>
	
	<!-- Game itself -->
	<iframe id="game" src="mario.html"></iframe>
	
	<!-- After the game (retracts as needed) -->
	<div id="after">
	
		<!-- Level Editor popup -->
		<div id="out_editor" class="bar1">
			<div class="label">- Level Editor -</div>
			<div id="in_editor" class="expander"></div>
		</div>
		
		<!-- Map Selector popup -->
		<div id="out_mapselect" class="bar1">
			<div class="label">- Map Select -</div>
			<div id="in_mapselect" class="expander"></div>
		</div>
		
		<!-- Options popup -->
		<div id="out_options" class="bar1">
			<div class="label">- Options -</div>
			<div id="in_options" class="expander"></div>
		</div>
		
	</div>

<?php
$footer = array(
	'foot_only' => true,
	'no_bootstrap' => true,
);
?>
<?php get_footer($footer); ?>