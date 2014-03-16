<?php
/******************************* str_split with UTF-8 *******************************/
/*
Function: utf8_str_split($str, $split_len = 1)

Variable: 
$str (*)
$split_len

E.G.: 
$str = "Some Words"
$split_len = 1
*/
?>
<?php
function utf8_str_split($str, $split_len = 1){
	if (!preg_match('/^[0-9]+$/', $split_len) || $split_len < 1)
		return FALSE;
 
	$len = mb_strlen($str, 'UTF-8');
	if ($len <= $split_len)
		return array($str);
 
	preg_match_all('/.{'.$split_len.'}|[^\x00]{1,'.$split_len.'}$/us', $str, $ar);
 
	return $ar[0];
}
?>