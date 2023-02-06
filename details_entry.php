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
	 $first_name = $_POST['roll'];
	 $last_name = $_POST['name'];
	 $gender = $_POST['year'];
	 $email = $_POST['branch'];
	 $phone = $_POST['section'];

	 $sql_query = "INSERT INTO details VALUES ('$first_name','$last_name','$gender','$email','$phone')";

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