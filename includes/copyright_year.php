<?php
/******************************* Get Copyright Year *******************************/
/*
Function: copyright_year($start_year)

Variable: 
$start_year (*)

E.G.: 
$start_year = 2013;
*/
?>
<?php
function copyright_year($start_year) {
	$now_year = date("Y");
	if($start_year == $now_year){
		$output = $start_year;
	}else if($start_year > $now_year){
		$output = "PLEASE ENTER CURRENT YEAR";
	}else{
		$output = $start_year."-".$now_year;
	}
	return $output;
}
?>