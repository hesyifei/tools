var place;					//創建地點變量
function reply_click(clicked_id){			//創建Function
	place = clicked_id;						//設定地點
	x=document.getElementById("place");  //找到元素
	x.innerHTML='<iframe src="https://traffic.td.gov.hk/ClickProcessor.do?area_id=' + place + '"  width="800px" height="325px" frameborder="0">你的瀏覽器太老了，無法使用此先進的功能！</iframe>';    //改變內容
}
