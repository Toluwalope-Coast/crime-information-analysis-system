<?php ob_start();

session_start();

include("db.php");

include("functions.php");



login_validation();



function login_validation(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		

		$username = clean_text_data($_POST['uname']);
		$password = clean_password_data($_POST['pswd']);
		

		$sql = "SELECT * FROM login WHERE username = '$username' && password = '$password'";
		$results = query($sql);


		
		 if ($username == "test" && $password == "admin123") {
			
			$rank = 'admin';
			 
			$_SESSION['username'] = $username;
			$_SESSION['lastname'] = $username;
		   $_SESSION['rank'] = $rank;
		   		   
		   redirect("http://localhost/criminalrecordmanagementsystem/dashboard.php");

		 }
		 else if (!(row_count($results) == 1)) {
			redirect("http://localhost/criminalrecordmanagementsystem/login.php");
		 /*$errors = "Invalid login details";
		 display_errors($errors);*/

		}
		
		while ($row = mysqli_fetch_assoc($results)) {
			
			$lastname = $row['lastname'];
			$rank = $row['rank'];
			$date = date("Y-m-d H:i:s");
			 
			$_SESSION['username'] = $username;
			$_SESSION['lastname'] = $lastname;
		   $_SESSION['rank'] = $rank;
		   
		   $sql = "UPDATE login SET log_status = 'online', last_login = '$date' WHERE username = '$username' AND password = '$password'";
		   $results = query($sql);
		   
		   redirect("http://localhost/criminalrecordmanagementsystem/dashboard.php");  /*  PAGE DIRECTIONS*/
		}

	} // SERVER METHOD POST

}//LOGIN VALIDATION FUNCTION







?>