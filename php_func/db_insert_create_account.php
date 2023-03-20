<?php
require("db_conn.php");
require("gen_uuid.php");

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO `accounts` (`id`,`firstName`, `lastName`, `midName`, `email`,`password`,
`streetName`,`barangay`,`cityTown`,`contactNo`,`accType_id`) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssssssss", $id,$firstName, $lastName,$midName, $email,$hashed_pass,$street_name,$barangay,$city,$contactNo,$accType_id);

// fname,midname,lastname,email,password,confirm pass
// street, barangay, city, province, contact number
// profile picture

$id = gen_uuid();
$firstName = "Bill Jerico2";
$lastName = "Mercado";
$midName = 'Pusod';
$email = "bjmercado@g.batstate-u.ph";
$password = 'password'; // ! optimize this later to directly set as hashed and not store the plain string
$hashed_pass = password_hash($password, PASSWORD_DEFAULT); // !
$street_name = 'consuelo';
$barangay = '12';
$city = 'batangas';
$contactNo = '0955555555';

if(!isset($accType_id)){
  $accType_id = 1;
}


$stmt->execute();



?>