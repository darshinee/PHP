<html>
<head>
			<link rel="stylesheet" href="style.css">
</head>
<body>

<?php

require_once "db_connect.php";


/*if($_GET['id']) 
{
  $id = $_GET['id'];

  	 select_user($id);
}
*/

function select_user($id)
{
	try
	{
	$conn=connect();
//	echo "Database connected successfully.....<br>";
	
	$query="SELECT * FROM user_points where user_id='$id'; ";

	$result=mysqli_query($conn,$query);

	//echo $result;

	$num=mysqli_num_rows($result);
	//echo "<br>".$num;
		if($num>0)
		{

			while($row=(mysqli_fetch_array($result)))
			{
			
				echo "Points for".$row['user_name']."is".$row['user_points']."<br>";
				$points=$row['user_points'];	
			}
		}
else
{

	echo "<br> Try again....";
}
	
}

catch (exception $error)
{
	echo $error->getmessage();
}


return $points;

} 



function transfer_credit()
{

if(isset($_POST['transfer']))
{
	$u1=$_POST['user_name1'];
	$id1=$_POST['user_id1'];
	
	$user1_credit=select_user($id1);

//	echo "<br>".$user1_credit;

	$u2=$_POST['user_name2'];
	$id2=$_POST['user_id2'];

	$user2_credit=select_user($id2);
//	echo "<br>".$user2_credit;

	$transfer_points=$_POST['transfer_points'];

		$new_credit_user1=$user1_credit-$transfer_points;
		$new_credit_user2=$user2_credit+$transfer_points;

echo "<br>".$new_credit_user1;
echo "<br>".$new_credit_user2;

//updating credits

	$conn=connect();
//	echo "Database connected successfully.....<br>";
	
//updating credit for user1
	$query1="UPDATE user_points SET user_points=$new_credit_user1 where  user_id='$id1'; ";

	$result1=mysqli_query($conn,$query1);

//updating credit for user2
	$query2="UPDATE user_points SET user_points=$new_credit_user2 where user_id='$id2'; ";

	$result2=mysqli_query($conn,$query2);


if($result2)
	echo "Transfer successful";
}

}

transfer_credit();

$date=date("d/m/y");

		$conn=connect();

		echo $u_name1,$u_name2;

		$query1="INSERT INTO transfer table ('user_from','user1_points','user_to','user2_points','transfer_points','date1') values ('".$u_name1."','".$u1_points."','".$u_name2."','".$u2_points."','".$transfer_points.'",".$date."');";
		
		$result1=mysqli_query($conn,$query1);

		if($result1)
			echo "data inserted..";
		else
			echo "Error..";



?>

</body>
</html>
