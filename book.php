<?php 
session_start();
$t = $_POST['u'];
mysql_connect("localhost","root","");
mysql_select_db("user");
$query = "SELECT * FROM trains";
$res = mysql_query($query);
while($data=mysql_fetch_assoc($res))
{
	if($data['id']==$t)
		break;
}
$_SESSION['tid'] = $data['id'];
$_SESSION['tn'] = $data['trainname'];
$_SESSION['tnum'] = $data['trainno'];
$_SESSION['rate'] = $data['fareperberth'];
$_SESSION['sa'] = $data['seatsavailable'];
$_SESSION['ss'] = $data['Source'];
$_SESSION['js'] = $data['Destination'];
$_SESSION['dt'] = $data['Departure'];
$_SESSION['ar'] = $data['Arrival'];
$_SESSION['jt'] = $data['journeytime'];
?>
<table border="1" cellpadding="2px" cellspacing="2px">
   <tr>
   	<td>Train Name</td>
   	<td>Train Number</td>
   	<td>Source</td>
   	<td>Destination</td>
   	<td>Departure Time</td>
   	<td>Arrival Time</td>
   	<td>Journey Time</td>
   	<td>Seats Available</td>
   	<td>Fare Per Berth</td>
   	<td>Son</td>
   	<td>Mon</td>
   	<td>Tue</td>
   	<td>Wed</td>
   	<td>Thur</td>
   	<td>Fri</td>
   	<td>Sat</td>
   </tr>
   <tr>
   	<td><?php echo $data['trainname']; ?></td>
   	<td><?php echo $data['trainno']; ?></td>
   	<td><?php echo $data['Source']; ?></td>
   	<td><?php echo $data['Destination']; ?></td>
   	<td><?php echo $data['Departure']; ?></td>
   	<td><?php echo $data['Arrival']; ?></td>
   	<td><?php echo $data['journeytime']; ?></td>
   	<td><?php echo $data['seatsavailable']; ?></td>
   	<td><?php echo $data['fareperberth']; ?></td>
   	<td><?php echo $data['Son']; ?></td>
   	<td><?php echo $data['Mon']; ?></td>
   	<td><?php echo $data['Tue']; ?></td>
   	<td><?php echo $data['Wed']; ?></td>
   	<td><?php echo $data['Thur']; ?></td>
   	<td><?php echo $data['Fri']; ?></td>
   	<td><?php echo $data['Sat']; ?></td>
   	
   </tr>


</table><br><br><br>
<form method="POST" action="npage.php">
	Number of Tickets:<input type="number" name="r"><br>
	<input type="checkbox" name="">By Clicking on SUBMIT you agree to our <a href="#">terms and conditions</a>
	<input type="submit" name="submit" value="SUBMIT"><br>
</form>



?>