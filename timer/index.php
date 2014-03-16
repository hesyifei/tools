<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => '舉行賽事需要計時？經過精心製作的Arefly計時器絕對符合你的要求！快來試試吧！',
	'keywords' => '計時器, 計時, 時間',
);
?>
<?php get_header("計時器", $seo); ?>

<div class="timer_main">
	<input id="start" name="controls" type="radio">
	<input id="stop" name="controls" type="radio">
	<input id="reset" name="controls" type="radio">
	<div class="timer">
		<div class="cell">
			<div class="numbers tenhour moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell">
			<div class="numbers hour moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell divider"><div class="numbers">:</div></div>
		<div class="cell">
			<div class="numbers tenminute movesix">0 1 2 3 4 5 6</div>
		</div>
		<div class="cell">
			<div class="numbers minute moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell divider"><div class="numbers">:</div></div>
		<div class="cell">
			<div class="numbers tensecond movesix">0 1 2 3 4 5 6</div>
		</div>
		<div class="cell">
			<div class="numbers second moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell divider"><div class="numbers">:</div></div>
		<div class="cell">
			<div class="numbers milisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell">
			<div class="numbers tenmilisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell">
			<div class="numbers hundredmilisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
	</div>
	<!-- Lables for the controls -->
	<div id="timer_controls">
		<label for="start">開始</label>
		<label for="stop">暫停</label>
		<label for="reset">重置</label>
	</div>
</div>

<?php get_footer(); ?>