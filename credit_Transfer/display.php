<?php require_once "db_connect.php"?>
<html>
	<head>
		<meta charset="utf-8">
		<title>View All Users</title>
		<link rel="stylesheet" href="style.css">

			<title>Display Data</title>
		</head>
<body>

<?php



function display()
{

	try
	{
	$conn=connect();
//	echo "Database connected successfully";
	
	$query="SELECT * FROM user_points";

	$result=mysqli_query($conn,$query);


	$num=mysqli_num_rows($result);
//	echo "<br>".$num."Records found<br><br>";
		if($num>0)
		{
			echo "<table>";
			echo "<tr> <th>User_ID</th>
						<th> Name</th>
						<th>Current_credit</th>
						<th>Action</th>
				</tr>";

			
			while($row=(mysqli_fetch_array($result)))
			{
			
			echo "
				<tr id='u_id'><td>".$row['user_id']." </td><td>".$row['user_name']."</td><td>".$row['user_points']."</td>";
			
				//$id=$row['user_id'];

			echo '<td><a href="select.php?id='.$row['user_id'].'">
	<button name="select" value="Select" >Select</button>
	</a>
		
	</td>';
	
		echo "</tr>";

			}
		echo "</table>";

			}
		else
		{

		echo "<br> Try again...";
		}
	}	
	catch (exception $error)
	{
		echo $error->getmessage();
	}


}


	display();
	echo "<br>";





?>
	
</body>
</html>
