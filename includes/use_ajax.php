<?php
/******************************* Use Ajax *******************************/
/*
Function: use_ajax($function, $id, $function_value)

Variable: 
$function (*)
$id 							// Leave it empty if you want to use "this.value"
$function_value

E.G.: 
$function = "my_ajax_function";
$id = "my-text-field-id";
$function_value = "other_value";
*/
?>
<?php
function use_ajax($function, $id, $function_value){
	$output = $function."(";

	if(!empty($function_value)){
		$output .= "'".$function_value."'";
	}else if( (empty($id)) && (empty($function_value)) ){
		$output .= "this.value";
	}else{
		if(is_array($id)){
			$output .= "document.getElementById('".$id[0]."').value";
			foreach (array_slice($id, 1) as $each_id){
				$output .= ", document.getElementById('".$each_id."').value";
			}
		}else{
			$output .= "document.getElementById('".$id."').value";
		}
	}

	$output .= ");";
	return $output;
}
?>