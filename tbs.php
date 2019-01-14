<!DOCTYPE html>
<html>
<head>
	<title>IRCTC Next Gen ETicketing System</title>
	<style type="text/css">
		#a
		{
			position: absolute;
			top: 40px;
			left: 40px;
			box-shadow: 2px 2px;
			font-size: 30px;
		}
		#d
		{
			height: 30px;
			width: 90px;
		}
		#e
		{
			height: 30px;
			width: 150px;
		}
		#f
		{
			height: 30px;
			width: 150px;
		}
		#c
		{
			height: 30px;
			width: 150px;
		}
        #g
        {
        	position: absolute;
        	border: 2px solid #8DEEEE;
        	box-shadow: 2px 2px;
        	top: 230px;
        	left: 550px;
        	height: 500px;
        	width: 900px;
        	display: none;
        }
	</style>
</head>
<body bgcolor="#3CB371">
	<form method="POST" action="file.php">
		<table id="a" border="0" cellpadding="3px">
			<tr>
				<td>Source Station:</td>
				<td>
					<select name="a" id="e">
						<option>Allahabad</option>
						<option>Kanpur</option>
						<option>Bareilly</option>
						<option>Kanpur</option>
						<option>Lokmanyatilak T</option>
						<option>Delhi</option>
					</select>

				</td>
			</tr>
			<tr>
				<td>Journey Station:</td>
				<td>
					<select name="b" id="f">
						<option>Allahabad</option>
						<option>Kanpur</option>
						<option>Bareilly</option>
						<option>Kanpur</option>
						<option>Lokmanyatilak T</option>
						<option>Delhi</option>
					</select>

				</td>
			</tr>
			<tr>
				<td>Date of Travel:</td>
				<td><input type="date" name="c" id="c" required></td>
			</tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="SEARCH" size="30" id="d"></td>
		</table>












	</form>

</body>
</html>