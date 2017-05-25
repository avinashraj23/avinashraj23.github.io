<html>
<head>
<title>REGISTRATION FORM</title>

<style type="text/css">
 
            body {font-family:Arial, Sans-Serif;}
 
            #container {width:300px; margin:0 auto;}
 
          
            form label {display:inline-block; width:140px;}
 
           
            form input[type="text"],
            form input[type="password"],
            form input[type="email"] {width:160px;}
 
            form .line {clear:both;}
            form .line.submit {text-align:right;}
 
</style>

<body>
<h1>Registration Form</h1>
<div align = "center">
<div style = "width:300px; " align = "left">
<form name="registration" method="post" action="newreg.php">

USERNAME: <br> <input type="text" name="username" value=""><br>
PASSWORD: <br> <input type="text" name="password" value=""></br>
NAME:<br> <input type="text" name="pname" value=""></br>
EMAIL:<br> <input type="text" name="email" value=""></br>
MOBILE:<br> <input type="integer" name="mobile" value=""></br>
POSTAL CODE:<br> <input type="integer" name="post" value=""></br>
</div>
<input type="submit" name="login" value="submit">
</form>

</div>

</body>
</head>
</html>