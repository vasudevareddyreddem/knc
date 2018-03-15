<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "knc";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo '<pre>';print_r($_POST);exit;
if(isset($_POST) && $_POST!=''){
$sql = "INSERT INTO appointments (name, email,subject,mobile, message,type,create_at)
VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['subject']."', '".$_POST['mobile']."', '".$_POST['message']."','".$_POST['type']."','".date('Y-m-d H:i:s')."')";

if ($conn->query($sql) === TRUE) { ?>



<?php     
$to_email = 'knc@gmail.com';
$subject = $_POST['subject'].'-'.$_POST['type'];
$message = 'Hi iam '.$_POST['name'].' And '.$_POST['mobile'].' <br> '.$_POST['message'];
$headers = 'From:'.$_POST['email'];
mail($to_email,$subject,$message,$headers);
echo "New record created successfully";
	header("Location: http://" . $_SERVER['SERVER_NAME']); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
