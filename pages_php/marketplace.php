<?php
$page_title = 'marketplace';
require "../php_func/marketplace_content.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace</title>

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
<body style="background-color: #E4E4E4;">

    <?php require '..\components\nav_bar.php';?>
    
    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel" style="height: 400px; " >
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner ">
          <div class="carousel-item active" style="background-image: linear-gradient(rgba(1,2,2,0.5),rgba(0,1,1,0.4)), url(../img/bg/bg10.jpg);  background-size:cover;height: 400px; background-repeat: no-repeat; ; ">  
            
            <div class="carousel-caption h-50">
                <h1 class="display-4">FarmBook Marketplace</h1>
             
            </div> 
          </div>
          <div class="carousel-item" style="background-image:linear-gradient(rgba(1,2,2,0.5),rgba(0,1,1,0.4)), url(../img/bg/bg12.jpg);  background-size:cover ;height: 400px; background-repeat: no-repeat;">     
            <div class="carousel-caption h-50">
                <h1 class="display-4">FarmBook Marketplace</h1>
            </div>
          </div>
          <div class="carousel-item" style="background-image:  url(../img/bg/bg13.jpeg);   background-size:cover ;height: 400px; background-repeat: no-repeat;">
            <div class="carousel-caption h-50">
                <h1 class="display-4">FarmBook Marketplace</h1>
            </div>
          </div>
          <div class="login-div text-center">
            <button class="car-login" data-bs-toggle="modal" data-bs-target="#loginform">Login</button>
            
          </div>
         
        </div>
        
        <button class="carousel-control-prev" type="button"  data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button> 
      
        
      </div>
   
 
    <div class="row d-flex mx-3">
        <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-right  mt-5" >
            <div class="product-categori mt-1 ">
                <!-- search box -->
                <div class="search-product ">
                    <!-- <form action="#"> -->
                        <input class="form-control rounded" placeholder="Search here..." 
                        type="text" style = "color:black;"
                        id = "search_products_box"> 
                        <button type="submit"> <i class="fa fa-search rounded"></i> </button>
                    <!-- </form> -->
                </div>
                
                <div class="filter-sidebar-left pe-5">
                    <div class="title-left">
                        <h3>Categories</h3>
                    </div>
                    
                    <ul class="nav nav-pills nav-ul d-block ms-5 py-3 rounded" style="background-color: #57744B;">
                            
                    <li class="nav-item cat nav_list py-1 mx-3 my-2 rounded cat-nav " role="presentation">
                      <a class="nav-link cat-item text-dark" id="cat-all-tab" data-bs-toggle="tab" data-bs-target="#cat-all" href="#" style="color: black;"><i class="fa-solid fa-basket-shopping" style="font-size: 20px ;"></i>  ALL</a>
                    </li>
                    <li class="nav-item cat nav_list py-1 mx-3 my-2 rounded cat-nav  " role="presentation">
                      <a class="nav-link cat-item  text-dark" id="cat-veg-tab" data-bs-toggle="tab" data-bs-target="#cat-veg" href="#" style="color: black;"> <i class="	fas fa-carrot" style="font-size: 20px ;"></i> VEGETABLES</a>
                    </li>
                    <li class="nav-item cat nav_list py-1 mx-3 my-2 rounded cat-nav " role="presentation">
                      <a class="nav-link cat-item  text-dark" id="cat-fruit-tab" data-bs-toggle="tab" data-bs-target="#cat-fruit" href="#" style="color: black;"> <i class="	fas fa-apple-alt" style="font-size: 20px ;"></i> FRUITS</a>
                    </li>
                    <li class="nav-item cat nav_list py-1 mx-3 my-2 rounded cat-nav" role="presentation" >
                      <a class="nav-link cat-item  text-dark" id="cat-crop-tab" data-bs-toggle="tab" data-bs-target="#cat-crop" href="#" style="color: black;"><i class="fa-solid fa-seedling" style="color: #000000;"></i></i>CROPS</a>
                    </li>
                    <!-- text-white link-dark -->
                
    
                    </ul>
                </div>
              
            </div>
        </div>


     <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-left ">
        <div class="product-categorie-box ">
          <div class="tab-content" id="tabContent" >
<!-- ALL CATEGORY -->
            <div class="tab-pane fade show active" id="cat-all" role="tabpanel" aria-labelledby="cat-all-tab" >
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                    <div class="row mt-5 mx-1">
                       
                      <h1 class="ms-3">ALL</h1>
                      <?php 
        $query = "SELECT ROW_NUMBER() OVER(ORDER BY id ASC) as `row`,`id`, `accOwner_id`, `productName`, `category`, `product_img`, `description`, `transactionType`, `price`
         FROM `products`";
        content($query);

                ?>
                      <a href="./pages/single-product.html"> 
                      
                      </a>
               
                    </div>
                </div>
            
            </div>
            </div>
<!-- VEGETABLES CATEGORY -->
            <div class="tab-pane fade " id="cat-veg" role="tabpanel" aria-labelledby="cat-veg-tab" >
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                    <div class="row mt-5 mx-1">
                      
                      <h1 class="ms-3">VEGETABLES</h1>
              
           
                      <?php 
        $query = "SELECT ROW_NUMBER() OVER(ORDER BY id ASC) as `row`,`id`, `accOwner_id`, `productName`, `category`, `product_img`, `description`, `transactionType`, `price`
         FROM `products` WHERE `category` = 'VEGETABLE'";
        content($query);

                ?>
            
                    </div>
                </div>
            </div>
            </div>

<!-- FRUITS CATEGORY -->
            <div class="tab-pane fade " id="cat-fruit" role="tabpanel" aria-labelledby="cat-fruit-tab" >
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                    <div class="row mt-5 mx-1">
                      
                      <h1 class="ms-3">FRUITS</h1>
                    
    
                      <?php 
        $query = "SELECT ROW_NUMBER() OVER(ORDER BY id ASC) as `row`,`id`, `accOwner_id`, `productName`, `category`, `product_img`, `description`, `transactionType`, `price`
         FROM `products` WHERE `category` = 'FRUIT'";
        content($query);

                ?>




                    </div>
                </div>

            </div>
            </div>

<!-- CROPS CATEGORY -->
            <div class="tab-pane fade " id="cat-crop" role="tabpanel" aria-labelledby="cat-crop-tab" >
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                    <div class="row mt-5 mx-1">
                      
                      <h1 class="ms-3">CROPS</h1>
              
            
                      <?php 
        $query = "SELECT ROW_NUMBER() OVER(ORDER BY id ASC) as `row`,`id`, `accOwner_id`, `productName`, `category`, `product_img`, `description`, `transactionType`, `price`
         FROM `products` WHERE `category` = 'CROP'";
        content($query);

                ?>
        
                   
                    </div>
                </div>

            </div>
            </div>



          </div>

        
      </div>
    </div>

    <!-- LEFT -->
   
  </div>

  <nav aria-label="page-navigation">
    <ul class="pagination pagination-lg pagination-circle justify-content-center mb-5" style="margin-top: 10%;">
    
      <li class="page-item active" aria-current="page">
        <span class="page-link">
        1
    <span class="visually-hidden">(current)</span>
    </span></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
   
    </ul>
</nav>

<!-- footer start--> 
        <?PHP require "../components/footer.php";?>
<!-- footer end -->

</body>


<style>

  .box-img-hover img{
    width: 300px;
    height: 200px;
    border-radius: 25px;
 
  }
  .products-single{
    background-color: white;
    border-radius: 25px;
    color: black;
   
  }



  .products-single image:hover{
    background-color:rgba(255,255,255,0.5);
  }

  .products-single a{
    color: black;
    text-decoration: none;
  }

  .add-to-cart-btn{
  
    
    color: white;
  }
 /* search */
 .search-product {
     position: relative;
}
 .search-product input[type="text"] {
   
     border: 0;
     box-shadow: none;
     border-radius: 0;
     color: #ffffff;
     height: 55px;
     font-weight: 300;
     font-size: 16px;
     margin-bottom: 15px;
     padding: 0 20px;
     -webkit-transition: all .5s ease;
     -moz-transition: all .5s ease;
     transition: all .5s ease;
     width: 100%;
     outline: 0;
}
 .search-product .form-control::-moz-placeholder {
     color: #ffffff;
     opacity: 1;
}
 .search-product button {
     background:#57744B;
     color: #ffffff;
     font-size: 18px;
     position: absolute;
     right: 0px;
     padding: 12px 15px;
     top: 0;
     line-height: 27px;
     border: none;
     cursor: pointer;
     height: 100%;
     border-radius: 10px;
}
 .search-product button:hover{
     background: rgba(0,0,0,0.5);
}

.cat-list{
  color:white
}
.cat .cat-item {
    background-color:rgba(247,219,106)
}
.cat .cat-item:hover {
    background-color:rgba(247,219,106,0.5);
}
.cat .cat-item.active {
    background-color:rgba(247,219,106,0.5);
    transform: translateY(4px);
}


</style>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="dependencies\jquery-3.6.4.js"></script>
<script src="js\get_address.js"></script>
</html>