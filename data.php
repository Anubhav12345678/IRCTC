<?php 
$x = $_POST['a'];
$y = $_POST['b'];
$z = $_POST['c'];
$w = $_POST['d'];
$u = $_POST['e'];
$v = $_POST['f'];
$age = $_POST['g'];
$num = $_POST['h'];
if($y!=$z)
{
	echo "Passwords don't match<br><a href='signup.php'>Click Here To Go Back</a>";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("user");
	$query = "SELECT * FROM registeration WHERE username='$x' && password='$y'";
	$res = mysql_query($query);
	if(mysql_num_rows($res)>0)
	{
		echo "Users Exist<br><a href='signup.php'>Click Here To Go Back</a>";
	}
	else
	{
		$query1 = "INSERT INTO registeration (username,password,email,city,gender,age,phone) VALUES ('$x','$y','$w','$u','$v','$age','$num')";
		mysql_query($query1);
		header('Location:index2.php');
	}
}





?>