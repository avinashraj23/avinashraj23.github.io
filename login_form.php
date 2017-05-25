<html>
<head>
<title>Student Database</title>
</head>
<body>
<h1>Student database</h1>

<?php
include("Config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$myusername=addslashes($_POST['username']);
$mypassword=addslashes($_POST['password']);

$sql="SELECT id FROM users WHERE username='$username' and password='$password'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$active=$row['active'];
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
session_register("username");
$_SESSION['login_user']=$username;

header("location: welcome.php");
}
else
{
$error="Your Login Name or Password is invalid";
}
}
?>
<table>
<tr>
<form action="" method="post">
<td width="81">Username:</td>
<td width="247"><input name="username" size="30" autocomplete="off" value="" type="text" /></td>
</tr>
<tr>
<td>Password:</td>
<td><input name="password" size="30" type="password" /></td>
</tr>
</table>
<p><input type="submit" value="Submit"/></p>
</form>
</body>
</html>
