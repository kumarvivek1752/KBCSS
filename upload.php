<!doctype html>
<meta charset="utf-8">
<body>
<?php
 include 'hometemp.php'; 
?>
<div class="home">
<form action="fileupload.php" method="post" enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>
</div>
</body>
</html>
