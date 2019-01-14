<?php
mysql_connect("localhost","root","");
mysql_select_db("user");
$w = $_SESSION['name'];
$query  = "SELECT * FROM booking WHERE name='$w'";
$res = mysql_query($query);
while(mysql_fetch_assoc($res))
{
	echo "<center><table border='2' cellpadding='2px'>";
	echo "<tr>"."<td>"."NAME:"."</td>"."<td>".$data['name']."</td>";
	echo "<tr>"."<td>"."Train Id:"."</td>"."<td>".$data['trainid']."</td>";
	echo "<tr>"."<td>"."Train Name:"."</td>"."<td>".$data['trainname']."</td>";
	echo "<tr>"."<td>"."Train Number:"."</td>"."<td>".$data['trainno']."</td>";
	echo "<tr>"."<td>"."Source:"."</td>"."<td>".$data['source']."</td>";
	echo "<tr>"."<td>"."Destination:"."</td>"."<td>".$data['destination']."</td>";
	echo "<tr>"."<td>"."Journey Date:"."</td>"."<td>".$data['dateofbooking']."</td>";
	echo "<tr>"."<td>"."PNR:"."</td>"."<td>".$data['pnr']."</td>";
	echo "<tr>"."<td>"."Departure:"."</td>"."<td>".$data['departure']."</td>";
	echo "<tr>"."<td>"."Arrival:"."</td>"."<td>".$data['arrival']."</td>";
	echo "<tr>"."<td>"."Journey Time:"."</td>"."<td>".$data['journeytime']."</td>";
	echo "<tr>"."<td>"."Number of Seats Booked:"."</td>"."<td>".$data['noofbooking']."</td>";
	echo "<tr>"."<td>"."Amount Paid:"."</td>"."<td>".$data['amountpaid']."</td>";
	echo "</table><br><br></center>";

}
echo "<center><a href='welcome.php'><Button align='center'>HOME</Button></a></center>";
echo "<center><a href='cb.php'><Button>Cancel a Booking</Button></a></center>";












?>