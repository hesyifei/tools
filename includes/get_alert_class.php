<?php
/******************************* Get BootStrap Alert Class *******************************/
/*
Function: get_alert_class($class)

Variable: 
$class

E.G.: 
$class = "info";
*/
?>
<?php
function get_alert_class($class){
	if(empty($class)){
		$class = "info";
	}
	return 'alert alert-'.$class;
}
?>