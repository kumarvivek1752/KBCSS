<?php

include 'hometemp.php';
echo '
<title>Change Password </title>
<body>
<div id="error">
<form action="password_updated.php" method="post">
Current password: <br><input type="password" name="password"> <br>
New password: <br><input type="password" name="newpassword"><br>
Retype new password:<br> <input type="password" name="renewpassword"><br>
<input type="submit" value="Change password">
</form>
</div>
<div id="capsalert"> </div>';
?>