
<?php 

include 'hometemp.php';
if(empty($_POST) === false) {
	$oldpassword = $_POST['password'];
	$newpassword = $_POST['newpassword'];
	$renewpassword = $_POST['renewpassword'];
	$user_id = $user_data['user_id'];	
	if (empty($oldpassword) || empty($newpassword) ||empty($renewpassword)){
		$errors[] = "You need to enter the old password and retype the new password";
	}
	$oldpassword = md5($oldpassword);
	$newpassword = md5($newpassword); 
	$renewpassword = md5($renewpassword);
	if(strcmp($user_data['password'], $oldpassword)){
		$errors[] = "The current password is wrong";
	}
	else if(strcmp($newpassword, $renewpassword)) {
		$errors[] = "The new password doesn't match with the re-typed password. Try again! ";
	}
	
	else {
		$query = mysql_query("UPDATE `users` SET `password` = '$newpassword' WHERE `user_id` = '$user_id' ");
		if($query)
		echo "<div id='error'>Password updated!</div>" ;
		else 
		echo "<div id='error'>Oops, password not updated </div>";
		
	}
}
echo(output_errors($errors));
?>