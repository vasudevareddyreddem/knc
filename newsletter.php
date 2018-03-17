<?php
session_start();
$servername = "43.255.154.8";
$username = "kncdemo";
$password = "kncdemo@1";
$dbname = "kncdemo";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo '<pre>';print_r($_POST);exit;
if(isset($_POST) && $_POST!=''){
$sql = "INSERT INTO newsletters (email,create_at)
VALUES ('".$_POST['email']."','".date('Y-m-d H:i:s')."')";

if ($conn->query($sql) === TRUE) { 

$_SESSION["success"]='Your email Successfully Subscribed';

	header("Location: http://demo1.prachatech.com/"); exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
