function convert_length(type){										//長度單位轉換
	switch (type){
		case 1: 													//單位 米
			var num = document.getElementById("m").value;				//取得輸入值（下同）
			change_length(num, num * 3.2808399);
		break;
		case 2:													//單位 英尺
			var num = document.getElementById("cf").value;
			change_length(num * 0.3048, num);
		break;
	}
}

function convert_long_length(type){										//長度（長）單位轉換
	switch (type){
		case 1:														//單位 千米
			var num = document.getElementById("km").value;
			change_long_length(num, num * 0.621371192);
		break;
		case 2: 													//單位 英里
			var num = document.getElementById("mi").value;
			change_long_length(num * 1.609344, num);
		break;
	}
}

function convert_size(type){										//大小單位轉換
	switch (type){
		case 1: 													//單位 平方米
			var num = document.getElementById("m2").value;
			change_size(num, num * 10.7584);
		break;
		case 2:														//單位 平方英尺
			var num = document.getElementById("cf2").value;
			change_size(num * 0.09290304, num);
		break;
	}
}

function convert_big_size(type){										//大小（大）單位轉換
	switch (type){
		case 1: 													//單位 市畝
			var num = document.getElementById("mu").value;
			change_big_size(num, num * 0.164739226);
		break;
		case 2:														//單位 英畝
			var num = document.getElementById("ac").value;
			change_big_size(num * 6.0701997, num);
		break;
	}
}

function convert_weight(type){										//重量單位轉換
	switch (type){
		case 1: 													//單位 千克
			var num = document.getElementById("kg").value;
			change_weight(num, num * 2.20462262);
		break;
		case 2:														//單位 磅
			var num = document.getElementById("p").value;
			change_weight(num * 0.45359237, num);
		break;
	}
}

function convert_volume(type){										//容積單位轉換
	switch (type){
		case 1: 													//單位 升
			var num = document.getElementById("l").value;
			change_volume(num, num * 0.264172052);
		break;
		case 2:														//單位 加侖
			var num = document.getElementById("gal").value;
			change_volume(num * 3.78541178, num);
		break;
	}
}
	

function change_length(m, cf){
	document.getElementById("m").value=m;				//長度單位轉換
	document.getElementById("cf").value=cf;
}

function change_long_length(km, mi){
	document.getElementById("km").value=km;				//長度（長）單位轉換
	document.getElementById("mi").value=mi;
}

function change_size(m2, cf2){
	document.getElementById("m2").value=m2;				//大小單位轉換
	document.getElementById("cf2").value=cf2;
}

function change_big_size(mu, ac){
	document.getElementById("mu").value=mu;				//大小（大）單位轉換
	document.getElementById("ac").value=ac;
}

function change_weight(kg, p){
	document.getElementById("kg").value=kg;				//重量單位轉換
	document.getElementById("p").value=p;
}

function change_volume(l, gal){
	document.getElementById("l").value=l;				//容積單位轉換
	document.getElementById("gal").value=gal;
}