<?php include "../function.php"; ?>
<?php
$seo = array(
	'description' => '需要週年抽獎？需要抽禮品？Arefly小工具「抽獎」一定能達到你的要求！',
	'keywords' => '抽獎, 抽禮品',
);
$header = array(
	'extra_script' => array("jquery.js", "jquery-ui-1.7.2.custom.min.js"),
	'extra_css' => array("jquery-ui-1.7.2.custom.css"),
);
?>
<?php get_header("抽獎", $seo, $header); ?>

<div id="loading" class="centerd">
	<h2>Loading...</h2>
	<p>Made By <a href="http://www.arefly.com/">Arefly</a><p>
</div>

<div id="tabs" style="display: none;">
<ul>
	<li><a href="#tabs-1">抽獎</a></li>
	<li><a href="#tabs-2">設置</a></li>
	<li><a href="#tabs-3">結果</a></li>
	<li><a href="#tabs-4">幫助</a></li>
	<li><a href="#tabs-5">下載</a></li>
</ul>

<div id="tabs-1" style="background: #fff;">
	<h1 id="event_title"><span>抽獎軟件</span></h1>

	<div id="rotate_div">
		<div><span id="current_step"></span></div>

		<div id="rolling_board">...</div>
		
		<div id="print_box"></div>
	</div>
</div>
<!-- /#tabs-1 -->

<div id="tabs-2" style="background: #fff;">
	<label>活動標題</label>
	<div><input type="text" name="title" value="活動標題" /></div>

	<label>獎項設置</label>
	<div>每行一個獎項，格式為豎線分隔的：獎項名|數量|每次抽幾個|獎品</div>
<textarea name="prizes" rows="6" cols="84">
三等獎|4|2|000webhost免費空間1年
二等獎|2|2|2個免費域名
一等獎|1|1|免費VPS一年
</textarea>

	<label>名單</label>
	<div>每行一人，或半角逗號分隔</div>
<textarea name="candidates" rows="6" cols="84">
Tom, Marry, Jim, Robin
Lucy, Lily, Lilei, Hanmeimei
Catherine, Linton, Lockwood
Charly, Bill, Emily, Penny
Rose, Jen, William, Philips
Hitler, Stalin
</textarea>

	<label>跳動時間間隔</label>
	<div><input type="text" name="interval" value="50" style="width: 50px;" /> ms</div>


	<label>背景圖片</label>
	<div>可以輸入圖片鏈接使用網絡上的圖片, 也可以把圖片拷貝到當前目錄, 把圖片文件名填入即可.</div>
	<div><input name="background_image" type="text" value="bg.jpg" /></div>


	<p><input type="button" value="保存" onclick="save_setting()" /></p>
</div>
<!-- /#tabs-2 -->

<div id="tabs-3">
	<h2>抽獎還未開始哦！</h2>
</div>
<!-- /#tabs-3 -->

<div id="tabs-4">
	<h2>抽獎軟件</h2>
	<p>由 <a href="http://www.ideawu.net/blog/">ideawu</a> 開發，並由 <a href="http://www.arefly.com/">Arefly</a> 改進及翻譯的抽獎程序，可用於活動抽獎等。本程序由JavaScript+HTML+CSS開發而成，您只要擁有瀏覽器就可運行！</p>

	<h3>操作方便</h3>
	<p>抽獎過程全鍵盤操作，只需要按回車（Enter）鍵即可，類似播放PPT幻燈片，非常簡單</p>

	<h3>配置靈活</h3>
	<p>可配置的選項有：活動標題、獎項、候選人、搖獎時的跳轉速度、背景圖片。其中，每一個獎項，可以一次開完，也可以一次只開一部分（例如三等獎一共6個, 每次只開2個, 需要開3次才能開完三等獎），增加娛樂性。圖片可以更換為帶自己公司Logo的圖片，以便適應當前節日，所以，本抽獎程序任何節日的任何類似的抽獎節目都可使用！</p>

	<h3>完全免費</h3>
	<p>本抽獎工具完全免費，不保留任何付費功能！當然，如果你覺得本工具非常好用，想向我說聲「謝謝」，可以訪問我的網站 <a href="http://www.arefly.com/">http://www.arefly.com/</a> 或者原作者的網站 <a href="http://www.ideawu.net/blog/">http://www.ideawu.net/</a>，或者給我發郵件 <a href="mailto: eflyjason@gmail.com">eflyjason@gmail.com</a>。希望這個小工具能幫助你，給你帶來歡樂！</p>

	<h3>開放源碼</h3>
	<p>對於帶有Geek精神，愛好編程的朋友，想對這個小工具做一些小修改，這是完全可以的。這個小工具完全開放源碼，一般會做網站的人都能做個性化的修改。如果你修改後覺得很滿意，可以告訴我 ^_^</p>

	<h3>抽獎流程</h3>
<pre>
等待開始
開場：獎項介紹
獎項循環：如果多於一個獎項, 則循環
	獎項開場(step_open)
	搖獎循環: 如果不是一次開完一個獎項, 則循環
		搖獎開始(rotate_start)
		搖獎結束(rotate_stop)
	獎項結束(step_close): 單項中獎名單
閉場(close)
</pre>
</div>
<!-- /#tabs-4 -->

<div id="tabs-5" class="centerd">
	<h2>下載抽獎軟件</h2>
	<p>下載鏈接（原版）：<a href="http://www.ideawu.net/person/lottery/ideawu_lottery.zip">http://www.ideawu.net/person/lottery/ideawu_lottery.zip</a></p>
	<p>修改版暫不提供（主要原因是我的小工具已經打包成一個程序，每一個小工具都是互相依賴的）</p>
</div>
<!-- /#tabs-5 -->

</div>

<?php
$footer = array(
	'jquery' => 'disable',
);
?>
<?php get_footer($footer); ?>