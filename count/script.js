function calcStats(){
	var myString;
	var lines;
	var characters;
	var words;
	var charsnospaces;		
	var myString = document.getElementById("doc").value;
	var trReturn = myString[myString.length-1] == "\n";
	
	if (myString == "")
		lines = characters = words = charsnospaces = 0;
	else {
		lines = myString.split("\n").length; //counts the amount of lines.
		if (trReturn)
			lines--;				
		myString = myString.replace(/\n/g, " "); //replaces the line break characters with a space
		characters = trReturn ? myString.length - lines : myString.length; //gets the length of the string with no line break characters.
		myString = myString.replace(/^\s*|\s*$/g,""); //trim whitespace
		myString = myString.replace(/\s{2,}/g," "); //eliminates extra whitespace around words. 
		words = myString.split(" ").length; //gets the words
		myString = myString.replace(/\s/g, ""); //eliminates the spaces
		charsnospaces = myString.length; 
	}
	
	document.getElementById("result").className = "text-center alert alert-info";
	document.getElementById("words").innerHTML = "段落數計算：" + words;
	document.getElementById("charsnospaces").innerHTML = "字數不含空格：" + charsnospaces;
	document.getElementById("characters").innerHTML = "字數含空格：" + characters;
	document.getElementById("lines").innerHTML = "行列數：" + lines;
}
function clearSpans(){
	document.getElementById("result").className = "";
	document.getElementById("words").innerHTML = "";
	document.getElementById("charsnospaces").innerHTML = "";
	document.getElementById("characters").innerHTML = "";
	document.getElementById("lines").innerHTML = "";
}