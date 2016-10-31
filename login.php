<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
require_once('../Food.php');
session_start();
 function after ($this, $inthat)
    {
        if (!is_bool(strpos($inthat, $this)))
        return substr($inthat, strpos($inthat,$this)+strlen($this));
    };
 function before ($this, $inthat)
    {
        return substr($inthat, 0, strpos($inthat, $this));
    };
	
	$email = $_POST["email"];
	$email = mysql_real_escape_string($email);
	$emailpt1 = before ('@', $email);
	$emailpt2 = after ('@', $email);
	$loginpassword = $_POST["password"];
	$loginpassword = mysql_real_escape_string($loginpassword);

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

$sql = "SELECT type FROM accounts where email = '$email' and password = '$loginpassword'";
$result = $conn->query($sql) or die($conn->error);;
echo '<center>';
	while($row = $result->fetch_assoc()) {
		$type = $row["type"];
		if ($type == "U"){
			header("Location: user.php");
			$_SESSION['userkey'] = "2fUdK4X6r2XNpRZ8";
			$_SESSION['dkey'] = "wrongkey";
			$_SESSION['syschi'] = "wrongkey";
		}
		elseif ($type == "A"){
			header("Location: user.php");
			$_SESSION['dkey'] = "KLNdEt6D9SKkPX9q";
			$_SESSION['userkey'] = "wrongkey";
			$_SESSION['syschi'] = "wrongkey";
		}
		elseif ($type == "D"){
			header("Location: driver.php");
			$_SESSION['syschi'] = "UgWc5Cn7vV4eNdAC";
			$_SESSION['dkey'] = "wrongkey";
			$_SESSION['userkey'] = "wrongkey";

		}
	}
		$conn->close();
		// $emailpt1@$emailpt2
?>