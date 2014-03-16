<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => '想玩玩益智小游戲？Arefly精心製作的小游戲「迷宮」一定符合你的要求！',
	'keywords' => '迷宮, 小工具',
);
$header = array(
	'extra_script' => array("jquery.js", "jquery.hotkey.js"),			//Extra Script File
);
?>
<?php get_header("迷宮", $seo, $header); ?>
<div class="centerd">
<p>規則：從左上角出發，終點為右下角紅旗處。</p>
<div id="mg" class="mg centerd"></div>
<br />
<p>提示：您可以使用鍵盤上的上、下、左、右方向鍵控制迷宮中笑臉的移動。</p>

<strong>設置：</strong>
<p><input type="checkbox" onclick="mark(1, this);" id="mark1" /> <label for="mark1">將走過的格子用紅色標出</label></p>

<form class="form-inline">
	<div class="form-group">
		寬：<input type="text" class="form-control" id="mg_width" value="20" size="4" maxlength="2" <?php enter_num_only(); ?> />
	</div>
	<div class="form-group">
		高：<input type="text" class="form-control" id="mg_height" value="20" size="4" maxlength="2" <?php enter_num_only(); ?> />
	</div>
	<button type="button" class="<?php echo get_btn(); ?>" onclick="new_mg();">生成新迷宮</button>
</form>

</div>

<?php
$footer = array(
	'jquery' => 'disable',
);
?>
<?php get_footer($footer); ?>