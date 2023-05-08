<?php
 session_start();
 if (!isset($_SESSION['logged_in'])) {
    header("Location: ../index.php");
}
 $page_title = 'friends';
//  $acc_in_sess = $_SESSION['acc_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friendlisy</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css.css"> -->
    <link rel="stylesheet" href="../bootstrap-5.2.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/134428d8b1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/82727f4033.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Archivo Black' rel='stylesheet'>
</head>

<style>
    .nav-menu-btn{
      width: 40px; 
      height: 40px;
        color: #FFDE59; 
        font-size: 25px;   
      }
  
      .nav-menu-btn:active{
        color: rgba(255,222,89,0.5) ;
      }
  
      .nav-menu-btn:hover{
        
        background-color: #889a80;
      }
  
    .messages1:hover{
      background-color: rgb(232, 230, 230);
    }
  
     /* =====================================================  */
     .send_btn{
        background-color: transparent;
        border: none;
      }
      .send_btn:active{
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
          }
    
     /* ======================================================= */
     .side-nav li:hover{
        background-color:#95b687;
      }
      .side-nav li:active{
        background-color:#57744B;
      }
     /* =================================================== */
  
     .friend-sidebar::-webkit-scrollbar{
        width: 0%;
      }
  
     /* =================================================== */
  
     .post_img{
        background-color: transparent;
        border: none;
     }
    .post_img:active{
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
      }
      /* ================================================= */
      .post_img{
        /* background-color: rgb(224, 222, 222); */
        border: none;
        padding: 7px;
        border-radius: 10px;
        text-decoration: none;
        cursor: pointer;
      }
      .post_img:active{
        background-color: rgb(193, 190, 190);
  
      }
      .post_img:hover{
        background-color: rgb(193, 190, 190,0.5);
      }
      /* ================================================== */
  
      .like-btn{
        
        border-radius: 10px;
        border: none;
        background-color:transparent;
        color: black;
        padding: 5px 5px;
        font-size: 20px; /* Set a font size */
        cursor: pointer; /* Mouse pointer on hover */
        color: black;
        width: 100%;  
    }
  
    .like-btn:hover {
        Background-color:rgb(219, 219, 219)
    }
  
    .like-btn:active {
        Background-color:rgb(219, 219, 219,0.5);
        color: blue;
    }
  
    .comment-1:hover{
      Background-color:rgb(219, 219, 219);
      border-radius: 10px;
    }
  
    .comment-btn{
        
        border-radius: 10px;
        border: none;
        background-color:transparent;
        color: black;
        padding: 5px 5px;
        font-size: 20px; /* Set a font size */
        cursor: pointer; /* Mouse pointer on hover */
        color: black;
        width: 100%;
        
        
        
    }
  
    .comment-btn:hover {
        Background-color:rgb(219, 219, 219)
    }
  
  
  
    .comment-btn:active {
        Background-color:rgb(219, 219, 219,0.5);
        color: green;
    }
  
    .input-comment:hover{
      Background-color:rgb(219, 219, 219);
      border-radius: 10px;
    }
  /* =================================== */
  .days_forecast img{
      height: 40px;
      width: 40px;
  }
  .forecast_btn {
      height: 40px;
      width: 200px;
      font-size: 20px;
      text-align: center;
      cursor: pointer;
      outline: none;
      color: black;
      background-color:   #57744B;;
      border: none;
      border-radius: 15px;
      /* box-shadow: 0 5px #999; */
  }
  
  .forecast_btn:hover {
      background-color: rgba(87,116,75, 0.5);
  }
  
  .forecast_btn:active {
      background-color: rgba(87,116,75, 0.5);
      /* box-shadow: 0 5px #666; */
      transform: translateY(4px);
  } 

  /* sidebar */
  .user-info img{
        border-radius: 50px;
        height: 100px;
        width: 100px;
    }
  .cat .cat-item {
        background-color:rgba(87,116,75);
        
    }
    .cat .cat-item:hover {
        background-color:rgba(87,116,75,0.5);
    }
    .cat .cat-item.active {
        background-color:rgba(87,116,75,0.5);
        transform: translateY(4px);
    }

    /* friend */
    .friend a{
        text-decoration: none;
        color: black
    }

    .friend-single a{
        text-decoration: none;
        color: black;
    }
    .friend-single img{
        width: 250px;
        height: 180px;
        object-fit: cover;
    }
  </style>

<body style="background-color: #e4e4e4;">
    
            <!-- ================= Appbar ================= -->
            <?php 
            $page_title = "friends";
            include "../components/nav_bar.php"?>


              <div class="container-fluid mx-5 " style="margin-top: 80px;">
                <div class="row">
                  <nav id="sidebarMenu" class="col-md-3 col-lg-2 position-fixed vh-100 mt-5 sidebar" style="background-color: #e4e4e4">
                    <div class="position-sticky pt-1  mx-1">
                        <style>
                            
                        </style>
                      <div class="user-info text-center">
                        <img src="../img/profile pics/profile.jpg"  class="img-fluid" alt="">
                        <h4>Mac Miller</h4>
                      </div>
                        <ul class="nav nav-pills nav-ul d-block mt-4 py-3 rounded bg-light"     >
                                
                            <li class="nav-item cat nav_list py-1 mx-3 my-2 rounded cat-nav " role="presentation">
                            <a class="nav-link cat-item text-white" id="cat-all-tab" data-bs-toggle="tab" data-bs-target="#cat-all" href="#" style="color: black;"><i class="fa-solid fa-user-group" style="font-size: 20px;"></i> Friends List</a>
                            </li>
                            <li class="nav-item cat nav_list py-1 mx-3 my-2 rounded cat-nav  " role="presentation">
                            <a class="nav-link cat-item  text-white" id="cat-veg-tab" data-bs-toggle="tab" data-bs-target="#cat-veg" href="#" style="color: black;"> <i class="fa-solid fa-user-plus" style="font-size: 20px;"></i> Friend Requests</a>
                            </li>
                        </ul>
                    </div>
                  </nav>
                  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <!-- main content goes here --> <div class="product-categorie-box ">
      <div class="tab-content  mx-3" id="tabContent" >
        <!-- ALL CATEGORY -->
                <div class="tab-pane fade show active" id="cat-all" role="tabpanel" aria-labelledby="cat-all-tab" >
                  <div class="tab-content mx-2" style="overflow-x: hidden;">
                    <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                        <div class="row mt-5 mx-1">
                           
                          <h1 class="ms-3">Friends</h1>
                        
                          <!-- friend -->
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3 ">
                          
                            <div class="friend d-flex fix px-4 py-4 bg-light rounded justify-content-between" >
                                <a href="#" class="d-flex">
                                    <div class="box-img-hover text-center">
                                        <img src="../img/profile pics/profile2.png" class="img-fluid prod-img rounded" alt="Image" style="height: 50px; 
                                        width: 50px;">     
                                    </div>
                                    <h5 class="text-center mt-3 ms-2">Izuku Midoriya</h5>  
                                </a>
                                <div class="dropdown">
                                    <button class="btn rounded " type="button" id="ellipsisDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="appearance: none;">
                                      <i class="bi bi-three-dots"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="ellipsisDropdown">
                                      <li><a class="dropdown-item" href="#">Unfriend</a></li>
                                      <li><a class="dropdown-item" href="#">Block</a></li>
                                     
                                    </ul>
                                  </div>
                            </div>
                        </div>

                         <!-- friend -->
                         <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3 ">
                          
                            <div class="friend d-flex fix px-4 py-4 bg-light rounded justify-content-between">
                                <a href="#" class="d-flex">
                                    <div class="box-img-hover text-center">
                                        <img src="../img/profile pics/profile2.png" class="img-fluid prod-img rounded" alt="Image" style="height: 50px; 
                                        width: 50px;">     
                                    </div>
                                    <h5 class="text-center mt-3 ms-2">Izuku Midoriya</h5>  
                                </a>
                                <div class="dropdown">
                                    <button class="btn rounded " type="button" id="ellipsisDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="appearance: none;">
                                      <i class="bi bi-three-dots"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="ellipsisDropdown">
                                      <li><a class="dropdown-item" href="#">Unfriend</a></li>
                                      <li><a class="dropdown-item" href="#">Block</a></li>
                                     
                                    </ul>
                                  </div>
                            </div>
                        </div>

                         <!-- friend -->
                         <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3 ">
                          
                            <div class="friend d-flex fix px-4 py-4 bg-light rounded justify-content-between">
                                <a href="#" class="d-flex">
                                    <div class="box-img-hover text-center">
                                        <img src="../img/profile pics/profile2.png" class="img-fluid prod-img rounded" alt="Image" style="height: 50px; 
                                        width: 50px;">     
                                    </div>
                                    <h5 class="text-center mt-3 ms-2">Izuku Midoriya</h5>  
                                </a>
                                <div class="dropdown">
                                    <button class="btn rounded " type="button" id="ellipsisDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="appearance: none;">
                                      <i class="bi bi-three-dots"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="ellipsisDropdown">
                                      <li><a class="dropdown-item" href="#">Unfriend</a></li>
                                      <li><a class="dropdown-item" href="#">Block</a></li>
                                     
                                    </ul>
                                  </div>
                            </div>
                        </div>

                        

                       
                    </div>
                
                </div>
                </div>
                </div>
        <!-- VEGETABLES CATEGORY -->
                <div class="tab-pane fade " id="cat-veg" role="tabpanel" aria-labelledby="cat-veg-tab" >
                  <div class="tab-content mx-2" style="overflow-x: hidden;">
                    <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                      
                       <div class="row mt-5 mx-1">
                        <h1>Friend Requests</h1>
                        <!-- friend req -->
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 mb-3 ">
                            <div class="friend-single fix px-4 py-4 bg-light rounded">
                                <!-- <a href="/pages/single-product.html"> -->
                                  <div class="box-img-hover text-center mb-3">
                                      <img src="../img/profile pics/profile2.png" class="img-fluid prod-img rounded" alt="Image">
                                      
                                  </div>
                                  <div class="friend-name">
                                      <h5>Izuku Midoriya</h5> 
                                  </div>
                                </a>
                                  
                               
                                <div class="friend-button ">
                                    <button class="btn friend-action-btn w-100 mb-1 text-white" style="background-color: #57744B;">Confirm</button>
                                    <button class="btn friend-action-btn w-100 btn-danger">Delete</button>
                                </div>
                              </div>
                        </div>
                        <!--  -->

                          <!-- friend req -->
                          <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 mb-3 ">
                            <div class="friend-single fix px-4 py-4 bg-light rounded">
                                <!-- <a href="/pages/single-product.html"> -->
                                  <div class="box-img-hover text-center mb-3">
                                      <img src="../img/profile pics/profile2.png" class="img-fluid prod-img rounded" alt="Image">
                                      
                                  </div>
                                  <div class="friend-name">
                                      <h5>Izuku Midoriya</h5> 
                                  </div>
                                </a>
                                  
                               
                                <div class="friend-button ">
                                    <button class="btn friend-action-btn w-100 mb-1 text-white" style="background-color: #57744B;">Confirm</button>
                                    <button class="btn friend-action-btn w-100 btn-danger">Delete</button>
                                </div>
                              </div>
                        </div>
                        <!--  -->

                          <!-- friend req -->
                          <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 mb-3 ">
                            <div class="friend-single fix px-4 py-4 bg-light rounded">
                                <!-- <a href="/pages/single-product.html"> -->
                                  <div class="box-img-hover text-center mb-3">
                                      <img src="../img/profile pics/profile2.png" class="img-fluid prod-img rounded" alt="Image">
                                      
                                  </div>
                                  <div class="friend-name">
                                      <h5>Izuku Midoriya</h5> 
                                  </div>
                                </a>
                                  
                               
                                <div class="friend-button ">
                                    <button class="btn friend-action-btn w-100 mb-1 text-white" style="background-color: #57744B;">Confirm</button>
                                    <button class="btn friend-action-btn w-100 btn-danger">Delete</button>
                                </div>
                              </div>
                        </div>
                        <!--  -->

                          <!-- friend req -->
                          <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 mb-3 ">
                            <div class="friend-single fix px-4 py-4 bg-light rounded">
                                <!-- <a href="/pages/single-product.html"> -->
                                  <div class="box-img-hover text-center mb-3">
                                      <img src="../img/profile pics/profile2.png" class="img-fluid prod-img rounded" alt="Image">
                                      
                                  </div>
                                  <div class="friend-name">
                                      <h5>Izuku Midoriya</h5> 
                                  </div>
                                </a>
                                  
                               
                                <div class="friend-button ">
                                    <button class="btn friend-action-btn w-100 mb-1 text-white" style="background-color: #57744B;">Confirm</button>
                                    <button class="btn friend-action-btn w-100 btn-danger">Delete</button>
                                </div>
                              </div>
                        </div>
                        <!--  -->

                          <!-- friend req -->
                          <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 mb-3 ">
                            <div class="friend-single fix px-4 py-4 bg-light rounded">
                                <!-- <a href="/pages/single-product.html"> -->
                                  <div class="box-img-hover text-center mb-3">
                                      <img src="../img/profile pics/profile2.png" class="img-fluid prod-img rounded" alt="Image">
                                      
                                  </div>
                                  <div class="friend-name">
                                      <h5>Izuku Midoriya</h5> 
                                  </div>
                                </a>
                                  
                               
                                <div class="friend-button ">
                                    <button class="btn friend-action-btn w-100 mb-1 text-white" style="background-color: #57744B;">Confirm</button>
                                    <button class="btn friend-action-btn w-100 btn-danger">Delete</button>
                                </div>
                              </div>
                        </div>
                        <!--  -->

                          <!-- friend req -->
                          <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 mb-3 ">
                            <div class="friend-single fix px-4 py-4 bg-light rounded">
                                <!-- <a href="/pages/single-product.html"> -->
                                  <div class="box-img-hover text-center mb-3">
                                      <img src="../img/profile pics/profile2.png" class="img-fluid prod-img rounded" alt="Image">
                                      
                                  </div>
                                  <div class="friend-name">
                                      <h5>Izuku Midoriya</h5> 
                                  </div>
                                </a>
                                  
                               
                                <div class="friend-button ">
                                    <button class="btn friend-action-btn w-100 mb-1 text-white" style="background-color: #57744B;">Confirm</button>
                                    <button class="btn friend-action-btn w-100 btn-danger">Delete</button>
                                </div>
                              </div>
                        </div>
                        <!--  -->
                        

                       </div>
                    </div>
        
                </div>
                </div>
        
                </div>
        
        
        
              </div>
                  </main>
                </div>
              </div>
</body>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
crossorigin="anonymous"
></script>
<script src="./main.js"></script>
</html>