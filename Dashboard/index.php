<?php
 require 'nav1.php';
 require 'side.php';
?>


<html>


<head><title>
WEBSITE</title>
</head>
<body>
<div><?php navbar();?></div>
<div class="container-fluid">
<div class="col-sm-2" id="side"><?php side();?></div>
<div class="col-sm-6">
<form action="loginvalidate.php" method="post">
<center>
	<table>
		<tr>
		<td>Username:</td><td><input type="text" name="username"></td>
		</tr>
		<tr>
		<td>Password:</td><td><input type="password" name="password"></td>
		</tr>
		

	</table>
	<input type="submit" value="login">
</center>
</form>
</div>
</div>
</body>
</html>

<style>
#side
{
	background-color:#0099ff;
	border-radius:5px;
	margin-top: -20px;
	margin-left:-15px;
	height: 500px;
}
</style>