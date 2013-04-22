<!doctype html>
<meta charset="utf-8">
<body>
<?php include 'hometemp.php' ?>
<form method="post" action="update_interests.php">
	<div class="home">
		<div class="small_heading"> Pick your interests! </div><br>
		<ul>
		<?php dept_courses("CSE"); dept_courses("ECE"); dept_courses("EEE"); ?>
		<li><br><br><input type="Submit" value="Submit"></li>
		</ul>
	
	</div>
</form>