<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="db";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $delete = $_POST['delete'];

	 $sql_query = "DELETE FROM `details` WHERE Roll_Number='$delete'";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		header("Location: display.php");
 
exit;
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>