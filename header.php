<div id="hor_nav">
<ul > 
<li><a href ="index.php"> Home </a></li>
<li><a href = "register.php"> Register </a></li>
<?php  
if($user_data['is_student']) 
	echo '<li><a href = "enrollment.php"> Enroll </a></li>';
else
	echo '<li><a href = "upload.php"> Upload </a></li>';
?>
<li><a href = "forum.php"> Forum </a></li>
<li><a href = "fileupload.php"> Downloads </a></li>
<li><a href = "About.php"> About </a></li>
</ul>
</div>