<?php
session_start();
if(!isset($_SESSION['name']))
{
	header('Location:index2.php');
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>IRCTC Next Gen ETicketing System</title>
	<style type="text/css">
		#a
		{
			position: absolute;
			top: 200px;
			left: 510px;
			font-family: Lucida Calligraphy;
			font-weight: bold;
			font-size: 60px;

		}
		#b
		{
			position: absolute;
			top: 40px;
			left: 1400px;
		}
		#c
		{
			text-decoration: none;
			font-family: Algerian;
			color: white;
		}
		#d
		{
			position: absolute;
			top: 290px;
			left: 540px;
			font-family: Lucida Calligraphy;
		}
		#e
		{
			text-decoration: none;
			font-size: 20px;
			color: white;
		}

	</style>
</head>
<body bgcolor="#5C3317">
      <div id="a">Welcome, <?php echo $_SESSION['name']; ?></div>
      <div id="b"><a href="http://localhost/mnp/logout.php" id="c"></a></div>
      <div id="d">
      	 <ul>
      	 	<li><a href="http://localhost/mnp/tbs.php">Ticket Booking</a></li>
      	 	<li><a href="http://localhost/mnp/fare.php">Query Regarding Fares</a></li>
      	 	<li><a href="http://localhost/mnp/sat.php">Spot aTrain</a></li>
      	 	<li><a href="http://localhost/mnp/bh.php">Booking History</a></li>





      	 </ul>






      </div>
</body>
</html>