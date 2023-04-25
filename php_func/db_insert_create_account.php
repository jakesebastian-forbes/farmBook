<?php
session_start();
require 'db_conn.php';
require 'gen_uuid.php';
require 'php_mailer.php' ;


$fname = $_POST["fname"];
$mname = $_POST['mname'];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$address = $_POST["address"];
$contact_no = $_POST["contact_no"];
$class_ = $_POST["class"];
$id = gen_uuid();
$otp = generateNumericOTP(7);
// echo $fname;
// echo "insert yarn?" . $fname,$mname,$lname,$email,$password,$address,$contact_no;

$db_servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "farmbook_db";

$conn = new mysqli($db_servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

try{

$stmt = $conn->prepare("INSERT INTO `accounts`(`id`, `firstName`,  `midName`,`lastName`,
  `email`, `password`, `address`, `contactNo`,`accountType`,`verification`) 
 VALUES (?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssssss", $id,$fname,$mname, $lname, $email,$password,$address,$contact_no,$class_,$otp);
$stmt->execute();

$fullname = $fname . ' '. $mname.' '.$lname;

send_otp($email,$fullname);

$_SESSION['user_id'] = $id;

}
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}



?>