<html>
<head>
<title>Student login</title>
</head>
<body>
<h1 align="center">
Student login
</h1> 
 
<html>

<head>
<title>Login Page</title>
      
<style type = "text/css">
body {
font-family:Arial, sans-serif;
 font-size:14px;
}
         
label {
font-weight:bold;
width:100px;
font-size:14px;
}
         
</style>
      
</head>
   
<body bgcolor = "#FFFFFF">
	
<div align = "center">
<div style = "width:300px; " align = "left">
<div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
<div style = "margin:30px">
               
<form action = "connect2.php" method ="post">
   Name: <input type : "text" name="user" > <br>
   Password: <input type : "password" name="pass" > <br>
   Captcha: <input type="text" name="captcha"> <br>
   <input type ="submit" name ="login" value="Log In"> 
    

   </form>


<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
			

</div>
				
</div>
			
</div>

</body>
</html>
