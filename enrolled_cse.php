<!doctype html>
<meta charset = "utf-8">
<?php  
include 'hometemp.php';  
echo '<div class="home">';
if(empty($_POST) === false) {
$dept="CSE";
echo '<div >' .
	set_dept($user_data['username'], $dept) .	
	'</div>';
	
}
else 
	echo "No data received";
echo '</div>';
?>