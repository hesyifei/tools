<?php
if (in_array("echo", $_SESSION['command_each_word'])){
	$echo_word = $_SESSION['command_each_word'][1];
	$return_message = $echo_word;
}
?>