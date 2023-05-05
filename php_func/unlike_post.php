<?php

require 'db_conn.php';



$user_id = $_POST['user_id'];
$post_id = $_POST['post_id'];



try{
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      
      // sql to delete a record
      $sql = "DELETE FROM `posting_interactions` WHERE `posting_id`='$post_id' AND `acc_id` = '$user_id'";
      
      if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $conn->error;
      }
      
      $conn->close();

}
catch(Exception $e){
    echo $e;

}

?>