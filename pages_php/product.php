<?php
 session_start();
 if (!isset($_SESSION['logged_in'])) {
    header("Location: ../index.php");
}
 $page_title = 'product';
//  $acc_in_sess = $_SESSION['acc_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

</style>

<?php 
$page_title = "product";
include "../components/nav_bar.php"?>

<body style="background-color: #e4e4e4;">
    
  
<style>

    /* PRODUCT IMAGE  */

    
    #myImg{
    object-fit: cover;
    /* height: auto; */
    /* margin-top: 3rem; */
    width: 90%;
    aspect-ratio: 60/50
    }

  #myImg:hover {
      opacity: 0.7;
  }

  /* The Modal */

  .myModal {
   
    margin-top: 60px;
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 7;
      /* Sit on top */
      padding-top: 85px;
      /* Location of the box */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.9);
      /* Black w/ opacity */
    
  }

  /* Modal Content (image) */

  .modal-content {
      margin: auto;
      object-fit: cover;
    height: 30rem;
    width: 30rem;
  }

 
  /* Add Animation */

  .modal-content,
  #caption {
      -webkit-animation-name: zoom;
      -webkit-animation-duration: 0.6s;
      animation-name: zoom;
      animation-duration: 0.6s;
  }

  @-webkit-keyframes zoom {
      from {
        -webkit-transform: scale(0);
      }
      to {
        -webkit-transform: scale(1);
      }
  }

  @keyframes zoom {
      from {
        transform: scale(0);
      }
      to {
        transform: scale(1);
      }
  }

  /* The Close Button */

  .close {
      position: absolute;
      top: 15px;
      right: 35px;
      color: #f1f1f1;
      font-size: 40px;
      font-weight: bold;
      transition: 0.3s;
  }

  .close:hover,
  .close:focus {
      color: #bbb;
      text-decoration: none;
      cursor: pointer;
  }

  /* 100% Image Width on Smaller Screens */

  @media only screen and (max-width: 700px) {
      .modal-content {
      margin-top: 120px;
        width: 100%;
        height: 40%;
      }
  }
   /* add to cart button  */
   .add-to-cart-btn:hover{
      background-color: rgba(87,116,75,0.1);
   }

   
</style>
<div class="container my-5" >


<?php
   $full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

   $product_id  = substr($full_url, strpos($full_url, "=") + 1);    

//    echo $product_id;
$conn = new mysqli('localhost','root','','farmbook_db');

if($conn->connect_error){
  die('Connection failed : ' . $conn->connect_error);
 }else{

$query = "SELECT t1.id as `product_id`, t2.id as `seller_id`,
t1.productName,t1.product_img,t1.price, t1.description,
CONCAT(t2.firstname,' ', t2.lastname) as 'fullname', t2.address
FROM products as t1
INNER JOIN accounts as t2
ON t2.id = t1.accOwner_id WHERE t1.id = '$product_id'";

$result = mysqli_query($conn,$query);

while($rows = mysqli_fetch_assoc($result))
    {
      
?> 
        <div class="row  bg-light  rounded mx-1   " style="margin-top: 100px; ">
          <div class="col-lg-6  text-center py-5 ">
                <p id = "product_id" invisible hidden><?php echo $rows['product_id'];?></p>
             <img <?php echo 'src=data:image/jpeg;base64,'.base64_encode($rows['product_img'])?> alt="post image" id="myImg"  class="img-fluid rounded ">
             
            <div id="myModal" class="modal myModal px-5" >
                <span class="close">×</span>
                <img class="modal-content " id="img01" />
             
            </div>

            <script>
                // Get the modal
                var modal = document.getElementById("myModal");
                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById("myImg");
                var modalImg = document.getElementById("img01");
                var captionText = document.getElementById("caption");
                img.onclick = function() {
                   modal.style.display = "block";
                   modalImg.src = this.src;
                   captionText.innerHTML = this.alt;
                };
                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];
                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                   modal.style.display = "none";
                };
             </script>
        
        </div>
 
          <div class="col-lg-6  py-5 ">
                <div class="product-name ">
                    <h1 > <?php echo $rows['productName'];?></h1>
                </div>
                <div class="product-price mt-4  " >
                    <h2>₱<span id = "product_price"><?php echo $rows['price']?></span>.00 per kilo</h2>
                    
               
                </div>
                <div class="seller-name mt-3">
                    <h4>Seller : <?php echo $rows['fullname']?></h4>
                </div>
                <div class="seller-location mt-3">
                    <h5><i class="fa-solid fa-location-dot"></i> <?php echo $rows['address']?></h5>
                </div>

                <div class="product-description mt-4 pe-5">
                    <h5 class=""><?php echo $rows['description']?></h5>
                </div>
                
                <div class="kilo mt-5 d-flex">
                    <h5 class="mt-1 me-3">KILO</h5>
                <div class="input-group kilo-input  " style="width:140px;">
                  <button class="btn btn-outline-secondary minus-btn" type="button" onclick = 'qnt_minus()'>-</button>
                  <input type="number" class="form-control quantity-input text-center" 
                  value="1" id = "multiplier">
                  <button class="btn btn-outline-secondary add-btn" type="button" onclick = 'qnt_add()'>+</button>
                    
                </div>
                </div>

                <h2>TOTAL : ₱<span id = "total_cost"><?php echo $rows['price']?></span>.00</h2>

                <?php
    }
}
                ?>

                  <!-- <script>
                  // Get the minus and add buttons
                      var minusBtn = document.querySelector(".minus-btn");
                      var addBtn = document.querySelector(".add-btn");

                      // Get the quantity input field
                      var quantityInput = document.querySelector(".quantity-input");

                      // Add event listeners to the buttons
                      minusBtn.addEventListener("click", function() {
                        // Decrease the quantity by 1 if it's greater than 1
                        if (quantityInput.value > 1) {
                          quantityInput.value--;
                        }
                      });

                      addBtn.addEventListener("click", function() {
                        // Increase the quantity by 1
                        quantityInput.value++;
                      });

                  </script> -->

                  <div class="mask-icon justify-content-start mt-4 d-flex gap-2">
                                                        
                    <a class="btn add-to-cart-btn text-white" style="background-color: #57744B;"><i class="fa-solid fa-bookmark"></i> </a>
                    <a class="btn add-to-cart-btn text-white" style="background-color: #57744B;"
                    id = "buy_now"
                    href = "payment.php?product_id=<?php echo $product_id?>&kilo=1"><i class="fa-solid fa-cart-shopping"></i> Buy Now</a>
                  </div> 
            
              </div>
        </div>
    </div>
                      
    <?php
  require '../components/footer.php'
?>
<script src="../dependencies/jquery-3.6.4.js"></script>

<script>
        // var product_price =  parseFloat($("#product_price").innerHTML);

    function qnt_minus(){
       var product_price = parseFloat($("#product_price")[0].innerHTML)
       if( parseInt($("#multiplier")[0].value) > 1){
            $("#multiplier")[0].value--;
        }
       var qnt = parseInt($("#multiplier")[0].value)
       var total = product_price * qnt;
       console.log(product_price,qnt,total);
       $("#total_cost")[0].innerHTML = total;
       $("#buy_now")[0].href = "payment.php?product_id=<?php echo $product_id?>&kilo=" + qnt;
       
    }

    function qnt_add(){
        var product_price =  parseFloat($("#product_price")[0].innerHTML)
        $("#multiplier")[0].value++;
        var qnt = parseInt($("#multiplier")[0].value)
       
        var total = product_price * qnt;
        console.log(product_price,qnt,total);
        $("#total_cost")[0].innerHTML = total;
        $("#buy_now")[0].href = "payment.php?product_id=<?php echo $product_id?>&kilo=" + qnt;

    }



</script>
</body>
</html>