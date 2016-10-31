<?php
require_once('../XboxDB.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
?>
<style>
form {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border-style: inset;
}
</style>
<body>
<?php
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  if (isset($_GET['name'])) {
	if (isset($_GET['image'])){
				$name=$_GET['name'];
				$image=$_GET['image'];
				$sql2 = "INSERT Into games (Name, Image ) VALUES ('$name', '$image')";
				$result1 = $conn->query($sql2);
	}
  }
?>  
<center>
<form action="insert.php" method="get"><br>
  Name: <input type="text" name="name"><br><br>
  Image: <input type="text" name="image"><br><br>
  <br><br>
  <input type="submit" value="Submit">
</form>
</center>