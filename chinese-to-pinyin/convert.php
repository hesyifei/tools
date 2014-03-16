<?php include "../function.php"; ?>
<?php include "pinyin.php"; ?>
<?php
$str = $_POST['word'];
$py = new cn2pinyin();
$word = utf8_str_split($str);
?>
<div class="<?php echo get_alert_class('success'); ?>" style="padding-top: 30px;">
<?php foreach ($word as $each_word){ ?>
<?php $pinyin = $py->get($each_word, 0); ?>
<ruby><rb><?php echo $each_word; ?></rb><rt><?php echo $pinyin; ?></rt></ruby>
<?php } ?>
</div>