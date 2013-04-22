<?php 
$connect_error = "Sorry, we're experiencing connection issues. This will soon be fixed.";
mysql_connect('localhost', 'root', '') or die(connect_error());
mysql_select_db('dbmsproj');
?>