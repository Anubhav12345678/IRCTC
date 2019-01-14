<?php 
session_start();
$x = $_POST['a'];
$y = $_POST['b'];
$z = $_POST['c'];
if($x==$y)
{
	echo "You are there currently.<a href='tbs.php'>Click Here To Go Back</a>";
}
else
{
	$$_SESSION['date'] = $z;
	mysql_connect("localhost","root","");
	mysql_select_db("user");
	echo "<h3><b>Source:</b></h3>".$x."<h3><b>Destination:</b></h3>".$y;
	$query = "SELECT * FROM trains WHERE Source='$x' && Destination='$y'";
	$res = mysql_query($query);
	if(mysql_num_rows($res)==0)
	{
		echo "Sorry No Trains Avialable<br><a href='tbs.php'>Click Here To Go Back</a>";
	}
	else
	{
		echo "<table style='position:absolute; top:250; left:400;' cellpadding='4px'>";
		echo "<td>"."<td>"."Train Id"."</td>"."<td>"."Train Name"."</td>"."<td>"."Train Number"."</td>"."<td>"."Train Id"."</td>"."<td>"."Departure Time"."</td>"."<td>"."Arrival Time"."</td>"."<td>"."Journey Time"."</td>"."<td>"."Seats Avialable"."</td>"."<td>"."Son"."</td>"."<td>"."Mon"."</td>"."<td>"."Tue"."</td>"."<td>"."Wed"."</td>"."<td>"."Thur"."</td>"."<td>"."Fri"."</td>"."<td>"."Sat"."</td>"."<br>";
		while($data=mysql_fetch_assoc($res))
		{
			if($data['Source']==$x && $data['Destination']==$y)
			{
				echo "<tr>"."<td>".$data['id']."</td>"."<td>".$data['trainname']."</td>"."<td>".$data['trainno']."</td>"."<td>".$data['Departure']."</td>"."<td>".$data['Arrival']."</td>"."<td>".$data['journeytime']."</td>"."<td>".$data['seatsavailable']."</td>"."<td>".$data['Son']."</td>"."<td>".$data['Mon']."</td>"."<td>".$data['Tue']."</td>"."<td>".$data['Wed']."</td>"."<td>".$data['Thur']."</td>"."<td>".$data['Fri']."</td>"."<td>".$data['Sat']."</td>"."</tr>";
			}
		}
		echo "</table>";
		echo "<br><br><br><br><br><br><br><br><br><br>";
		echo "<form method='POST' action='book.php'>";
		echo "To Book a train Enter Train id:"."<input type='number' name='u' placeholder='Train Id' required><br<br>";
		echo "<input type='submit' value='BOOK'>";
		echo "</form>";
		echo "<br><br><br><br><br><br><br><br><br><br><br><br><a href='fare.php'>Want to have a prior knowledge of the fairs</a>";
	}

}



?>