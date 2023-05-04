<?php

require('db_conn.php');

$q = $_REQUEST["q"];

// echo $q;

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }else{
  
  //check if email is already in the system
  $sql = "SELECT * FROM `accounts` WHERE email = '$q'";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) { // if email is in system
      echo "NOT OKAY!";
    }
  } else {

    echo "OKAY!";


  }

}

?>