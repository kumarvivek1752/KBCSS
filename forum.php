<!doctype html>
<meta charset="utf-8">
<body height="auto">
<?php 
include 'hometemp.php';?>
<link rel="stylesheet" href="css/post.css" type="text/css" />
<div class="post_a_comment">
<div class="headings_post"> Forum </div>
<?php 
$name=$user_data['first_name'];
$comment=$_POST["comment"];
$submit=$_POST["submit"];
if($submit)
{
echo "\n Comment added.\t <br><br>";
if($name&&$comment)
{
$insert=mysql_query("INSERT INTO `comment` (name,time,comment) VALUES ('$name',DEFAULT,'$comment') ");
if(!$insert)
echo "\n NOT ENTERED";
}
else
{
echo "please fill out all fields";
}
}
?>

<?php
/*$dbLink = mysql_connect("localhost", "root", "swat");
    mysql_query("SET character_set_results=utf8", $dbLink);
    mb_language('uni');
    mb_internal_encoding('UTF-8');
 mysql_select_db("comment");
*/
$no_of_comments = mysql_result(mysql_query("SELECT COUNT(*) FROM `comment`"),0);
$getquery=mysql_query("SELECT * FROM `comment` ");

while($no_of_comments--)
{
$rows = mysql_fetch_array($getquery);
$name=$rows['Name'];
$comment=$rows['Comment'];
$time = $rows['time'];
echo $name . ' says at '. $time.'<br/>' . '<br/> <div class="comment">' . $comment . '</div><br/>' . '<br/>' . '<hr size="1"/>';

}
echo "<a href='post_a_comment.php' > Post a comment </a>";
?>
 
</div>

