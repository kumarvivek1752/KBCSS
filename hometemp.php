<!doctype html>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" type="text/css" />
<?php 
		include 'core/init.php';
		include 'core/database/connect.php'; 
	?>
<title> Dbms project </title>
<body>

<div id="title"><a href="index.php">KBCSS </a></div>

<div id="container">
<?php include 'header.php'; ?>
<hr>
<div id="left_nav">
<?php  
	if(logged_in() === true) {
	//echo '<ul><li>'. '<a href = "enroll.php"> Enroll for a department </a></li></ul>';
	}
?>
</div>
<hr width = "1" size ="500" id="vertical_line">
<div id="login_widget">
	<?php
		if(logged_in() === true) {
			echo '<div id="right">';
			include 'includes/widgets/loggedin.php';
			echo '</div>';
			echo '<ul><li>'. '<a href = "logout.php"> Log out </a>';
			echo '</li><li>'.'<a href = "change_password.php"> Change Password </a>' . '</li></ul>';
		} else
		{	echo "Login/Register";
			include 'includes/widgets/login.php';
		}
	?>	
</div>
</div>
	