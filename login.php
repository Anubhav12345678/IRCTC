<?php

if(isset($_POST['c']))
{
	;
}
session_start();
mysql_connect("localhost","root","");
mysql_select_db("user");
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM registeration WHERE username='$username' && password='$password'";

$res = mysql_query($query);

if(mysql_num_rows($res)==0)
{
	echo "Incorrect Username or Password<br><a href='index2.php'>Click Here to go Back</a>";
}
else
{
	$_SESSION['name'] = $username;
	header('Location:welcome.php');
}
//}
?>