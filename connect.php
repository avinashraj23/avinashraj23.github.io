<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

session_start();

$user = $_POST['username'];
$pass = $_POST['password'];

if (isset($_POST["login"]))
 {
   $query = "SELECT * FROM login_form WHERE Name = '". mysqli_real_escape_string($link,$user) ."' AND Password = '". mysqli_real_escape_string($link,$pass) ."'" ;
     $result = mysqli_query($link,$query);
     if (mysqli_num_rows($result) == 1)
      {
        echo "pass"; //Pass, do something
      }
       else
      {
        echo "fail"; //Fail
      }

 }
 else
 {
     echo "Empty input Login In"; // empty $_POST["submit2"]
 }
