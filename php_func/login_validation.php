<?php

$login_email = $_POST['login_email'];
$login_password = $_POST['login_password'];

//db connection
$conn = new mysqli('localhost','root','','farmbook_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  //admin
  $sql = "SELECT `id`, `adminName`, `userName`, `password` FROM `admins` 
  WHERE username = '".$login_email."' AND  password = '".$login_password."'";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        session_start();
        $_SESSION["logged_in"] = true;
        $_SESSION["acc_id"] = $row['id'];
        $_SESSION["adminName"] = $row['adminName'];
        $_SESSION["userName"] = $row['userName'];

    }
    header("Location: ../pages_php/admin.php");
  } else {
   //user

   $query = "SELECT `id`,`email`,`username`,`password` FROM `accounts` WHERE `email` = '$login_email';";

   $result = mysqli_query($conn,$query); //get result

   $credencials = mysqli_fetch_assoc($result); 
   if($credencials == NULL){
       echo "No such user.";
   }

   $val_username = $credencials['email'];
   $val_password = htmlspecialchars($credencials['password']);

   $verify = password_verify($login_password, $val_password); //check if password match

       if($verify == 1 ){ // if password match
           // echo "Welcome";
           $query2 = "SELECT `id`,`email`,`username`,`firstName`,`lastName` FROM `accounts` WHERE `email` = '$login_email';";

           $result2 = mysqli_query($conn,$query2); //get result
       
           $acc_details = mysqli_fetch_assoc($result2); 

           session_start();
           $_SESSION["logged_in"] = true;
           $_SESSION["acc_id"] = $acc_details['id'];
           $_SESSION["firstName"] = $acc_details['firstName'];
           $_SESSION["lastName"] = $acc_details['lastName'];
 
           header('Location: ../pages_php/feed.php');
         

       }else{ // password not match
       
           echo "Password mismatch. Please try again.<br>
           <a href='../index.php'>TRY AGAIN</a";
       }


  }







            
        

   


?>