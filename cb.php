<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("user");
$x = $_SESSION['pnr'];
$query = "DELETE * FROM booking WHERE pnr='$x'";
mysql_query($query);
$y = $_SESSION['sa'];
$a = $_SESSION['tid'];
$query2 = "UPDATE trains SET seatsavailable='$y' WHERE id='$a'";
mysql_query($query2);
unset($_SESSION['pnr']);
unset($_SESSION['tid']);
unset($_SESSION['tn']);
unset($_SESSION['tnum']);
unset($_SESSION['ss']);
unset($_SESSION['js']);
unset($_SESSION['dt']);
unset($_SESSION['ar']);
unset($_SESSION['jt']);
unset($_SESSION['date']);
unset($_SESSION['rate']);
echo "<script type='text/javascript'>alert('Booking Canceled');</script>";
header('Location:welcome.php');








?>