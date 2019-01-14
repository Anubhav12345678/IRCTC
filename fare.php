<?php
mysql_connect("localhost","root","");
mysql_select_db("user");
$query = "SELECT * FROM trains";
$res = mysql_query($query);
echo "<table cellpadding='4px' style='position:absolute; left:60px; top:250px;' border='2'>";
 echo "<th>"."<td>"."Train Id"."</td>"."<td>"."Train Name"."</td>"."<td>"."Train Number"."</td>"."<td>"."Source"."</td>"."<td>"."Destination"."</td>"."<td>"."Departure Time"."</td>"."<td>"."Arrival Time"."</td>"."<td>"."Journey Time"."</td>"."<td>"."Seats Available"."</td>"."<td>"."Fare Per Berth"."</td>"."<td>"."Son"."</td>"."<td>"."Mon"."</td>"."<td>"."Tue"."</td>"."<td>"."Wed"."</td>"."<td>"."Thur"."</td>"."<td>"."Fri"."</td>"."<td>"."Sat"."</td>"."<th>";
 while($data = mysql_fetch_assoc($res))
 {
 	echo "<tr>"."<td>".$data['id']."</td>"."<td>".$data['trainname']."</td>"."<td>".$data['trainno']."</td>"."<td>".$data['Source']."</td>"."<td>".$data['Destination']."</td>"."<td>".$data['Departure']."</td>"."<td>".$data['Arrival']."</td>"."<td>".$data['jouneytime']."</td>"."<td>".$data['seatsavailable']."</td>"."<td>".$data['fareperberth']."</td>"."<td>".$data['Son']."</td>"."<td>".$data['Mon']."</td>"."<td>".$data['Tue']."</td>"."<td>".$data['Wed']."</td>"."<td>".$data['Thur']."</td>"."<td>".$data['Fri']."</td>"."<td>".$data['Sat']."</td>"."</tr>";
 }
 echo "</table>";
 echo "<a href='tbs.php'>Click Here To Book Now</a>";









?>