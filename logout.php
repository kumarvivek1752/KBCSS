<?php 
include 'index.php';
session_start();
session_destroy();
echo "<div id='logout_error'> " . "You have been logged out" .  "</div>";
?>