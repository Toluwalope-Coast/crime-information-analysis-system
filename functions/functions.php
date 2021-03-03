<?php 




/***********************      HELPER FUNCTION  *************************/
function clean_text_data($data){

	
  	$data = filter_var($data, FILTER_SANITIZE_STRING);
 
	return $data;
}

function clean_email_data($data){

	$data = filter_var($data, FILTER_VALIDATE_EMAIL);
  	$data = filter_var($data,FILTER_SANITIZE_EMAIL);
 
	return $data;
}

function clean_tel_data($data){

  	$data = filter_var($data,FILTER_VALIDATE_INT);
  	$data = filter_var($data, FILTER_SANITIZE_NUMBER_INT);
 
	return $data;
}
function clean_int_data($data){

	$data = filter_var($data,FILTER_VALIDATE_INT);
	$data = filter_var($data, FILTER_SANITIZE_NUMBER_INT);
 
	return $data;
}
function clean_float_data($data){

  	$data = filter_var($data, FILTER_VALIDATE_FLOAT);
  	$data = filter_var($data, FILTER_SANITIZE_NUMBER_FLOAT);
 
	return $data;
}
function clean_password_data($data){

	$data = trim($data);
 
	return $data;
}

function clean_date_data($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}

function redirect($location){

	return header("location: $location");
}

function set_messages($message){

	if (!empty($message)) {
		
		$_SESSION['message'] = $message;
	}else {
		$message = "";
	}
}

function display_message(){

	if (isset($_SESSION['message'])) {
		

		$_SESSION['message'];

		unset($_SESSION['message']);
		}
}



/*function display_errors($error_message){

	$error_message = <<<DELIMITER

			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button> <strong>Warning!</strong> $error_message
			</div> 
			DELIMITER;

		return $error_message; 


}*/



?>