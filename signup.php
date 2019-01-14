<!DOCTYPE html>
<html>
<head>
	<title>IRCTC NXT GEN ETicketing System</title>
	<style type="text/css">
		#a
		{
			position: absolute;
			top: 60px;
			left: 70px;
			font-family: "Comic Sans MS", cursive,Sans-serif;
		}
		#b
		{
			position: absolute;
			top: 140px;
			left: 60px;
		}
	</style>
</head>
<body bgcolor="#00CED1">
	<h1 id="a">INDIVIDUAL REGISTERATION</h1>
	<hr>
	<div id="b">
		<form action="data.php" method="POST">
				<table border="0" cellpadding="50px">
					<tr>
						<td style="font-size: 30px;">Username</td>
                        <td><input type="text" name="a" size="30" required style="font-size: 30px;"></td>
					</tr>
					<tr>
						<td style="font-size: 30px;">Password</td>
                        <td><input type="password" name="b" size="30" required style="font-size: 30px;"></td>
					</tr>
					<tr>
						<td style="font-size: 30px;">Confirm Password</td>
                        <td><input type="password" name="c" size="30" required style="font-size: 30px;"></td>
					</tr>
					<tr>
						<td style="font-size: 30px;">Email  Id</td>
                        <td><input type="email" name="d" size="30" required style="font-size: 30px;"></td>
					</tr><tr>
						<td style="font-size: 30px;">City</td>
                        <td><input type="text" name="e" size="30" required style="font-size: 30px;"></td>
					</tr><tr>
						<td style="font-size: 30px;">Gender</td>
                        <td>
                        	Male<input type="radio" name="f" size="30" value="Male" required style="font-size: 30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        	Female<input type="radio" name="f" size="30" value="Female" required style="font-size: 30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        	Others<input type="radio" name="f" size="30" value="Others" required style="font-size: 30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



                        </td>
					</tr><tr>
						<td style="font-size: 30px;">Age</td>
                        <td><input type="number" name="g" size="30" required style="font-size: 30px;"></td>
					</tr><tr>
						<td style="font-size: 30px;">Phone Number</td>
                        <td><input type="number" name="h" size="30" required style="font-size: 30px;"></td>
					</tr>
					<td colspan="2"><center style="font-size: 40px;"><input type="submit" value="SUBMIT"></center></td>
					
				</table>






		</form>
	</div>

</body>
</html>