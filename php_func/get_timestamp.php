<?php

require 'db_conn.php';

 
function get_ts($conn){
    if($conn->connect_error){
        die('Connection failed : ' . $conn->connect_error);
       }else{
      
      $query = "SELECT NOW(3) AS time_s;";
      
      $result = mysqli_query($conn,$query);
      
      if($rows = mysqli_fetch_assoc($result))
          {
           return $timestamp =$rows['time_s'] ;
          }
        }



}

// echo get_ts($conn);


?>