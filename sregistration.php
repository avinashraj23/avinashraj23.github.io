 <?php  
 include "dbconnect.php";

mysql_select_db($database,$con);


If(isset($_REQUEST['submit'])!='')
{
If($_REQUEST['username']=='' || $_REQUEST['password']=='' || $_REQUEST['pname']==''|| $_REQUEST['email']=='' || $_REQUEST['mobile']=='' || $_REQUEST['post']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into student(username,password,pname,email,mobile,post) values('".$_REQUEST['username']."', '".$_REQUEST['password']."', '".$_REQUEST['pname']."', '".$_REQUEST['email']."' ,'".$_REQUEST['mobile']."' ,'".$_REQUEST['post']."')";

$res=mysql_query($sql);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";