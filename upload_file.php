 <?php
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
else
  {
  echo "<br> Upload: " . $_FILES["file"]["name"] . "<br>";
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
  }

//$allowedExts = array("gif", "jpeg", "jpg", "png");
//$extension = end(explode(".", $_FILES["file"]["name"]));
/*if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 20000)
&& in_array($extension, $allowedExts))*/
  
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "<br><br> Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
//    echo "Stored in: " . $_FILES["file"]["tmp_name"];
    
    }
/*else
  {
  echo "Invalid file";
  }*/
 $dirpath = "./fold";
if(move_uploaded_file($_FILES['file']['tmp_name'],$dirpath.$_FILES['file']['name']))
{
	echo "<br"." Move successful to: ".$dirpath.$_FILES['file']['name'];
}
else
{
	echo "<br>"." move unsuccessful ";
}
?>
<?php
/*If ($_FILES) {
    foreach ($_FILES ['file']['tmp_name'] as $Key => $Name) {
        move_uploaded_file(
          $_FILES['file']['tmp_name'][$Key], 
          $_FILES['file']['name'][$Key] 
        ) or die("Move from Temp area Failed");
        $EFileName = $_FILES['file']['name'][$Key];
        echo "<P>$EFileName: Uploaded";
    }
}*/
?>
<?php 
/** 
* Change the path to your folder. 
* This must be the full path from the root of your 
* web space. If you're not sure what it is, ask your host. 
* 
* Name this file index.php and place in the directory. 
*/ 
    // Define the full path to your folder from root 
    //$path = "/opt/lampp/htdocs/"; 
	$path = "C:/wamp/tmp/fold";
    // Open the folder 
    $dir_handle = @opendir($path) or die("Unable to open $path"); 
echo "<br><br>";
    // Loop through the files 
    while ($file = readdir($dir_handle)) { 

    if($file == "." || $file == ".." || $file == "index.php" || $file == "hello.php") 

        continue; 
        echo " <a href=\"../$file\">$file</a><br />"; 

    } 
    // Close 
    closedir($dir_handle); 
?>
