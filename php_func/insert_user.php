<?php

// require

$fname = $_POST["fname"];
$mname = $_POST['mname'];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$address = $_POST["address"];
$contact_no = $_POST["contact_no"];

// echo $fname;
echo "insert yarn?" . $fname,$mname,$lname,$email,$password,$address,$contact_no;
?>