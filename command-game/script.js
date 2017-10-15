function send_command(str){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			// $("#textarea").val(xmlhttp.responseText); NOT WORKING
			$("#command").val("");
			$("#command").focus();
		}
	}
	xmlhttp.open("POST", "index.php", true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("command="+str);
}