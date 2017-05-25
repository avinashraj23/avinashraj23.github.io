<?php
session_start();

include "dbconnect.php";

$user= $_POST['user'];
$pass = $_POST['pass'];

if (isset($_POST["login"]))
 {
   $query = "SELECT * FROM users WHERE username = '". mysqli_real_escape_string($link,$user) ."' AND password = '". mysqli_real_escape_string($link,$pass) ."'" ;
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
     echo "Empty input Login In";
 }
