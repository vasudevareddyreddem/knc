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
$sql = "INSERT INTO appointments (name, email,subject,mobile, message,type,create_at)
VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['subject']."', '".$_POST['mobile']."', '".$_POST['message']."','".$_POST['type']."','".date('Y-m-d H:i:s')."')";

if ($conn->query($sql) === TRUE) { ?>



<?php     
$to_email = 'knc@gmail.com';
$subject = $_POST['subject'].'-'.$_POST['type'];
$message = 'Hi iam '.$_POST['name'].' And '.$_POST['mobile'].' <br> '.$_POST['message'];
$headers = 'From:'.$_POST['email'];
mail($to_email,$subject,$message,$headers);
if($_POST['type']=='contact'){
$_SESSION["success"]='Your query Successfully sent';
}else{
$_SESSION["success"]='Your appointment was sent. Our team will contact as soon';	
}
echo "New record created successfully";
	header("Location: http://demo1.prachatech.com/"); exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
