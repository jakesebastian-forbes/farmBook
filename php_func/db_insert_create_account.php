<?php

require 'db_conn.php';
require 'gen_uuid.php';
require 'generate_otp.php';
require 'get_timestamp.php';

// require 'php_mailer.php' ;


$fname = ucwords($_POST["fname"]);
$mname = ucwords($_POST['mname']);
$lname = ucwords($_POST["lname"]);
$email = $_POST["email"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$address = $_POST["address"];
$contact_no = $_POST["contact_no"];
$class_ = $_POST["class"];
$id = gen_uuid();
$otp = generateNumericOTP(7);


// $fname = "ronald";
// $mname = "lundag";
// $lname = "platon";
// $email = "email";
// $password = password_hash("mamamia", PASSWORD_DEFAULT);
// $address = "brgy.brgy";
// $contact_no = "1231";
// $class_ = "class-1";
// echo $fname;
// echo "insert yarn?" . $fname,$mname,$lname,$email,$password,$address,$contact_no;


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{

//check if email is already in the system
$sql = "SELECT * FROM `accounts` WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) { // if email is in system
    // header("Location: ../index.php?");
  }
} else {
  
try{

  //
  $timestamp = get_ts($conn);

  $stmt = $conn->prepare("INSERT INTO `accounts`(`id`, `firstName`,  `midName`,`lastName`,
    `email`, `password`, `address`, `contactNo`,`accountType`,`verification`,`dateCreated`) 
   VALUES (?,?,?,?,?,?,?,?,?,?,?)");
  $stmt->bind_param("sssssssssss", $id,$fname,$mname, $lname, $email,$password,$address,$contact_no,$class_,$otp,$timestamp);
  $stmt->execute();
  
  $fullname = $fname . ' '. $mname.' '.$lname;
  
  // send_otp($email,$fullname);
  
  session_start();
  $_SESSION['user_id'] = $id;

  // header('Location : index.php');
  
  
  }

  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
}
}


?>