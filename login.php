<?php 
 include 'hometemp.php';
 ?>
 <div id="login">
 <?php
 if(empty($_POST) === false) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if (empty($username) || (empty($password))) {
		$errors[] = "You need to enter a username and password";
	}
	else if (user_exists($username) === false) {
		$errors[] = "Not registered";
	}
	else if (user_active($username) === false) {
		$errors[] = "You haven't activated your account";
	}
	else {
		if(strlen($password)>32)
		$errors[] = "password too long";
		$login = login($username, $password);
		if($login === false) {
			$errors[] = "The username or password is incorrect"; 
		}
		else {
			
			// set the user session and redirect user to Home
			
			$_SESSION['user_id'] = $login ;
			header('Location: index.php');
			exit();
		}
	} 
}
else {
		$errors[] = "No data received";
}

echo output_errors($errors);
 ?>
</div>