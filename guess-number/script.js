$(document).keypress(function(e) {
	if(e.which == 13) {
		guess(document.getElementById('your').value);
		return false;
	}
});
function guess(str){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("result").innerHTML=xmlhttp.responseText;
			document.getElementById("your").value = "";
			document.getElementById("your").focus();
		}
	}
	xmlhttp.open("POST", "guess.php", true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("your="+str);
}