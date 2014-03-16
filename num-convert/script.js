function convert_length(type){										//長度單位轉換
	switch (type){
		case 1: 													//MM單位
			var num = document.getElementById("mm").value;				//取得輸入值（下同）
			num = num / 10 / 10 / 10;
			break;
		case 2:													//CM單位
			var num = document.getElementById("cm").value;
			num = num / 10 / 10;
			break;
		case 3:													//DM單位
			var num = document.getElementById("dm").value;
			num = num / 10;
			break;
		case 4:													//M單位
			var num = document.getElementById("m").value;
			num = num;
			break;
		case 5:													//KM單位
			var num = document.getElementById("km").value;
			num = num * 1000;
			break;
	}
	change_length(num * 1000, num * 100, num * 10, num, num / 1000);
}

function convert_size(type){										//大小單位轉換
	switch (type){
		case 1: 													//MM單位
			var num = document.getElementById("mm2").value;				//取得輸入值（下同）
			change_size(num, num / 100, num / (100 * 100), num / (100 * 100 * 100), num / (100 * 100 * 100 * 1000 * 100));
			break;
		case 2:														//CM單位
			var num = document.getElementById("cm2").value;
			change_size(num * 100, num, num / 100, num / (100 * 100), num / (100 * 100 * 1000 * 100));
			break;
		case 3:														//DM單位
			var num = document.getElementById("dm2").value;
			change_size(num * 100 * 100, num * 100, num, num / 100, num / (100 * 1000 * 100));
			break;
		case 4:														//M單位
			var num = document.getElementById("m2").value;
			change_size(num * 100 * 100 * 100, num * 100 * 100, num * 100, num, num / (1000 * 100));
			break;
		case 5:														//KM單位
			var num = document.getElementById("km2").value;
			change_size(num * 1000 * 100 * 100 * 100 * 100, num * 1000 * 100 * 100 * 100, num * 1000 * 100 * 100, num * 1000 * 100, num);
			break;
	}
}

function change_length(mm, cm, dm, m, km){
	document.getElementById("mm").value=mm;				//長度單位轉換（下同）
	document.getElementById("cm").value=cm;
	document.getElementById("dm").value=dm;
	document.getElementById("m").value=m;
	document.getElementById("km").value=km;
}

function change_size(mm2, cm2, dm2, m2, km2){
	document.getElementById("mm2").value=mm2;				//大小單位轉換（下同）
	document.getElementById("cm2").value=cm2;
	document.getElementById("dm2").value=dm2;
	document.getElementById("m2").value=m2;
	document.getElementById("km2").value=km2;
}