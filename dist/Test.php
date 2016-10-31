<?php
require_once('../../Food.php');
	if(isset($_POST['Restaurant']) )
	{
		$RestName = $_POST['Restaurant'];
		echo $RestName . " Menu<br>";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT Number FROM restaraunts where Name = '$RestName'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $RestID = $row["Number"];
    }
} 
$sql2 = "SELECT Food, Cost FROM menu where RNumber = '$RestID'";

$result2 = $conn->query($sql2);
//if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
        echo $row2["Food"] . " - $" . $row2["Cost"] . "<br>";
    }
//} 
$conn->close();
}
?>
<html>
Select Restaurant
<form action="test.php" method="post">
<select name="Restaurant">
  <option value="">Select...</option>

  <option value="McDonalds">McDonald's</option>
  <option value="Burger King">Burger King</option>
</select>
<input type="submit" value="Submit">
</form>
</p>