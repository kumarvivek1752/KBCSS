<!doctype html>
<meta charset="utf-8">
<?php   
include 'hometemp.php';
?>
<body>
<?php  
echo '<form method="post" action="enrolled_cse.php"><div class="home">' . '<ul><li><div class="small_heading" > Courses in CSE </div></li><br>';
dept_courses("CSE");
echo '<br><input type="submit" name="submit">';
echo '</ul></div></form>';
?>
