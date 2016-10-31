<?php
session_start();
require_once('../Food.php');
$ukey= $_SESSION['userkey'];
if ($ukey != $userkey){
	exit;
}
echo "Key for user correct.";
?>