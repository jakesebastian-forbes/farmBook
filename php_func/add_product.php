<?php 
session_start();
require 'gen_uuid.php';
require 'db_conn.php';

$id = gen_uuid();
$seller_id = $_SESSION['acc_id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$category  = $_POST['category'];
$transaction = $_POST['transaction'];
$description = $_POST['description'];
$product_img = file_get_contents($_FILES['product_img']['tmp_name']);


try{

   
  
    $stmt = $conn->prepare("INSERT INTO `products`(`id`, `accOwner_id`, `productName`, `category`, `product_img`, 
    `description`, `transactionType`, `price`)
     VALUES (?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssss", $id,$seller_id,$product_name, $category, $product_img,$description,$transaction,$product_price);
    $stmt->execute();

    // header("Location: ../pages_php/feed.php");

    }
  
    catch(Exception $e) {
      echo 'Message: ' .$e->getMessage();
    }