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
    <nav class="navbar navbar-expand-lg navbar-light fixed-top px-2" >
        <h1 style="color: #FFDE59;font-family: 'Archivo Black';margin-left: 10px;">FarmBook</h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="color: aqua;"></span>
        </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="color: #FFDE59 ; ">
               <!--======================= di nagana pag nasa index=================== -->
                  <li class="nav-item" ><a class="nav-link" href="" style=" color: #FFDE59;"   id="link_home"><i class="fa fa-fw fa-home fa-2x"></i>Home</a></li>
                  <li class="nav-item" ><a class="nav-link" href="" style=" color: #FFDE59;" id="link_about"><i class="fa fa-fw fa-circle-info fa-2x"></i>About Us</a></li>
                  <li class="nav-item" ><a class="nav-link" href="" style=" color: #FFDE59;" id="link_e-learning"><i class="fa fa-fw fa-book fa-2x"></i>E-Learning</a></li>
                </ul>
        
              </div>
        
        </nav>      

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
                    <div class="row">
                        <div class="col-md-5 py-2">
                           <!-- <div class="product-name text-center">
                            <h5>Product</h5>
                           </div> -->
                            <div class="product-img text-center d-block">
                                <img src="/img/fruits/fruit-apple.jpg" alt="">
                               
                            </div>
                        </div>

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
                            <h3>₱<span id = "total"><?php echo $rows1['price'] * $qnt?></span>.00 </h3>
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
                <div class="payment-total mt-5" style="text-align: end;">
                    <h4>Shipping fee: <span>₱50.00</span></h4>
                    <h4>Total payment: <span>₱2050.00</span></h4>
                </div>
                
            
              </div>
       </div>
<?php
 }
}
?>
       <!-- footer start--> 
<footer class="bg-light text-dark pt-5 pb-4" style="margin-top: 5%;">
    <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-info" style="text-decoration: none">FarmBook</h5>
                    <hr class="mb-4" style="height: 2px; color: black">
                    <p>lorem ipsum dolor sit amet, consetetur adipisicing elit, sed do eiusmod tempor 
                        incididunt labore at dolore magna aliqua.
                    </p>
                </div>
                
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-info">About</h5>
                    <hr class="mb-4" style="height: 2px; color: black;">
                    <p>
                        <a href="#" class="text-dark" style="text-decoration: none;">Our Story</a>
                    </p>
                    <p>
                        <a href="#" class="text-dark" style="text-decoration: none;">Contacts</a>
                    </p>
                    <p>
                        <a href="#" class="text-dark" style="text-decoration: none;">Farmers Join!</a>
                    </p>
                    <p>
                        <a href="#" class="text-dark" style="text-decoration: none;">How to Sell Farm Products Online?</a>
                    </p>
                </div>
  
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-info">Resources</h5>
                    <hr class="mb-4" style="height: 2px; color: black;">
                    <p>
                        <a href="#" class="text-dark" style="text-decoration: none;">Farming Tutorials</a>
                    </p>
                    <p>
                        <a href="#" class="text-dark" style="text-decoration: none;">Food Types</a>
                    </p>
                    <p>
                        <a href="#" class="text-dark" style="text-decoration: none;">Farmbook Feed</a>
                    </p>
                    <p>
                        <a href="#" class="text-dark" style="text-decoration: none;">E-Learning</a>
                    </p>
                    <p>
                      <a href="#" class="text-dark" style="text-decoration: none;">Farming Techniques</a>
                  </p>
                  <p>
                    <a href="#" class="text-dark" style="text-decoration: none;">Tips in Farming</a>
                </p>
                </div>
  
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-info">Contacts</h5>
                    <hr class="mb-4" style="height: 2px; color: black">
                    <p>
                       <li class="fas fa-home mr-3"></li> Nasugbu Nas 4231, PH
                    </p>
                    <p>
                        <li class="fas fa-envelope mr-3"></li> farmbook@gmail.com
                     </p>
                     <p>
                        <li class="fas fa-phone mr-3"></li> +9353081922
                     </p>
                     <p>
                        <li class="fas fa-print mr-3"></li> +9353081922
                     </p>
                </div>
  
                <hr class="mb-4">
                <div class="row d-flex justify-content-center">
                    <div>
                        <p>
                            Copyright 2020 All Rights Reserved By :
                            <a href="#" style="text-decoration: none;">
                                <strong class="text-info">The Providers</strong>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="text-center">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="text-dark"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-dark"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-dark"><i class="fab fa-google-plus"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-dark"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-dark"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>
  </footer>                       
  <!-- footer end -->
              
    </body>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="dependencies\jquery-3.6.4.js"></script>
<!-- <script src="js\get_address.js"></script> -->
</html>