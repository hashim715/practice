<!DOCTYPE html>
<html>
<head>
	<title>Handling requests</title>
	<style type="text/css">
		table,th,td {
			border:1px solid black;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
<form>
	<label>Students Name</label>
	<input type="text" name="email"><br><br>
	<label>Roll Number</label>
	<input type="text" name="roll_number"><br><br>
	<label>Class</label>
	<input type ="text" name="class"><br><br>
	<label>Totall Obtained Marks</label>
	<input type="text" name="Marks"><br><br>
	<input type="submit">
</form>
<table>
	<tr>
		<th>Students Name</th>
		<th>Roll Number</th>
		<th>Class</th>
		<th>Totall obtained marks</th>
	</tr>
	<tr>
		<td><?php echo $_GET['email']; ?></td>
		<td><?php echo $_GET['roll_number']; ?></td>
		<td><?php echo $_GET['class']; ?></td>
		<td><?php echo $_GET['Marks']; ?></td>
	</tr>
</table>
</body>
</html>