<?php
$page_title = 'marketplace'

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
          <div class="carousel-item active" style="background-image: linear-gradient(rgba(1,2,2,0.5),rgba(0,1,1,0.4)), url(/img/bg/bg10.jpg);  background-size:cover;height: 400px; background-repeat: no-repeat; ; ">  
            
            <div class="carousel-caption h-50">
                <h1 class="display-4">FarmBook Marketplace</h1>
             
            </div> 
          </div>
          <div class="carousel-item" style="background-image:linear-gradient(rgba(1,2,2,0.5),rgba(0,1,1,0.4)), url(/img/bg/bg12.jpg);  background-size:cover ;height: 400px; background-repeat: no-repeat;">     
            <div class="carousel-caption h-50">
                <h1 class="display-4">FarmBook Marketplace</h1>
            </div>
          </div>
          <div class="carousel-item" style="background-image:  url(/img/bg/bg13.jpeg);   background-size:cover ;height: 400px; background-repeat: no-repeat;">
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
                <div class="search-product ">
                    <form action="#">
                        <input class="form-control rounded" placeholder="Search here..." type="text">
                        <button type="submit"> <i class="fa fa-search rounded"></i> </button>
                    </form>
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
                      <a class="nav-link cat-item  text-dark" id="cat-crop-tab" data-bs-toggle="tab" data-bs-target="#cat-crop" href="#" style="color: black;"><i class="fa-solid fa-wheat"></i>CROPS</a>
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
               
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                        <div class="products-single fix px-4 py-4">
                          <a href="/pages/single-product.html">
                            <div class="box-img-hover">
                                <!-- <div class="type-lb">
                                    <p class="sale">Sale</p>
                                </div> -->
                                <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                                
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                          </a>
                          <div class="mask-icon justify-content-end d-flex gap-2">
                                          
                            <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                            <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                        </div>
                        </div>
                        
                      </div>
  
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                                
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/crops/crop-corn.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                        </a>
                        <div class="mask-icon justify-content-end d-flex gap-2">
                                        
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
  
                      </div>
                      
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                        
                        <div class="products-single fix px-4 py-4">
                            <a href="/pages/single-product.html">
                            <div class="box-img-hover">
                                <!-- <div class="type-lb">
                                    <p class="sale">Sale</p>
                                </div> -->
                                <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                                
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                          </a>
                          <div class="mask-icon justify-content-end d-flex gap-2">
                                          
                            <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                            <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                        </div>
                        </div>
                        
                      </div>
  
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                                
                          <div class="products-single fix px-4 py-4">
                            <a href="/pages/single-product.html">
                              <div class="box-img-hover">
                                  <!-- <div class="type-lb">
                                      <p class="sale">Sale</p>
                                  </div> -->
                                  <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                                  
                              </div>
                              <div class="why-text">
                                  <h4>Lorem ipsum dolor sit amet</h4>
                                  <h5> $9.79</h5>
                              </div>
                            </a>
                            <div class="mask-icon justify-content-end d-flex gap-2">
                                            
                              <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                              <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                          </div>
                          </div>
                          
                        </div>
    
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/crops/crop-corn.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                      </a>
                      <div class="mask-icon justify-content-end d-flex gap-2">
                                      
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
  
                      </div>
                      
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                      
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                          </a>
                          <div class="mask-icon justify-content-end d-flex gap-2">
                                          
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
                      
                      </div>
  
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                          </a>
                          <div class="mask-icon justify-content-end d-flex gap-2">
                                          
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
                      
                      </div>
  
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/crops/crop-corn.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                      </a>
                      <div class="mask-icon justify-content-end d-flex gap-2">
                                      
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
  
                      </div>
                      
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                      
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                          </a>
                          <div class="mask-icon justify-content-end d-flex gap-2">
                                          
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
                      
                      </div>
  
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                          </a>
                          <div class="mask-icon justify-content-end d-flex gap-2">
                                          
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
                      
                      </div>
  
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/crops/crop-corn.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                      </a>
                      <div class="mask-icon justify-content-end d-flex gap-2">
                                      
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
  
                      </div>
                      
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                      
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                          </a>
                          <div class="mask-icon justify-content-end d-flex gap-2">
                                          
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
                      
                      </div>
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
              
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                        <div class="products-single fix px-4 py-4">
                            <a href="/pages/single-product.html">
                            <div class="box-img-hover">
                                <!-- <div class="type-lb">
                                    <p class="sale">Sale</p>
                                </div> -->
                                <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                                
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                          </a>
                          <div class="mask-icon justify-content-end d-flex gap-2">
                                          
                            <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                            <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                        </div>
                        </div>
                        
                      </div>
  
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                                
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/crops/crop-corn.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                        </a>
                        <div class="mask-icon justify-content-end d-flex gap-2">
                                        
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
  
                      </div>
                      
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                        
                        <div class="products-single fix px-4 py-4">
                            <a href="/pages/single-product.html">
                            <div class="box-img-hover">
                                <!-- <div class="type-lb">
                                    <p class="sale">Sale</p>
                                </div> -->
                                <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                                
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                          </a>
                          <div class="mask-icon justify-content-end d-flex gap-2">
                                          
                            <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                            <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                        </div>
                        </div>
                        
                      </div>
  
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                                
                          <div class="products-single fix px-4 py-4">
                            <a href="/pages/single-product.html">
                              <div class="box-img-hover">
                                  <!-- <div class="type-lb">
                                      <p class="sale">Sale</p>
                                  </div> -->
                                  <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                                  
                              </div>
                              <div class="why-text">
                                  <h4>Lorem ipsum dolor sit amet</h4>
                                  <h5> $9.79</h5>
                              </div>
                            </a>
                            <div class="mask-icon justify-content-end d-flex gap-2">
                                            
                              <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                              <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                          </div>
                          </div>
                          
                        </div>
    
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/crops/crop-corn.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                      </a>
                      <div class="mask-icon justify-content-end d-flex gap-2">
                                      
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
  
                      </div>
                      
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                      
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                          </a>
                          <div class="mask-icon justify-content-end d-flex gap-2">
                                          
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
                      
                      </div>
  
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                          </a>
                          <div class="mask-icon justify-content-end d-flex gap-2">
                                          
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
                      
                      </div>
  
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/crops/crop-corn.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                      </a>
                      <div class="mask-icon justify-content-end d-flex gap-2">
                                      
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
  
                      </div>
                      
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                      
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                          </a>
                          <div class="mask-icon justify-content-end d-flex gap-2">
                                          
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
                      
                      </div>
  
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                          </a>
                          <div class="mask-icon justify-content-end d-flex gap-2">
                                          
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
                      
                      </div>
  
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/crops/crop-corn.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                      </a>
                      <div class="mask-icon justify-content-end d-flex gap-2">
                                      
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
  
                      </div>
                      
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                      
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                          </a>
                          <div class="mask-icon justify-content-end d-flex gap-2">
                                          
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
                      
                      </div>
                      
            
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
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                        <div class="products-single fix px-4 py-4">
                            <a href="/pages/single-product.html">
                            <div class="box-img-hover">
                                <!-- <div class="type-lb">
                                    <p class="sale">Sale</p>
                                </div> -->
                                <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                                
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                          </a>
                          <div class="mask-icon justify-content-end d-flex gap-2">
                                          
                            <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                            <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                        </div>
                        </div>
                        
                      </div>
  
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                                
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/crops/crop-corn.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                        </a>
                        <div class="mask-icon justify-content-end d-flex gap-2">
                                        
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
  
                      </div>
                      
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                        
                        <div class="products-single fix px-4 py-4">
                            <a href="/pages/single-product.html">
                            <div class="box-img-hover">
                                <!-- <div class="type-lb">
                                    <p class="sale">Sale</p>
                                </div> -->
                                <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                                
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                          </a>
                          <div class="mask-icon justify-content-end d-flex gap-2">
                                          
                            <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                            <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                        </div>
                        </div>
                        
                      </div>
  
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                                
                          <div class="products-single fix px-4 py-4">
                            <a href="/pages/single-product.html">
                              <div class="box-img-hover">
                                  <!-- <div class="type-lb">
                                      <p class="sale">Sale</p>
                                  </div> -->
                                  <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                                  
                              </div>
                              <div class="why-text">
                                  <h4>Lorem ipsum dolor sit amet</h4>
                                  <h5> $9.79</h5>
                              </div>
                            </a>
                            <div class="mask-icon justify-content-end d-flex gap-2">
                                            
                              <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                              <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                          </div>
                          </div>
                          
                        </div>
    
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/crops/crop-corn.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                      </a>
                      <div class="mask-icon justify-content-end d-flex gap-2">
                                      
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
  
                      </div>
                      
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                      
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                          </a>
                          <div class="mask-icon justify-content-end d-flex gap-2">
                                          
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
                      
                      </div>
  
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                          </a>
                          <div class="mask-icon justify-content-end d-flex gap-2">
                                          
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
                      
                      </div>
  
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/crops/crop-corn.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                      </a>
                      <div class="mask-icon justify-content-end d-flex gap-2">
                                      
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
  
                      </div>
                      
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                      
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                          </a>
                          <div class="mask-icon justify-content-end d-flex gap-2">
                                          
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
                      
                      </div>
  
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                          </a>
                          <div class="mask-icon justify-content-end d-flex gap-2">
                                          
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
                      
                      </div>
  
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/crops/crop-corn.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                      </a>
                      <div class="mask-icon justify-content-end d-flex gap-2">
                                      
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
  
                      </div>
                      
                      <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                      
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                          </a>
                          <div class="mask-icon justify-content-end d-flex gap-2">
                                          
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
                      
                      </div>  
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
              
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                        </a>
                        <div class="mask-icon justify-content-end d-flex gap-2">
                                        
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
                      
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                    <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                        <div class="box-img-hover">
                            <!-- <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div> -->
                            <img src="/img/crops/crop-corn.jpg" class="img-fluid prod-img" alt="Image">
                            
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $9.79</h5>
                        </div>
                      </a>
                      <div class="mask-icon justify-content-end d-flex gap-2">
                                      
                        <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                        <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                    </div>
                    </div>

                    </div>
                    
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                      
                      <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                          <div class="box-img-hover">
                              <!-- <div class="type-lb">
                                  <p class="sale">Sale</p>
                              </div> -->
                              <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                              
                          </div>
                          <div class="why-text">
                              <h4>Lorem ipsum dolor sit amet</h4>
                              <h5> $9.79</h5>
                          </div>
                        </a>
                        <div class="mask-icon justify-content-end d-flex gap-2">
                                        
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                          <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                      </div>
                      </div>
                      
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                        <div class="products-single fix px-4 py-4">
                            <a href="/pages/single-product.html">
                            <div class="box-img-hover">
                                <!-- <div class="type-lb">
                                    <p class="sale">Sale</p>
                                </div> -->
                                <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                                
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                          </a>
                          <div class="mask-icon justify-content-end d-flex gap-2">
                                          
                            <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                            <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                        </div>
                        </div>
                        
                      </div>
  
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                            
                    <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                        <div class="box-img-hover">
                            <!-- <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div> -->
                            <img src="/img/crops/crop-corn.jpg" class="img-fluid prod-img" alt="Image">
                            
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $9.79</h5>
                        </div>
                    </a>
                    <div class="mask-icon justify-content-end d-flex gap-2">
                                    
                        <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                        <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                    </div>
                    </div>

                    </div>
                    
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                    
                    <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                        <div class="box-img-hover">
                            <!-- <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div> -->
                            <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                            
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $9.79</h5>
                        </div>
                        </a>
                        <div class="mask-icon justify-content-end d-flex gap-2">
                                        
                        <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                        <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                    </div>
                    </div>
                    
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                            
                    <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                        <div class="box-img-hover">
                            <!-- <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div> -->
                            <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                            
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $9.79</h5>
                        </div>
                        </a>
                        <div class="mask-icon justify-content-end d-flex gap-2">
                                        
                        <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                        <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                    </div>
                    </div>
                    
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                            
                    <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                        <div class="box-img-hover">
                            <!-- <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div> -->
                            <img src="/img/crops/crop-corn.jpg" class="img-fluid prod-img" alt="Image">
                            
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $9.79</h5>
                        </div>
                    </a>
                    <div class="mask-icon justify-content-end d-flex gap-2">
                                    
                        <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                        <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                    </div>
                    </div>

                    </div>
                    
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                    
                    <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                        <div class="box-img-hover">
                            <!-- <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div> -->
                            <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                            
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $9.79</h5>
                        </div>
                        </a>
                        <div class="mask-icon justify-content-end d-flex gap-2">
                                        
                        <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                        <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                    </div>
                    </div>
                    
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                            
                    <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                        <div class="box-img-hover">
                            <!-- <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div> -->
                            <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                            
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $9.79</h5>
                        </div>
                        </a>
                        <div class="mask-icon justify-content-end d-flex gap-2">
                                        
                        <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                        <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                    </div>
                    </div>
                    
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                            
                    <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                        <div class="box-img-hover">
                            <!-- <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div> -->
                            <img src="/img/crops/crop-corn.jpg" class="img-fluid prod-img" alt="Image">
                            
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $9.79</h5>
                        </div>
                    </a>
                    <div class="mask-icon justify-content-end d-flex gap-2">
                                    
                        <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                        <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                    </div>
                    </div>

                    </div>
                    
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                    
                    <div class="products-single fix px-4 py-4">
                        <a href="/pages/single-product.html">
                        <div class="box-img-hover">
                            <!-- <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div> -->
                            <img src="/img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img" alt="Image">
                            
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $9.79</h5>
                        </div>
                        </a>
                        <div class="mask-icon justify-content-end d-flex gap-2">
                                        
                        <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                        <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                    </div>
                    </div>
                    
                    </div>
        
                   
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


/* ===== left ===== */
/* .cat-nav{
  background-color: #F7DB6A;
} */

/* .cat-nav:hover{
  background-color:rgba(247,219,106,0.5) ;

}
.cat-nav:active{
  background-color:rgba(247,219,106,0.1) ;
  transform: translateY(4px)
} */

.cat-list{
  color:white
}
/* .cat-item { 
            
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: white;
            border: none;
            }

        .cat-item:hover {
            background-color: rgba(255, 255, 255, 0.5);
        }

        .cat-item:active {
            background-color: white;
            transform: translateY(4px);
        }
*/
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