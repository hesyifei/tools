<?php
/******************************* Enter Num Only In Text Field *******************************/
/*
Function: enter_num_only($event)

Variable: 
$event

E.G.: 
$event = "get_id";
*/
?>
<?php
function enter_num_only($event){
	if(empty($event)){
		$event = "return isNumber(event)";
	}
	echo 'onkeypress="'.$event.'"';
}
?>