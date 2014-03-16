<?php
if (in_array("vim", $_SESSION['command_each_word'])){
	$_SESSION['vim_screen'] = true;
	$vim_file = $_SESSION['command_each_word'][1];
	if (in_array($vim_file, $file_path)){
		$_SESSION['vim_all'] = $vim_file_name;
		if(empty($_SESSION['vim_all'])){
		?><script>
		alert("PLEASE RELOAD THIS PAGE TO SEE FILE'S CONTENT. THANKS!");
		</script><?php
		}
	} else {
		$_SESSION['vim_all'] = "NEW FILE";
	}
}
if ($_POST['vim_command'] == ":wq"){
	$return_message = "Sorry, But you don't have permission to save this file!";
	unset($_SESSION['vim_screen']);
	unset($_SESSION['vim_all']);
	unset($_SESSION['command_each_word']);
}
if ( ($_POST['vim_command'] == ":qa") || ($_POST['vim_command'] == ":qa!") ){
	unset($_SESSION['vim_screen']);
	unset($_SESSION['vim_all']);
	unset($_SESSION['command_each_word']);
}
?>