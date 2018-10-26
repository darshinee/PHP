<?php


function connect()
{

$server_name='localhost';
$user_name='root';
$password='';
$database_name='darshini';


$conn=mysqli_connect($server_name,$user_name,$password,$database_name);

if(!$conn)
{
	throw new Exception("Database not connected ...<br>");
}

return $conn;
}



?>