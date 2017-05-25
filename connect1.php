<?php
session_start();

$link = mysqli_connect('localhost','root','root');
$database = mysqli_select_db($link,'login');

$user= $_POST['user'];
$pass = $_POST['pass'];

if (isset($_POST["login"]))
 {
   $query = "SELECT * FROM login WHERE user = '". mysqli_real_escape_string($link,$user) ."' AND pass = '". mysqli_real_escape_string($link,$pass) ."'" ;
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
