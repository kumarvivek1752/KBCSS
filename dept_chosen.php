<?php  
include 'hometemp.php';
if(empty($_POST) === false) {
	$dept = $_POST['dept'];
	echo '<div id="error">' .
	set_dept($user_data['username'], $dept) .	
	'</div>';
	
	}
else {
	echo "No data received";
}
?>