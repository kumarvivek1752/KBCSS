<!doctype html>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" type="text/css" />

<?php  
include 'header.php'; 
include 'core/database/connect.php'; 
?>
<head>
<title> Register</title>
<link rel="icon" type="image/png" href="favicon.ico">
<!-- comment --><link rel="stylesheet" href="enroll.css" type="text/css" />
</head>
<body>
<span id="container">
<?php include 'header.php'; ?>
<hr>
<div class="headings"> 
<p>Learn with us </p> 
</div>
<div id="form">
<form action="registration_over.php" id="register" method="post">
First Name* <br/> <input type="text" class="formtext" name="fname"> <br/> <br/>
Last Name* <br/> <input type="text" class="formtext" name="lname"><br/> <br/>
Email id* <br/> <input type="text" name = "email" class="formtext" ><br/> <br/>
Username* <br/> <input type="text" class="formtext" name="username"><br/> <br/>
Password* <br/> <input type="password" name="password" class="formtext" ><br/> <br/>
Re-type Password* <br/> <input type="password" name="repassword" class="formtext" ><br/> <br/>
Are you a faculty?*<br>
 <select name="faculty"> 
<option value = "No"> No </option> 
<option value = "Yes"> Yes </option>
</select> <br><br>
<input type="checkbox" name="tc"> <span class="tc" >I agree to the terms and conditions. <span><br/> <br/> <br/>
<input type = "submit" class="submit" value="Let's learn" > </span>
</form>
</div>
</span>


</body>
</html>