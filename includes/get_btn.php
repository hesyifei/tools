<?php
/******************************* Get BootStrap Button Class *******************************/
/*
Function: get_btn($type)

Variable: 
$type

E.G.: 
$type = "default";
*/
?>
<?php
function get_btn($type){
	if(empty($type)){
		$type = "default";
	}
	return 'btn btn-'.$type;
}
?>