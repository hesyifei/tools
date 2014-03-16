function onchange_convert(select){
	var selected_option = select.options[select.selectedIndex].value;
	switch(selected_option){
		case "cn":
			$('#to').val("tw");
		break;
		case "tw":
		case "hk":
			$('#to').val("cn");
		break;
	}
	$('.selectpicker').selectpicker('refresh');
}

function convert_string(){
	toCode(document.myForm.from.value, document.myForm.to.value);
}

var BIGtoGB = 0;

function toCode(from, to){
	var TempStr = "";
	var TempStr1 = "";
	var TempStrWord = "";
	var TempWordMath = 0;
	var TempWordHex = new Array();
	TempStrWord = document.myForm.S1.value;
	TempStrWord = convert_to_difference_locate(TempStrWord, from, to);
	for(i=0;i<TempStrWord.length;i++){
		TempStr1 = TempStrWord.charAt(i);
		TempWordMath = TempStr1.charCodeAt(0);
		switch(document.myForm.to.value){
		case "cn":
			switch(document.myForm.encode.value){
			case "utf":
				if(!toGB[TempWordMath]){
					TempStr += TempStr1;
				}else{
					TempStr += String.fromCharCode(toGB[TempWordMath]);
				}
			break;
			case "gbbig":
				if(!toGB2[TempWordMath]){
					TempStr += TempStr1;
				}else{
					TempStr += toGB2[TempWordMath];
				}
			break;
			}
		break;
		case "tw":
		case "hk":
			switch(document.myForm.encode.value){
			case "utf":
				if(!toBIG[TempWordMath]){
					TempStr += TempStr1;
				}else{
					TempStr += String.fromCharCode(toBIG[TempWordMath]);
				}
			break;
			case "gbbig":
				if(!toBIG2[TempWordMath]){
					TempStr += TempStr1;
				}else{
					TempStr += toBIG2[TempWordMath];
				}
			break;
			}
		break;
		}
	}
	document.myForm.S2.value = TempStr;
}
