<?php


require 'db_conn.php';
require 'get_timestamp.php';
require 'gen_uuid.php';

$uuid = gen_uuid();
$user_id = $_POST['user_id'];
$post_id = $_POST['post_id'];
$data_ = $_POST['data'];
$timestamp = get_ts($conn);


try{
if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
}else{

   $stmt = $conn->prepare("INSERT INTO `posting_interactions` (`id`,`acc_id`, `posting_id`, `data`, `dateModified`) VALUES (?,?,?,?,?)");
  $stmt->bind_param("sssss", $uuid,$user_id,$post_id,$data_,$timestamp);
  $stmt->execute();
  
  echo "
  
  ";

}

}
catch(Exception $e){
    echo $e;

}

?>

