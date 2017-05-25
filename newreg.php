<?php



session_start();

include "dbconnect.php";


if (isset($_POST["login"]))





If($_REQUEST['username']=='' || $_REQUEST['password']=='' || $_REQUEST['pname']==''|| $_REQUEST['email']=='' || $_REQUEST['mobile']=='' || $_REQUEST['post']=='')
{
Echo "please fill the empty field.";
}
Else
{
$query="insert into student(username,password,pname,email,mobile,post) Values('".$_POST['username']."', '".$_POST['password']."', '".$_POST['pname']."', '".$_POST['email']."' ,'".$_POST['mobile']."' ,'".$_POST['post']."')";

}