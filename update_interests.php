<?php   
include 'hometemp.php';
echo '<div class="home">';
if(empty($_POST) === false) {
 $max_id = max_id();
 while($max_id > 0)
 {
	if(empty($_POST[$max_id]) === false) {
		get_course($max_id, $user_id);
	}
	$max_id--;
}
	
}
else 
	echo "No data received";
echo '</div>';
?>