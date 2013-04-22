<?php  
include 'hometemp.php';
if(empty($_POST) === false) {
	$course = $_POST['course_name'];
	$dept = $_POST['dept_name'];
	$prof_name = $user_data['first_name'] ." ". $user_data['last_name'];
	echo '<div class="home">';
	if(empty($course) &&empty($dept))
		echo "Enter a course and a dept name";
	else if(empty($course))
		echo "Enter a course and a dept name";
	else if(empty($dept))
		echo "Enter a department name";
	else {
		$query = mysql_query("INSERT into `course` VALUES ( '$course', DEFAULT, '$dept', '$prof_name') ");
		if($query)
			echo "Course added successfully!";
		else
			echo mysql_error();
	}
		echo '</div>';
}
else
	echo "<div class='home' > No data recieved </div>";
	$comment = "I have added a course named " . $course . " in the department " . $dept ;
	$name = $user_data['first_name'];
	$insert=mysql_query("INSERT INTO `comment` (name,time,comment) VALUES ('$name',DEFAULT,'$comment') ");

?>