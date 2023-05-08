<?php
session_start();
// echo "Session Array:";
// print_r($_SESSION);
// echo "\n";
// echo "Sess_ID ";
// echo SESSION_ID();

// remove all session variables

echo "Unset";

try{
    session_unset();
    header("Location: ../index.php");

}
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
?>