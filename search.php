<html>
<body>
<a href="attendance.php">🔙 Student Attendance</a>
<br><br>



<form action="search.php" method="post">
    <div class="user-box">
      <input type="text" name="search" required="" placeholder="search">
      <label></label>
      <input type="submit" name="save" value="🔍" style="font-size:10px">

</form>


&nbsp;
<a href="insert.php">Insert</a>&nbsp;


<a href="delete.php">Delete</a><br>



<p style="font-size:30px"><b>Student Details:</b></p>
<?php 
$username = "root"; 
$password = ""; 
$database = "db"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$search = $_POST['search'];

$query = "SELECT * FROM details where Roll_Number='$search' or Name='$search' or Year='$search' or Branch='$search' or Section='$search'";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial"><b> Roll Number </b></font> </td> 
          <td> <font face="Arial"><b> Name </b></font> </td> 
          <td> <font face="Arial"><b> Year </b></font> </td> 
          <td> <font face="Arial"><b> Branch </b></font> </td> 
          <td> <font face="Arial"><b> Section </b></font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["Roll_Number"];
        $field2name = $row["Name"];
        $field3name = $row["Year"];
        $field4name = $row["Branch"];
        $field5name = $row["Section"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>