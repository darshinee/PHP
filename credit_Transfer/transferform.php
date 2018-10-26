<html>
<head><title>Transfer Credit Form</title>
				<link rel="stylesheet" href="style.css">

	</head>
<body>
<h2> Transfer Credits</h2>
<form action="transfer_credit.php" action="post">
	
	Select a User From whom you want to Transfer point<br><br>
	User_ID:
	<input type="text" name="user_id1" required><br><br>
	User_Name:
	<input type="text" name="user_name1"><br><br><br>

Select a user to whom you want to transfer points<br><br>
	User_ID:
	<input type="text" name="user_id2" required><br><br>
	User_Name:
	<input type="text" name="user_name2"><br><br>
	
Enter points to transfer:<br><br>	
	<input type=text" name="transfer_points" >
<br><br>
	<input type="submit" name="transfer" value="Transfer">

</form>

</body>


</html>
