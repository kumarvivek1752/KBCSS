<?php

function logged_in() {
	if (isset($_SESSION['user_id']))
		return true;
	else
		return false;
}
function max_id() {

	$query = mysql_query("SELECT MAX(`course_id`) FROM `course` ");
	if($query)
		return mysql_result($query,0);
	else
	echo mysql_error();
}
function dept_courses($dept_name){
	$courses = array();
	$no_of_courses = mysql_result(mysql_query("SELECT COUNT(*) FROM `course` WHERE `dept_name` = '$dept_name'"),0);
	$query = mysql_query("SELECT * FROM `course` WHERE `dept_name` = '$dept_name'");
	while ($no_of_courses--) {
		$results = mysql_fetch_array($query);
		$course_name = $results['course_name'];
		$added_by = $results['added_by'];
		$course_id = $results['course_id'];
		echo '<br><li><input type="checkbox" name="' . $course_id . '" value="checked" > ' . $course_name .  '  -- '. $added_by. ' </li>';
	}
}
function user_data($user_id) {
	$data = array();
	$user_id = (int)$user_id;
	$func_num_args = func_num_args();
	$func_get_args = func_get_args();
	if($func_num_args > 1) {
		unset($func_get_args[0]);
		$fields =  '`' . implode ( '` , `', $func_get_args). '`';
		$data = mysql_fetch_assoc(mysql_query(" SELECT $fields FROM `users` WHERE `user_id` = $user_id"));
		return $data;
	}
}

function user_exists($username) {
	$username = sanitize($username);
	$query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' ");
	return (mysql_result($query,0) == 1) ? true : false;
}

function user_active($username) {
	$username = sanitize($username);
	$query = mysql_query("SELECT `active`  FROM `users` WHERE `username` = '$username' ");
	return (mysql_result($query,0) == 1) ? true : false;
}

function get_user_id_from_username ($username) {
	$username = sanitize($username);
    return  mysql_result(mysql_query("SELECT `user_id` FROM `users` WHERE `username` = '$username' "),0);//, 'user_id');
}

function login ($username, $password) {
	$user_id =  get_user_id_from_username ($username);
	$username = sanitize($username);
	$password = md5($password);
	$query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' AND `password`='$password' ");
	$result = mysql_result($query,0);
	//"SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' AND `password`='$password' "
	if ($result == 0) 
		return false;
	else if($result == 1)
		return $user_id;
}
function display_courses($username) {
	$user_id =  get_user_id_from_username ($username);
	$dept_name = get_dept($username);
	$courses = array();
	$no_of_courses = mysql_result(mysql_query("SELECT COUNT(*) FROM `course` WHERE `dept_name` = '$dept_name'"),0);
	$query = mysql_query("SELECT * FROM `course` WHERE `dept_name` = '$dept_name'");
	echo "<ul> <li class='small_heading_left'><br>Your courses: </li>";
	while ($no_of_courses--) {
		$results = mysql_fetch_array($query);
		$course_name = $results['course_name'];
		$added_by = $results['added_by'];
		$course_id = $results['course_id'];
	
		echo '<br><li> ' . $course_name . ' (added by '. $added_by. ' )</li>';
	}
	echo '</ul>';
	echo "<div ><ul> <li class='small_heading_left'><br>Your department: </li> <br><li>". $dept_name ."</li><br></ul></div>";
}
function enrolled($username) {
	$user_id =  get_user_id_from_username ($username);
	$query = mysql_query("SELECT `department` FROM `department` WHERE `user_id`='$user_id'");
	if(mysql_result($query,0) === 'null') {
	
		return false;
	}
	else 
		return true;
}

function insert_dept($username, $dept) {
	$user_id =  get_user_id_from_username ($username); 
	$username = sanitize($username);
	$query = mysql_query("INSERT INTO `department` VALUES ('$user_id', '$dept')");
	if($query)
	echo "Dept registered initially!";
	else 
	echo "oops";
}
function set_dept($username, $dept) {
	$user_id =  get_user_id_from_username ($username); 
	$username = sanitize($username);
	$query = mysql_query("UPDATE `department` SET `department` = '$dept' WHERE `user_id` = '$user_id' ");
	if($query)
	return "Courses registered!";
	else 
	return "oops!";
}
function get_course($course_id, $user_id) {

	$query = mysql_query("SELECT `course_name` FROM `course`  WHERE `course_id` = '$course_id' ");
	$result = mysql_result($query,0); 
	
	if($query)
	{
	$query1 = mysql_query("UPDATE `users` SET `interests` = '$result' WHERE `user_id`= '$user_id' ");
	if($query1)
	echo "Success";
	else 
	echo mysql_error();
	}
	else 
	$errors[] = mysql_error();
}
function get_dept($username) {
	$user_id =  get_user_id_from_username ($username); 
	$username = sanitize($username);
	$query = mysql_query("SELECT `department` FROM `department`  WHERE `user_id` = '$user_id' ");
	if($query)
	return mysql_result($query,0);
	else 
	$errors[] = mysql_error();
}
	?>