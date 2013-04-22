<?php 
include 'hometemp.php';
$uploaddir = './downloads/'; 
$uploaddir = $uploaddir.basename($_FILES['file']['name']);
echo "<div class='home'><ul><div class='short_heading_left'> Downloads </div><br>";
if(move_uploaded_file($_FILES['file']['tmp_name'], $uploaddir)) {
	}
$path = "./downloads/";
foreach (new DirectoryIterator($path) as $file) {
	if(!$file->isDot()) {
	$name = $file->getFilename() ;
	$ext = $file->getExtension() ;
	$link = "downloads/" . $name ;
	echo "<li><a href='" . $link . "'> ". $name . "</a></li><br/>";
	}
}
echo "</ul></div>";
$comment = "I uploaded a file named " . $_FILES['file']['name'];
$name = $user_data['first_name'];
$insert=mysql_query("INSERT INTO `comment` (name,time,comment) VALUES ('$name',DEFAULT,'$comment') ");
if($insert);
?>