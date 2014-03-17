function pinyin(cc) {
	var str = '';
	var s;
	for (var i = 0; i < cc.length; i++) {
		if (icibahy.indexOf(cc.charAt(i)) != -1 && cc.charCodeAt(i) > 200) {
			s = 1;
			while (icibahy.charAt(icibahy.indexOf(cc.charAt(i)) + s) != ",") {
				str += icibahy.charAt(icibahy.indexOf(cc.charAt(i)) + s);
				s++;
			}
			str += " ";
		} else {
			str += cc.charAt(i);
		}
	}
	return str;
}
function resetAll() {
	document.getElementById('Hsource').value = "";
	document.getElementById('Uresult').value = "";
}
function z() {
	document.getElementById('Uresult').value = '';
	var source = document.getElementById('Hsource').value;
	var toPinyin = pinyin(source);
	document.getElementById('Uresult').value = toPinyin;
}

function textarea_onfocus(mode){
	var text = "請輸入你想要轉換的文字";
	if(mode == "show"){
		if(document.getElementById('Hsource').value == ""){
			document.getElementById('Hsource').value = text;
		}
	}else{
		if(document.getElementById('Hsource').value == text){
			document.getElementById('Hsource').value = "";
		}
	}
}