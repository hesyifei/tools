$(document).keypress(function(e) {
	if(e.which == 13) {
		bmi( (document.getElementById('height').value), (document.getElementById('height_type').value), (document.getElementById('weight').value), (document.getElementById('weight_type').value) );
	}
});
function bmi(height, height_type, weight, weight_type){
if( (weight.length != 0) || (height.length != 0) ){							//只有「身高」或「體重」不為空時才轉換
//將高度單位換算為「米」
if(height_type == "厘米"){
	height = height / 100;
}

if(height_type == "英呎"){
	height = height * 0.3048;
}

//將重量單位換算為「千克」
if(weight_type == "磅"){	
	weight = weight * 453.59 / 1000;
}

if(weight_type == "克"){
	weight = weight / 1000;
}

if(weight_type == "毫克"){
	weight = weight / 1000000;
}

if(weight_type == "噸"){
	weight = weight * 1000;
}
}

/*************** 主程序開始 ******************/
var message, alert_class;

//計算BMI
var bmi_full = weight / (height * height);
//四捨五入至二位小數
var bmi = Math.round(bmi_full * 100) / 100;

if( (weight.length == 0) || (height.length == 0) ){						//如果沒有輸入文字
	alert("你還沒輸入任何內容哦！");
	var bmi_result = "你還沒輸入任何內容哦！";
	var message = "";
	var alert_class = "text-center alert alert-danger";
}else{
if(bmi < 2){
	alert("別鬧了，我知道你在隨便輸入\n蚊子的BMI指數都沒這麼低！");
	var message = "別鬧了，我知道你在隨便輸入，蚊子的BMI指數都沒這麼低！";
	var alert_class = "text-center alert alert-danger";
}else if(bmi < 18.59){
	var message = "東方之猴，你太輕了！";
	var alert_class = "text-center alert alert-danger";
}else if(bmi < 23.99){
	var message = "人類，你的體重很正常。";
	var alert_class = "text-center alert alert-success";
}else if(bmi < 27.99){
	var message = "東方之豬，你超重了！";
	var alert_class = "text-center alert alert-warning";
}else if(bmi > 100){
	alert("別鬧了，我知道你在隨便輸入\n恐龍的BMI指數都沒這麼高！");
	var message = "別鬧了，我知道你在隨便輸入，恐龍的BMI指數都沒這麼高！";
	var alert_class = "text-center alert alert-danger";
}else{
	var message = "東方之牛，你極度超重！";
	var alert_class = "text-center alert alert-danger";
}
var bmi_result = "您的BMI指數為 " + bmi;
}

//輸出結果
document.getElementById("result").className = alert_class;
document.getElementById("bmi_result").innerHTML = bmi_result;
document.getElementById("hint").innerHTML = message;
document.getElementById("more_info").style.display = "inherit"; 
}