<html>
<head>
	<title>
		A Sample Tutorial for database connection.
	</title>
</head>
<body>
    <p align="center"><b>Insert Student Details</b></p>
	<div align="center">
		<!--<h1>Details Entry Form</h1>-->
	</div>
<form action="details_entry.php" method="post">
	<table border="1" align="center">
		<tr>
			<td>
			<label>Roll Number</label></td>
			<td><input type="text" name="roll"></td>
		</tr>
		<tr>
			<td>
			<label>Name</label></td>
			<td><input type="text" name="name"></td>
		</tr>
		
		<tr>
			<td>
			<label>Year</label></td>
			<td><input type="text" name="year"></td>
		</tr>
		<tr>
			<td>
			<label>Branch</label></td>
			<td><input type="text" name="branch"></td>
		</tr>
        <tr>
			<td>
			<label>section</label></td>
			<td><input type="text" name="section"></td>
		</tr>
		<tr>
			<td colspan="2" align="center" ><input type="submit" name="save" value="Submit" style="font-size:20px"></td>
		</tr>
	</table>
</form>
</body>
</html>