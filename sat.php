<?php
echo "<body bgcolor='#1E90FF'></body>";
echo "<title>IRCTC next gen Eticketing System</title>";
echo "<div style='position:absolute; top:60px; left:600px;'>";
echo "<form method='POST' action='sat.php'>";
echo "<input type='text' size='40' name='a'>    <input type='submit' name='submit' value='SEARCH'>";
echo "</form>";
echo "</div>";
?>
<?php
if(isset($_POST['submit']))
{
	mysql_connect("localhost","root","");
	mysql_select_db("user");
	$x = $_POST['a'];
	$query = "SELECT * FROM booking"
	$res = mysql_query($query);
	while($data = mysql_fetch_assoc($res))
	{
		if($data['pnr']==$x)
		{
			echo "<div style='position:absolute; top:120px; left:600px;'>";
			echo "<table cellpadding='4px' border='2'>";
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
			echo "<a href='welcome.php'><Button align='center'>HOME</Button></a>";
			echo "<a href='cb.php'><Button>Cancel Booking</Button></a>";
			echo "</div>";

		}

	}
}







?>