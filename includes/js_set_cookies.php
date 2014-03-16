<?php
/******************************* Set Cookies By Using JS *******************************/
/*
Function: js_set_cookies($name, $value, $expiredays)

Variable: 
$name (*)
$value (*)
$expiredays (*)

E.G.: 
$name = "my_cookie";
$value = "this is the content of the cookie";
$expiredays = 30;
*/
?>
<?php
function js_set_cookies($name, $value, $expiredays) {
	echo 'setCookie('.$name.', '.$value.', '.$expiredays.')';
}
?>