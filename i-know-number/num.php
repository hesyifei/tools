<?php
$table1 = array(array(1, 3, 5, 7),
				array(9, 11, 13, 15),
				array(17, 19, 21, 23),
				array(25, 27, 29, 31),
				array(33, 35, 37, 39),
				array(41, 43, 45, 47),
				array(49, 51, 53, 55),
				array(57, 59, 61, 63));

$table2 = array(array(8, 9, 10, 11),
				array(12, 13, 14, 15),
				array(24, 25, 26, 27),
				array(28, 29, 30, 31),
				array(40, 41, 42, 43),
				array(44, 45, 46, 47),
				array(56, 57, 58, 59),
				array(60, 61, 62, 63));

$table3 = array(array(4, 5, 6, 7),
				array(12, 13, 14, 15),
				array(20, 21, 22, 23),
				array(28, 29, 30, 31),
				array(36, 37, 38, 39),
				array(44, 45, 46, 47),
				array(52, 53, 54, 55),
				array(60, 61, 62, 63));

$table4 = array(array(16, 17, 18, 19),
				array(20, 21, 22, 23),
				array(24, 25, 26, 27),
				array(28, 29, 30, 31),
				array(48, 49, 50, 51),
				array(52, 53, 54, 55),
				array(56, 57, 58, 59),
				array(60, 61, 62, 63));

$table5 = array(array(2, 3, 6, 7),
				array(10, 11, 14, 15),
				array(18, 19, 22, 23),
				array(26, 27, 30, 31),
				array(34, 35, 38, 39),
				array(42, 43, 46, 47),
				array(50, 51, 54, 55),
				array(58, 59, 62, 63));

$table6 = array(array(32, 33, 34, 35),
				array(36, 37, 38, 39),
				array(40, 41, 42, 43),
				array(44, 45, 46, 47),
				array(48, 49, 50, 51),
				array(52, 53, 54, 55),
				array(56, 57, 58, 59),
				array(60, 61, 62, 63));

$_SESSION['table_name'] = ${'table'.$_SESSION['table']};
$_SESSION['first_num'] = $_SESSION['table_name'][0][0];

?>