<!doctype html>
<meta charset="utf-8">
<?php include 'hometemp.php'; ?>
<title>Post a comment</title>

<link rel="stylesheet" href="css/post.css" type="text/css" />
<body >
<div class= "post_a_comment">
<div class="headings_post"> Post a comment </div>
<center>
<form action="forum.php" method="POST">
<table>
<tr><td colspan="2" class="comment">Comment: </td></tr>
<tr><td colspan="5"><textarea name="comment" rows="10" cols="50"></textarea></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="Comment"></td></tr>
</table>
</form>
</div>
</body>
</html>

