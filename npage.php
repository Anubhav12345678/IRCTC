<?php 
session_start();
if(isset($_POST['submit']))
{
echo "<body bgcolor='#CAFF70'></body>";
$e = $_POST['r'];
echo "<div style='position:absolute; top:250px; left:600px;'>";
echo "BOOKING STATUS<br>";
echo "<table border='0' cellspacing='4px'>";
echo "<tr>"."<td>"."NAME:"."</td>"."  "."<td>".$_SESSION['name']."</td></tr>";
echo "<tr>"."<td>"."Train Id:"."</td>"."  "."<td>".$_SESSION['tid']."</td></tr>";
 echo "<tr>"."<td>"."Train Name:"."</td>"."  "."<td>".$_SESSION['tn']."</td></tr>";
 echo "<tr>"."<td>"."Train Number:"."</td>"."  "."<td>".$_SESSION['tnum']."</td></tr>";
 echo "<tr>"."<td>"."Source Station:"."</td>"."  "."<td>".$_SESSION['ss']."</td></tr>";
 echo "<tr>"."<td>"."Journey Station:"."</td>"."  "."<td>".$_SESSION['js']."</td></tr>";
 echo "<tr>"."<td>"."Departute:"."</td>"."  "."<td>".$_SESSION['dt']."</td></tr>";
 echo "<tr>"."<td>"."Arrival:"."</td>"."  "."<td>".$_SESSION['ar']."</td></tr>";
 echo "<tr>"."<td>"."Journey Time:"."</td>"."  "."<td>".$_SESSION['jt']."</td></tr>";
 $_SESSION['pnr'] = md5(uniqid(rand(),true));
 echo "<tr>"."<td>"."PNR:"."</td>"."  "."<td>".$_SESSION['pnr']."</td></tr>";
 echo "<tr>"."<td>"."Email id:"."</td>"."  "."<td>".$_SESSION['email']."</td></tr>";
 echo "<tr>"."<td>"."Gender:"."</td>"."  "."<td>".$_SESSION['gender']."</td></tr>";
 echo "<tr>"."<td>"."City:"."</td>"."  "."<td>".$_SESSION['city']."</td></tr>";
 echo "<tr>"."<td>"."Phone:"."</td>"."  "."<td>".$_SESSION['phone']."</td></tr>";
 echo "<tr>"."<td>"."Berths Booked:"."</td>"."  "."<td>".$e."</td>";
 echo "<tr>"."<td>"."Date of booking:"."</td>"."  "."<td>".$_SESSION['date']."</td></tr>";
 echo "<tr>"."<td>"."Amount To Be Paid:"."</td>"."  "."<td>".$_SESSION['rate']*$e."</td></tr>";
 echo "</table>";
 echo "<a href='welcome.php'><Button>HOME</Button></a>";
 echo "</div>";
 mysql_connect("localhost","root","");
 mysql_select_db("user");
 $x = $_SESSION['name'];
 $y = $_SESSION['tn'];
 $z = $_SESSION['tnum'];
 $u = $_SESSION['pnr'];
 $v = $_SESSION['rate']*$e;
 $m = $_SESSION['date'];
 $q = $_SESSION['sa']-$e;
 $id = $_SESSION['tid'];
 $dept = $_SESSION['dt'];
 $ar = $_SESSION['ar'];
 $jt = $_SESSION['jt'];
 $ss = $_SESSION['ss'];
 $js = $_SESSION['js'];
 $query1 = "UPDATE trains SET seatsavailable='$q' WHERE trainno='$z' ";
 mysql_query($query1);
 $query = "INSERT INTO booking(name,trainid,trainname,trainno,source,destination,dateofbooking,pnr,arrival,departure,jouneytime,noofbooking,amountpaid) VALUES ('$x','$id','$y','$z','$ss','$js','$m','$u','$dept','$ar','$jt','$e','$v')"
 mysql_query($query);
 echo "<a href='cb.php'><Button style='position:absolute; top:700px; left:1000px;'>Cancel Booking</Button></a>";
 echo "<a href='fare.php'><Button style='position:absolute; top:700px; left:760px;'>Train Status</Button></a>";

 
 
}






?>