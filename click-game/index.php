<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => '很無聊？快來玩玩Arefly製作的按來按去小游戲，保證讓你更加無聊！',
	'keywords' => '按來按去, 小游戲, 鼠標',
);
?>
<?php get_header("按來按去小游戲", $seo); ?>

<div class="centerd">
	<button type="button" class="<?php echo get_btn(); ?> btn-lg" id="play" name="play" onclick="game()">開始游戲</button>
</div>

<br /><br />

<div id="game_result">
	<p id="result"></p>
</div>

<?php get_footer(); ?>