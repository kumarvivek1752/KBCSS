<!doctype html>
<meta charset="utf-8">
<?php 
include 'hometemp.php';
?>
<?php
if(logged_in() === false)
	echo '<img src="images/home.jpg" id="homepic"/>';

	if($user_data['is_student'] === '1') {//user's a student
		if(enrolled($user_data['username']) === false ) { //user hasn't enrolled for a dept
			echo "<div class='home'> Welcome " . $user_data['first_name'] .'! <br><br>We see you haven\'t enrolled for any course. Start enrolling <a href="enrollment.php">here</a>! </div> ';
		}
		else {
			echo '<div class="home">'; 
			echo " Welcome " . $user_data['first_name'] . '!' ; 
			display_courses($user_data['username']);echo "  Check out our new courses <a href='enrollment.php'>here</a>! ";
			echo '</div>';
		}
	}
	else {
		echo "<div id='home'> Update your interests <a href='interests.php'>here</a> or upload new courses<a href='upload_course.php'> here</a>!<br><br>"; echo "  Check out our new courses <a href='enrollment.php'>here</a>! <br><br><div class='small_heading_left'> Your interests:</div><br>". $user_data['interests'];echo"</div> ";}
	
?>