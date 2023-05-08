<?php
session_start();
$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// $product_id  = substr($full_url, strpos($full_url, "=") + 1);   
$product_id = $_GET['product_id'];
$qnt = $_GET['kilo'];
echo $qnt;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>

    
    <link rel="stylesheet" href="../bootstrap-5.2.2/css/bootstrap.min.css"/>
    <script src="https://kit.fontawesome.com/8c65d0b7d2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/82727f4033.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Archivo Black' rel='stylesheet'> 

</head>
<style>
    .navbar{
        background-color: #57744B;
        font-family: 'Archivo Black';
        padding: 12px;
    }
    .navbar-nav a {
        font-size: 15px;
        text-transform: uppercase;
        font-weight: 500;
    }  
    .navbar-light .navbar-brand {
        /* color: white; */
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 2px;
    } 
    .navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
        color: #FFDE59;
    }
    .navbar-light .navbar-nav .nav-link {
        color: #FFDE59;
        font-family: 'Archivo Black';
    }
    .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
        color: #FFDE59;
    }

/*  */
    .product-img img{
        max-width: 100%;
        width:350px ;
        object-fit: cover;
        height: 250px;
        border-radius: 25px;
        /* margin-bottom: 20PX; */
    }

</style>
<body style="background-color: #E4E4E4;">
<?php 
$page_title = "payment";
include "../components/nav_bar.php"?>  

      <?php 
 

    //    echo $product_id;
    $conn = new mysqli('localhost','root','','farmbook_db');

    if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
    }else{

    $query = "SELECT `id`, CONCAT(`firstName`,' ',`lastName`) AS `fullname`, `farmBusName`, `contactNo`, `email`, `verification`, `accountBio`, `address`, `birthDate`, `userName`, `password`, `dateCreated`, `accountType`
     FROM `accounts` WHERE  `id` = '".$_SESSION['acc_id']."'";

    $result = mysqli_query($conn,$query);

    while($rows = mysqli_fetch_assoc($result))
 {
   
?> 
            <div class="container w-100" style="margin-top: 120px;"> 
                <div class="container rounded bg-light ">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 text-center py-2" >
                    <div class="col">
                    
                        <h5><i class="fa-solid fa-user"></i> Customer</h5>
                        <p id="customer_name"><?php echo $rows['fullname'];  ?></p>
                    </div>
                    <div class="col">
                    
                        <h5><i class="fa-solid fa-location-dot"></i> Delivery Address</h5>
                        <p id ="deliver_address"><?php echo $rows['address']?></p>
                    </div>
                    <div class="col">
                    
                        <h5><i class="fa-solid fa-phone"></i> Contact Number</h5>
                        <p id = "contact_number">(+63)<?php echo $rows['contactNo']?></p>
                    </div>
                    <div class="col py-2">
                        

          
                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Change details
                          </button>
                          <?php
 }     
 }
       
       ?>  
                        <!-- Modal -->
                        <div class="modal fade " style="margin-top: 10%;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="text-align: left;">
                                    <form>
                                        <div class="row">
                                          <div class="col-md-6 mb-3">
                                            <label for="firstName" class="form-label">First name</label>
                                            <input type="text" class="form-control" id="firstName" required>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                            <label for="lastName" class="form-label">Last name</label>
                                            <input type="text" class="form-control" id="lastName" required>
                                          </div>
                                        </div>
                                      
                                        <div class="mb-3">
                                          <label for="phone" class="form-label">Phone</label>
                                          <input type="tel" class="form-control" id="phone" required>
                                          <small class="form-text text-muted"></small>
                                        </div>
                                      
                                        <div class="mb-3">
                                          <label for="address" class="form-label">Address</label>
                                          <input type="text" class="form-control" id="address" required>
                                        </div>
                                      </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        
                    </div>
                    </div>
                </div>


                
              <div class="container bg-light mt-4 rounded">
                <div class="container py-4">
                <?php 
 

 //    echo $product_id;
 $conn = new mysqli('localhost','root','','farmbook_db');

 if($conn->connect_error){
 die('Connection failed : ' . $conn->connect_error);
 }else{

 $query1 = "SELECT t1.id as `product_id`, t2.id as `seller_id`,
 t1.productName,t1.product_img,t1.price, t1.description,
 CONCAT(t2.firstname,' ', t2.lastname) as 'fullname', t2.address
 FROM products as t1
 INNER JOIN accounts as t2
 ON t2.id = t1.accOwner_id WHERE t1.id = '$product_id'";

 $result1 = mysqli_query($conn,$query1);

 while($rows1 = mysqli_fetch_assoc($result1))
{

?> 
                    <div class="row">
                        <div class="col-md-5 py-2">
                           <!-- <div class="product-name text-center">
                            <h5>Product</h5>
                           </div> -->
                            <div class="product-img text-center d-block">
                                <img <?php echo 'src=data:image/jpeg;base64,'.base64_encode( $rows1['product_img']) ?> alt="">
                               
                            </div>
                        </div>

          
                        <div class="col-md-7">
                         
                            <div class="product-name">
                                <h3 id = "product_name"><?php echo $rows1['productName']?></h3>
                            </div>
                            <div class="seller-details mt-3">
                                <h4 id = "seller_name">Seller: <?php echo $rows1['fullname']?></h4>
                                <h3 id = "seller_address"><i class="fa-solid fa-location-dot"></i> <?php echo $rows1['address']?></h3>
                            </div>
                            <div class="price mt-3">
                                <h3 >₱<span id = "product_price"><?php echo $rows1['price']?></span>.00 per Kilo</h3>
                            </div>
                            <div class="ordered-kilo mt-3">
                                <h3>Kilogram: <span id = "kilogram"><?php echo $qnt?></span> kg/s</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <hr>
                        <div class="total-price d-flex justify-content-between">
                            <h3>Total Price:</h3>
                            <h3>₱<span id = "total"><?php $total = floatval($rows1['price']) * intval($qnt); echo $total;?></span>.00 </h3>
                        </div>
                    </div>
                </div>
              </div>

              <div class="container bg-light mt-4  py-4 rounded">
                <div class="payment d-flex justify-content-between">
                    <h4>Payment method:</h4>
                    
                        <div>
                        <select class="form-select w-100 "  aria-label="Default select example" style="float: right;">
                            <option selected>Select Payment method</option>
                            <option value="1">Cash on delivery</option>
                            <option value="2">Cash on pick-up</option>
                        </select>
                        
                        
                    </div>
                    </div>
                    <style>
                        .payment-btn{
                            background-color: #57744B;
                        }
                        .payment-btn:hover{
                            background-color: rgba(87,116,75,0.5);
                        }
                        .payment-btn:active{
                            background-color: rgba(87,116,75,0.6);
                        }
                    </style>
                    <div class="payment-total mt-5" style="text-align: end;">
                        <h4>Shipping fee: <span>₱50.00</span></h4>
                        <h4>Total payment: ₱<span><?php echo $total + 50;?></span>.00</h4>
                        <div class="paymentBtn mt-4" >
                            <button type="submit" class="btn payment-btn text-white" data-bs-toggle="modal"data-bs-target="#paymentModal">Place order</button>
                        </div>
                    </div>
                    
                
            
              </div>
       </div>
<?php
 }
}
?>
 <div class="modal fade" id="paymentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" >
                      <!-- head -->
                      <div class="modal-header align-items-center">
                        <h5 class="text-dark text-center w-100 m-0"id="exampleModalLabel">
                          
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"aria-label="Close"></button>
                      </div>
                      <!-- body -->
                      <div class="modal-body my-1 px-3" >
                        <!-- <div class="my-1 p-1"> -->
                          <div class="d-flex flex-column text-center h2">
                            <!-- name -->
                            Your Order has been placed!
                          </div>
                        </div>
                     </div>
                    </div>
                    </div>
                
                
       <!-- footer start--> 
       <?php
  require '../components/footer.php'
?>                  
  <!-- footer end -->
              
    </body>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="dependencies\jquery-3.6.4.js"></script>
<!-- <script src="js\get_address.js"></script> -->
</html>