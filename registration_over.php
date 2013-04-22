
<?php 
 include 'hometemp.php';
 if(empty($_POST) === false) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$faculty = $_POST['faculty'];
	$tc=$_POST['tc'];
	if(empty($fname)){
		$errors[] = "Enter first name";
	} else if (empty($lname)) {
		$errors[] = "Enter last name";
	}	 else if( empty ($email)) {
		$errors[] = "Enter email id";
	} else if(empty($username)) {
		$errors[] = "Enter an username";
	} else if (empty($password)) {
		$errors[] = "Enter password";
	} else if (empty($repassword)) {
		$errors[] = "Re-enter password";
	} else if(empty($tc)){
		$errors[] = "Please agree to the terms and conditions to continue";
	} else if(strcmp(md5($password), md5($repassword))) {
		$errors[] = "The passwords don't match.";
	} else if(user_exists($username) === true) {
		$errors[] = "This username is taken. Try something else ";
	} else {
		echo $faculty;
		if(!strcmp(($faculty),"No")) 
			$faculty = 0;
		else 
			$faculty = 1;
		$query = mysql_query("INSERT into `users` VALUES (DEFAULT, '$username', md5('$password'), '$fname', '$lname', '$email', 1, !$faculty)");//make last arg DEFAULT after setting up email activation
		if($query)
		{
		//log the user in.
		echo $username . " " . $password;
		$login = login($username, $password);
		if($login === false) {
			$errors[] = "The username or password is incorrect"; 
		}
		else {			
			// set the user session and redirect user to Home
			$_SESSION['user_id'] = $login ;
			insert_dept($username, "null");
			header('Location: index.php');
			exit();
		}
		}
	}
}
	else {
	 echo "<div id='error' >No data received </div>";
	 }
echo output_errors($errors);
 ?>