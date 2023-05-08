
<?php 

require 'db_conn.php';
require 'gen_uuid.php';
require 'generate_otp.php';
require 'get_timestamp.php';

$id = gen_uuid();
$caption = ($_POST["caption"]);
$postingType = ($_POST["postingType"]);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }else{
  
  //check if email is already in the system
  $sql = "SELECT * FROM `postings` WHERE id = gen_uuid()";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) { // if email is in system
      // header("Location: ../index.php?");
    }
  } else {
    
  try{
  
    //
    $timestamp = get_ts($conn);
  
    $stmt = $conn->prepare("INSERT INTO `postings` (`id`, `acc_id`, `caption`, `postingType`, `dateTime`) 
    VALUES (?, ?, ?, ?, ?)");
     
    $stmt->bind_param("sssss", $id, $caption,$postingType,$timestamp);
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