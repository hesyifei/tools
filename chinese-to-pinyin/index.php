<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => '想要把一段文字轉換為拼音？快來試試Arefly製作的「拼音轉換器」吧！',
	'keywords' => '拼音, 拼音轉換, 中文',
);
?>
<?php get_header("拼音轉換", $seo); ?>
<form class="form-horizontal" action="" method="post" role="form">
	<div class="<?php echo get_alert_class('warning'); ?>" style="padding-top: 30px;">
<ruby><rb>注</rb><rt>Zhu</rt></ruby>
<ruby><rb>意</rb><rt>Yi</rt></ruby>
<ruby><rb>：</rb><rt>：</rt></ruby>
<ruby><rb>拼</rb><rt>Pin</rt></ruby>
<ruby><rb>音</rb><rt>Yin</rt></ruby>
<ruby><rb>轉</rb><rt>Zhuan</rt></ruby>
<ruby><rb>換</rb><rt>Huan</rt></ruby>
<ruby><rb>時</rb><rt>Shi</rt></ruby>
<ruby><rb>繁</rb><rt>Fan</rt></ruby>
<ruby><rb>體</rb><rt>Ti</rt></ruby>
<ruby><rb>大</rb><rt>Da</rt></ruby>
<ruby><rb>部</rb><rt>Bu</rt></ruby>
<ruby><rb>分</rb><rt>Fen</rt></ruby>
<ruby><rb>時</rb><rt>Shi</rt></ruby>
<ruby><rb>候</rb><rt>Hou</rt></ruby>
<ruby><rb>不</rb><rt>Bu</rt></ruby>
<ruby><rb>會</rb><rt>Hui</rt></ruby>
<ruby><rb>『</rb><rt>『</rt></ruby>
<ruby><rb>有</rb><rt>Zuozhe</rt></ruby>
<ruby><rb>』</rb><rt>』</rt></ruby>
<ruby><rb>問</rb><rt>Wen</rt></ruby>
<ruby><rb>『</rb><rt>『</rt></ruby>
<ruby><rb>題</rb><rt>Di</rt></ruby>
<ruby><rb>』</rb><rt>』</rt></ruby>
<ruby><rb>，</rb><rt>，</rt></ruby>
<ruby><rb>但</rb><rt>Dan</rt></ruby>
<ruby><rb>是</rb><rt>Shi</rt></ruby>
<ruby><rb>在</rb><rt>Zai</rt></ruby>
<ruby><rb>『</rb><rt>『</rt></ruby>
<ruby><rb>有</rb><rt>Zuozhe</rt></ruby>
<ruby><rb>』</rb><rt>』</rt></ruby>
<ruby><rb>些</rb><rt>Xie</rt></ruby>
<ruby><rb>小</rb><rt>Xiao</rt></ruby>
<ruby><rb>地</rb><rt>Di</rt></ruby>
<ruby><rb>方</rb><rt>Fang</rt></ruby>
<ruby><rb>就</rb><rt>Jiu</rt></ruby>
<ruby><rb>會</rb><rt>Hui</rt></ruby>
<ruby><rb>出</rb><rt>Chu</rt></ruby>
<ruby><rb>問</rb><rt>Wen</rt></ruby>
<ruby><rb>題</rb><rt>Di</rt></ruby>
<ruby><rb>，</rb><rt>，</rt></ruby>
<ruby><rb>例</rb><rt>Li</rt></ruby>
<ruby><rb>如</rb><rt>Ru</rt></ruby>
<ruby><rb>：</rb><rt>：</rt></ruby>
<ruby><rb>『</rb><rt>『</rt></ruby>
<ruby><rb>說</rb><rt>Shui</rt></ruby>
<ruby><rb>』</rb><rt>』</rt></ruby>
<ruby><rb>。</rb><rt>。</rt></ruby>
<ruby><rb>。</rb><rt>。</rt></ruby>
<ruby><rb>。</rb><rt>。</rt></ruby>
<ruby><rb>。</rb><rt>。</rt></ruby>
<ruby><rb>。</rb><rt>。</rt></ruby>
<ruby><rb>简</rb><rt>Jian</rt></ruby>
<ruby><rb>体</rb><rt>Ti</rt></ruby>
<ruby><rb>就</rb><rt>Jiu</rt></ruby>
<ruby><rb>一</rb><rt>Yi</rt></ruby>
<ruby><rb>点</rb><rt>Dian</rt></ruby>
<ruby><rb>问</rb><rt>Wen</rt></ruby>
<ruby><rb>题</rb><rt>Ti</rt></ruby>
<ruby><rb>都</rb><rt>Dou</rt></ruby>
<ruby><rb>没</rb><rt>Mei</rt></ruby>
<ruby><rb>啦</rb><rt>La</rt></ruby>
<ruby><rb>！</rb><rt>！</rt></ruby>
<ruby><rb>『</rb><rt>『</rt></ruby>
<ruby><rb>所</rb><rt>Zuozhe</rt></ruby>
<ruby><rb>』</rb><rt>』</rt></ruby>
<ruby><rb>以</rb><rt>Yi</rt></ruby>
<ruby><rb>大</rb><rt>Da</rt></ruby>
<ruby><rb>家</rb><rt>Jia</rt></ruby>
<ruby><rb>還</rb><rt>Hai</rt></ruby>
<ruby><rb>是</rb><rt>Shi</rt></ruby>
<ruby><rb>最</rb><rt>Zui</rt></ruby>
<ruby><rb>好</rb><rt>Hao</rt></ruby>
<ruby><rb>先</rb><rt>Xian</rt></ruby>
<ruby><rb>使</rb><rt>Shi</rt></ruby>
<ruby><rb>用</rb><rt>Yong</rt></ruby>
<ruby><rb>本</rb><rt>Ben</rt></ruby>
<ruby><rb>站</rb><rt>Zhan</rt></ruby>
<ruby><rb>小</rb><rt>Xiao</rt></ruby>
<ruby><rb>工</rb><rt>Gong</rt></ruby>
<ruby><rb>具</rb><rt>Ju</rt></ruby>
<ruby><rb>「</rb><rt>「</rt></ruby>
<ruby><rb>簡</rb><rt>Jian</rt></ruby>
<ruby><rb>繁</rb><rt>Fan</rt></ruby>
<ruby><rb>轉</rb><rt>Zhuan</rt></ruby>
<ruby><rb>換</rb><rt>Huan</rt></ruby>
<ruby><rb>」</rb><rt>」</rt></ruby>
<ruby><rb>來</rb><rt>Lai</rt></ruby>
<ruby><rb>轉</rb><rt>Zhuan</rt></ruby>
<ruby><rb>換</rb><rt>Huan</rt></ruby>
<ruby><rb>至</rb><rt>Zhi</rt></ruby>
<ruby><rb>簡</rb><rt>Jian</rt></ruby>
<ruby><rb>體</rb><rt>Ti</rt></ruby>
	</div>
	<div class="form-group">
		<div class="col-sm-10 centerd">
			<textarea class="form-control" name="word" rows="10" cols="86" onkeyup="<?php echo use_ajax('get_pinyin'); ?>"><?php echo $_POST['word']; ?></textarea>
		</div>
	</div>
</form>
<div id="result"></div>
<?php get_footer(); ?>