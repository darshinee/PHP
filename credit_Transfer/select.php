<html>	
<head>	<link rel="stylesheet" href="style.css">
</head>

<body>
<?php

require_once "db_connect.php";

//global $u_name1,$u1_points,$u_name2,$u2_points,$conn;

if($_GET['id'])
{
  $id = $_GET['id'];

 select_user($id);
}



function select_user($id)
{
	try
	{
	$conn=connect();
//	echo "Database connected successfully.....<br>";
	
	$query="SELECT * FROM user_points where user_id='$id'; ";
	$result=mysqli_query($conn,$query);

	//inserting data into 
	


	//echo $result;

	$num=mysqli_num_rows($result);
	//echo "<br>".$num;
		if($num>0)
		{

			echo "<table>";
			echo "<tr> <th>User_ID</th>
						<th> Name</th>
						<th>Current_credit</th>
				</tr>";

			while($row=(mysqli_fetch_array($result)))
			{
			
			echo "<tr><td>".$row['user_id']." </td><td>".$row['user_name']."</td><td>".$row['user_points']."</td>";
			
			echo "</tr>";

			}
//				echo "Points for ".$u_name1." is ".$u1_points."<br>";
				//$points=$row['user_points'];	

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
		 	$u_id1=$row['user_id'];
			$u_name1=$row['user_name'];
			$u1_points=$row['user_points'];
	

return $u1_points;

} 


function display()
{

	try
{
	$conn=connect();
//	echo "Database connected successfully";
	
	$query="SELECT * FROM user_points";

	$result=mysqli_query($conn,$query);


	$num=mysqli_num_rows($result);
	//echo "<br>".$num."Records found<br><br>";
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
				<tr><td>".$row['user_id']." </td><td>".$row['user_name']."</td><td>".$row['user_points']."</td>";
			
				//$id=$row['user_id'];

			echo '<td><a href="transferform.php?id='.$row['user_id'].'">
		<button name="tc" value="Transfer Credit">Transfer Credit</button>
	

		</a>


	
	</td>';
	
		echo "</tr>";

			}
		echo "</table>";

				$u_id2=$row['user_id'];
				$u_name2=$row['user_name'];
				$u2_points=$row['user_points'];
			
			echo $u_name2;			
	

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

//	echo "<br>";
/*$date=date("d/m/y");

		$conn=connect();

		echo $u_name1,$u_name2;

		$query1="INSERT INTO transfer table ('user_from','user1_points','user_to','user2_points','transfer_points','date1') values ('".$u_name1."','".$u1_points."','".$u_name2."','".$u2_points."','50',".$date."');";
		
		$result1=mysqli_query($conn,$query1);

		if($result1)
			echo "data inserted..";
		else
			echo "Error..";
*/
?>

</body>
</html>
