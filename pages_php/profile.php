<?php
 session_start();
 if (!isset($_SESSION['logged_in'])) {
    header("Location: ../index.php");
}
 $page_title = 'PROFILE';
//  $acc_in_sess = $_SESSION['acc_id'];
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?></title>

    <link rel="stylesheet" href="../bootstrap-5.2.2/css/bootstrap.min.css"/>
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
  </style>
   <!-- POST STYLE -->
   <style>
     
    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
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
        padding-top: 60px;
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
        display: block;
        width: 80%;
        max-width: 700px;
    }
  
    /* Caption of Modal Image */
  
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }
  
    /* Add Animation */
  
    /* .modal-content,
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
    } */
  
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
        }
    }
  </style>




    <body class=" position-relative" style="   background-color: #E4E4E4;">
        <!-- ================= Appbar ================= -->
        <?php 
      $page_title = "PROFILE";
      include "../components/nav_bar.php"?>
    
        <style>
            /*
         ⚡MAKE SURE TO SUBSCRIBE PROGRAMMER CLOUD⚡
        */
        
        /* @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"); */
        body {
          width: 100%;
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          min-height: 100vh;
          font-family: "Poppins", sans-serif;
        }
        
        ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          display: flex;
          align-items: center;
        }
        
        a {
          text-decoration: none;
        }
        
        .header__wrapper header {
            margin-top: 75px;
          width: 100%;
          background: url("../img/bg/bg10.jpg") no-repeat 50% 20% / cover;
          min-height: calc(90px + 15vw);
        }
        
        .header__wrapper .cols__container .left__col {
          padding: 25px 20px;
          text-align: center;
          max-width: 350px;
          position: relative;
          margin: 0 auto;
        }
        
        .header__wrapper .cols__container .left__col .img__container {
          position: absolute;
          top: -60px;
          left: 50%;
          transform: translatex(-50%);
        }
        .header__wrapper .cols__container .left__col .img__container img {
          width: 120px;
          height: 120px;
          object-fit: cover;
          border-radius: 50%;
          display: block;
          box-shadow: 1px 3px 12px rgba(0, 0, 0, 0.18);
        }
        /* .header__wrapper .cols__container .left__col .img__container span {
          position: absolute;
          background: #2afa6a;
          width: 16px;
          height: 16px;
          border-radius: 50%;
          bottom: 3px;
          right: 11px;
          border: 2px solid #fff;
        } */
         .user-info  {
          margin-top: 60px;
          font-weight: 600;
          font-size: 22px;
          margin-bottom: 20px;
          padding-top: 15px;
          padding: 20px;
          display: block;
        }
        .header__wrapper .cols__container .left__col p {
          font-size: 0.9rem;
          color: #818181;
          margin: 0;
        }
        .header__wrapper .cols__container .left__col .about {
          justify-content: space-between    ;
          position: relative;
          margin: 20px 0;
        }
        .header__wrapper .cols__container .left__col .about li {
          display: flex;
          flex-direction: column;
          color: #818181;
          font-size: 1.5rem;
          
        }
        .header__wrapper .cols__container .left__col .about li span {
            margin-top: 20px;
            color: #1d1d1d;
          font-weight: 600;
        }
        .header__wrapper .cols__container .left__col .about:after {
          position: absolute;
          content: "";
          bottom: -16px;
          display: block;
          background: #cccccc;
          /* height: 1px; */
          width: 100%;
        }
        .header__wrapper .cols__container .content p {
          font-size: 1rem;
          color: #1d1d1d;
          line-height: 1.8em;
        }
        .header__wrapper .cols__container .content ul {
          gap: 30px;
          /* justify-content:block; */
          /* align-items: center; */
          margin-top: 25px;
        }
      
        .header__wrapper .cols__container .content ul i {
          font-size: 1.3rem;
        }
        .header__wrapper .cols__container .right__col nav {
          display: flex;
          align-items: center;
          padding: 30px 0;
          justify-content: space-between;
          flex-direction: column;
        }
        .header__wrapper .cols__container .right__col nav ul {
          display: flex;
          gap: 20px;
          flex-direction: column;
        }
        .header__wrapper .cols__container .right__col nav ul li a {
          text-transform: uppercase;
          color: #818181;
        }
        .header__wrapper .cols__container .right__col nav ul li:nth-child(1) a {
          color: #1d1d1d;
          font-weight: 600;
        }
        .header__wrapper .cols__container .right__col nav button {
          background: #0091ff;
          color: #fff;
          border: none;
          padding: 10px 25px;
          border-radius: 4px;
          cursor: pointer;
          margin-top: 20px;
        }
        .header__wrapper .cols__container .right__col nav button:hover {
          opacity: 0.8;
        }
     
        
        /* Responsiveness */
        
        @media (min-width: 868px) {
          .header__wrapper .cols__container {
            max-width: 1200px;
            margin: 0 auto;
            width: 90%;
            justify-content: space-between;
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 50px;
          }
          .header__wrapper .cols__container .left__col {
            padding: 25px 0px;
          }
          .header__wrapper .cols__container .right__col nav ul {
            flex-direction: row;
            gap: 30px;
          }
         
        }
        
        @media (min-width: 1017px) {
          .header__wrapper .cols__container .left__col {
            margin: 0;
            margin-right: auto;
          }
          .header__wrapper .cols__container .right__col nav {
            flex-direction: row;
          }
          .header__wrapper .cols__container .right__col nav button {
            margin-top: 0;
          }
        }
        
        </style>


        <div class="header__wrapper" style="margin-top: -43px;">
            <header >
               
            </header>
            <div class="cols__container">
            <?php
    $conn = new mysqli('localhost','root','','farmbook_db');


    if($conn->connect_error){
      die('Connection failed : ' . $conn->connect_error);
      }else{
    
    $query = "SELECT `id`, CONCAT(`firstName`,' ',`lastName`) as `fullname`, `farmBusName`, `contactNo`, `email`, `verification`, `accountBio`, `address`, `birthDate`, `userName`, `password`, `dateCreated`, `accountType` FROM `accounts` 
    WHERE `id` = '".$_SESSION['acc_id']."'";;
    
    $result = mysqli_query($conn,$query);
    
    while($rows = mysqli_fetch_assoc($result))
        {
    
       
   
    ?>
      
              <div class="left__col bg-light" style="height: 400px;">
   
                <div class="img__container">
                  <img <?PHP echo $_SESSION["profile_pic"]?> alt="" />
                  <span></span>
                </div>
                <div class="profile-info mt-5 mb-0 " >
                    <h2><?php echo $rows['fullname']?></h2>
                    <!-- <p>UX/UI Designer</p>
                    <p>anna@example.com</p> -->
                </div>
              
                <!-- FARMERS PROFILE -->
                <ul class="about px-5 py-2" >
                  <li class="mx-3"><span>4,073</span>Product Lists</li>
                  <li><span class="text-center">322</span>Friends</li>
                </ul>
      
                <div class="content "style=" text-align: left; margin-left:30px" >
                  <!-- <p>Works asadasdasdasdaddddddddddddddddddddss</p> -->
                  <!-- address -->
                  <p> <i class="fa-solid fa-location-dot"></i> From <span><?php echo $rows['address']?></span></p>
                  <!-- bio -->
                  <p> <i class="fa fa-clipboard-check"></i> Lives in <span>Farmer</span></p>
                  <!-- accountType -->
                  <p ><i class="fa-solid fa-briefcase"></i> Works as <span>Farmer</span></p>
                  <p ><i class="fa fa-bag-heart-fill"></i> Farm Name <span>Strawberry Farm</span></p>
                  
                 <?php
                    }            
                    }
                 ?>
                
                 
                  
                </div>

              </div>

              <style>
                /* .nav_list:hover{
                  background-color: rgb(87,116,75,0.5);
                } */
                
                .edit-profile-btn{
                  width: 100px;
                  height: 30px;
                  border-radius: 10px;
                  background-color:rgb(87,116,75,0.9 );
                }

                .edit-profile-btn:hover{
                  background-color: rgb(87,116,75,0.5);
                }
                .edit-profile-btn:active{
                  background-color: rgb(87,116,75);
                }

                /* .nav .nav-item {
        background-color:rgba(247,219,106)
    } */
    /* .nav .nav-item:hover {
        background-color:rgba(247,219,106,0.5);
    } */
    /* .cat .cat-item {
        background-color:rgba(247,219,106)
    } */
    .cat .cat-item:hover {
      background-color: rgb(87,116,75,0.5);
    }
    .cat .cat-item.active {
      background-color: rgb(87,116,75);
      
    }
                
   /* Products */
   .box-img-hover img{
    width: 200px;
    object-fit: cover;
    height: 150px;
    /* border-radius: 25px; */
    margin-bottom: 20PX;
 
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
   /*  */
              </style>

              <div class="right__col">
   
                <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-auto" style="height: 600px; ">
                        <div class="bg-light d-flex mt-3 justify-content-between rounded" >
                       <!--========== NAV-PILLS ========== -->
                      <ul class="nav nav-pills rounded">
                          <li class="nav-item cat nav_list  rounded cat-nav " role="presentation">
                            <a class="nav-link cat-item text-dark active" id="posts-tab" data-bs-toggle="tab" data-bs-target="#posts" href="#" style="color: black;">POSTS</a>
                          </li>
                          <!-- <li class="nav-item cat nav_list rounded cat-nav  " role="presentation">
                            <a class="nav-link cat-item  text-dark" id="photos-tab" data-bs-toggle="tab" data-bs-target="#photos" href="#" style="color: black;"> PHOTOS</a>
                          </li> -->
                          <li class="nav-item cat nav_list rounded cat-nav  " role="presentation">
                            <a class="nav-link cat-item  text-dark" id="products-tab" data-bs-toggle="tab" data-bs-target="#products" href="#" style="color: black;">PRODUCTS</a>
                          </li>
                      </ul>
    <!--========== NAV-PILLS ========== -->

                      <div class="mt-1 " style="justify-content: right; margin-right: 5px;">
                        <button type="button" class="edit-profile-btn" data-bs-toggle="modal" data-bs-target="#editModal">Edit Profile</button>
                      </div>
                      <!-- Modal -->
                      <div class="modal fade " data-bs-backdrop="static" data-bs-keyboard="false" id="editModal" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                      <h5 class="modal-title" id="staticBackdropLabel">EDIT PROFILE</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body" style="text-align: left;">
                                      <form enctype="multipart/form-data" method="post" action="update_profile.php">
<?php
                                      $conn = new mysqli('localhost','root','','farmbook_db');

if($conn->connect_error){
  die('Connection failed : ' . $conn->connect_error);
 }else{
 $query = "SELECT CONCAT(accounts.firstName, ' ', accounts.lastName) AS `Account Owner`,accounts.id as `account_id`,
 postings.id as `post_id`, caption, CONCAT(posting_medias.media) AS `Medias`,dateTime AS `Date and Time`
 FROM postings INNER JOIN accounts ON postings.acc_id = accounts.id LEFT JOIN posting_medias 
  ON postings.id = posting_medias.posting_id GROUP BY postings.id;";

$result = mysqli_query($conn,$query);

while($rows = mysqli_fetch_assoc($result))
    {
 
      $post_id = $rows['post_id'];
      
    ?>
                                      
                                              <div class="row">
                                                <div class="col-md-6 mb-3">
                                                  <label for="Product Name" class="form-label">Username</label>
                                                  <input type="text" class="form-control" id="product-name" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                  <label for="Product price" class="form-label">Farm</label>
                                                  <input type="number" class="form-control" id="product-price" required>
                                                </div>
                                              </div>

                                              <div class="mb-3">
                                                <label for="address" class="form-label">Address</label>
                                                <input type="text" class="form-control" id="address" required>
                                                <small class="form-text text-muted"></small>
                                              </div>

                                              <div class="mb-3">
                                                <label for="Description" class="form-label">Bio</label>
                                                <input type="text" class="form-control" id="description" required>
                                                <small class="form-text text-muted"></small>
                                              </div>
                                            
                                              <div class="mb-3">
                                                <label for="product-img" class="form-label">Profile</label>
                                                <input type="file" class="form-control" id="product-img" required>
                                              </div>

                                              <?php
    }
  }
                                              
                                              ?>
                                            </form>
                                      </div>
                                      <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-success">Edit Profile</button>
                                      </div>
                                  </div>
                                  </div>
                              </div>
                        </div>
                      
                        <!-- <button style="float: right;">Follow</button>  -->
        
                        <div class="tab-content" id="tabContent" >
                            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab" >
                              
                            <!-- ======  POST ===== -->
                              
                              
                              <div class="mt-4 mb-4" style="height: 530px; overflow-y: auto;">

            <!--========== create post ==========-->
                                <div class="bg-white p-3 mt-2 mx-2 rounded border shadow">
                                  <!-- avatar -->
                                  <div class="d-flex" type="button">
                                    <div class="p-1"> 
                                      <img src="../img/profile pics/profile.jpg" alt="avatar" class="rounded-circle me-2"style="width: 38px; height: 38px; object-fit: cover"/>
                                    </div>
                                    <input type="text"class="form-control rounded-pill border-0 bg-gray pointer" disabled placeholder="What's on your mind?"data-bs-toggle="modal"data-bs-target="#createModal"
                                    />
                                  </div>
                                  <!-- create modal -->
                                  <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true" data-bs-backdrop="false" >
                                    <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content" >
                                        <!-- head -->
                                    
                                        <div class="modal-header align-items-center">
                                          <h5 class="text-dark text-center w-100 m-0"id="exampleModalLabel">
                                            Create Post
                                          </h5>
                                          <button type="button"class="btn-close" data-bs-dismiss="modal"aria-label="Close"></button>
                                        </div>
                                        <!-- body -->
                                        <div class="modal-body my-1 px-3" >
                                          <!-- <div class="my-1 p-1"> -->
                                            <div class="d-flex flex-column">
                                              <!-- name -->
                                              <div class="d-flex align-items-center">
                                                <div class="p-2">
                                                  <img src="../img/profile pics/profile.jpg" alt="from fb" class="rounded-circle" style=" width: 38px; height: 38px; object-fit: cover;"/>
                                                </div>
                                                <div>
                                                  <p class="m-0 fw-bold">Mac Miller</p>
                                                
                                                </div>
                                              </div>
                                              <!-- text -->
                                              <div >
                                                <textarea cols="30"rows="5" class="form-control border-1" placeholder="What's on your mind?" ></textarea>
                                              </div>
                                        
                                              <!-- options -->
                                              <div class=" d-flex justify-content-between border border-1 border-light rounded mt-2 mx-2" style="">
                                                
                                                <style>
                                                
                                                </style>
                    
                                                  <label for="post_img" class="post_img"><i class="fa-solid fa-image" style=" font-size: 20px;"></i> Photo/Video</label>
                                                  <input type="file" class="post_img"id="post_img" name="myfile" style="display: none; ">
                                                
                                                
                                              
                                            
                                              </div>
                                            <!-- </div> -->
                                          </div>
                    
                                          <!-- end -->
                                        </div>
                                        <!-- footer -->
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-primary w-100">
                                            Post
                                          </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <hr />
                                  <!-- actions -->
                                  <!-- image button style -->
                                  <style>
                                  
                                  </style>
                                  <div class="d-flex flex-column flex-lg-row mt-3 justify-start">
                                    <!-- a 1 -->
                                    <div class=" dropdown-item roundedm d-flex align-items-center mx-2" >
                                  
                                        <label for="post_img" class="post_img " ><i class="fa-solid fa-image" style=" font-size: 20px;"></i> Photo/Video </label>
                                        <input type="file" class="post_img"id="post_img" name="myfile" style="display: none; ">
                                  
                                    </div>
                    
                                  </div>
                                </div>
            <!--========== create post ==========-->
<!-- ========== FEED POST ========= -->
                                <!--post 1  -->
                               

<?php

// posts
$conn = new mysqli('localhost','root','','farmbook_db');

if($conn->connect_error){
  die('Connection failed : ' . $conn->connect_error);
 }else{
 $query = "SELECT CONCAT(accounts.firstName, ' ', accounts.lastName) AS `Account Owner`,accounts.id as `account_id`,
 postings.id as `post_id`, caption, CONCAT(posting_medias.media) AS `Medias`,dateTime AS `Date and Time`
 FROM postings INNER JOIN accounts ON postings.acc_id = accounts.id LEFT JOIN posting_medias 
  ON postings.id = posting_medias.posting_id GROUP BY postings.id;";

$result = mysqli_query($conn,$query);

while($rows = mysqli_fetch_assoc($result))
    {

      $post_id = $rows['post_id'];
      
    ?>
  
              <!-- p 1 -->
              <div class="bg-white p-4 rounded shadow mt-3" id= <?php echo $post_id?>>
                <!-- author -->
                <div class="d-flex justify-content-between">
                  <!-- avatar -->
                  <div class="d-flex">
                    <img src="../img/profile pics/profile2.png" alt="avatar" class="rounded-circle me-2"  style="width: 38px; height: 38px; object-fit: cover"/>
                    <div>
                      <p class="m-0 fw-bold"><?php echo $rows['Account Owner']?></p>
                      <span class="text-muted fs-7"><?php echo $rows['Date and Time']?></span>
                    </div>
                  </div>
               
                </div>
                <!-- post content -->
                <div class="mt-3">
                  <!-- content -->
                  <div>
                    <p>
                    <?php echo $rows['caption']?>
                    </p>
                    <div class="row">
                      <div style = "display: flex; flex-wrap: wrap;">

<?PHP
if($rows['Medias'] != NULL){  //posts' media/s

  $conn2 = new mysqli('localhost','root','','farmbook_db');

  if($conn2->connect_error){
    die('Connection failed : ' . $conn->connect_error);
   }else{
   $query2 = "SELECT id,media,posting_id FROM posting_medias WHERE posting_id = '$post_id';";
  
  $result2 = mysqli_query($conn2,$query2);
  
  while($rows2 = mysqli_fetch_assoc($result2)){

   
      

?>
                  
                     
            

<div style="display: flex; flex-direction: column; ">
<img <?php echo "src=data:image/jpeg;base64,".base64_encode($rows2['media']);?> id="<?php echo $rows2['id']?>" alt="post image"
class="img-fluid rounded myImg" style = "aspect-ratio: 50/49; height: 200px;"
onclick = "img_view(this.id)"/>
</div>

<?php
 }
    }
  }
  
              ?>          
                      </div>
                    </div>
               
                  </div>
                  
                    <!-- The Modal -->
                    <div class="modal-container">

                      <div id="modal_img_display" class="modal myModal px-5">
                        <span class="close">×</span>
                        <img class="modal-content " id="modal_img" />
                        <!-- <div id="caption"></div> -->
                    </div>
                    </div>
       
                   <script>
                    // Get the modal
                    var modal = document.getElementById("myModal");
                    // // Get the image and insert it inside the modal - use its "alt" text as a caption
              
                    function img_view(id) {
                       var post_img = document.getElementById(id);
                       console.log(id)
                       var modal = document.getElementById("modal_img_display");
                       var modalImg = document.getElementById("modal_img");
                      //  var captionText = document.getElementById("caption");
                       modal.style.display = "block";
                       modalImg.src = post_img.src;
                      //  captionText.innerHTML = this.alt;
                      var span = document.getElementsByClassName("close")[0];
                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                       modal.style.display = "none";
                    };
                    
                    };
                 </script>
  
                  <!-- likes & comments -->
                  <div class="post__comment mt-3 position-relative">
                 
                    <style>
                      
                         
                    </style>
                    <hr>
                    <!-- comments start-->
                    <div class="accordion" id="accordionExample">
                      <div class="accordion-item border-0">
                      
                        <!-- <hr /> -->
                        <!-- comment & like bar -->
                        <div class="d-flex justify-content-around">
                          <div class=" dropdown-item rounded d-flex justify-content-center align-items-center pointer p-1 ">
                          <?php
                            
                 

                              $conn3 = new mysqli('localhost','root','','farmbook_db');
                              try{
                              if($conn3->connect_error){
                                die('Connection failed : ' . $conn3->connect_error);
                               }else{
                                
                               $query3 = "SELECT `id`,`acc_id`,`posting_id`,`data`,`dateModified` 
                               FROM `posting_interactions` WHERE (`acc_id` = '".$_SESSION['acc_id']."' AND
                                `posting_id` = '$post_id') and `data` = 'LIKE';";
                              
                              $result3 = mysqli_query($conn3,$query3);
                              
                              if($rows3 = mysqli_fetch_assoc($result3)){
                              
                            
                                  echo "<button type='button' class='like-btn' id = 'like_btn_".$post_id."' 
                                  value = 'true'
                                  onclick = 'toggle_like(this.id,this.value,`".$_SESSION['acc_id']."`)'>";
      
                                  echo '<span class="d-flex justify-content-center ">
                                  <i class = "fas fa-thumbs-up mt-1 mx-3" style="color: blue;"></i>
                                  <p class = "m-0" style="color: blue;">Liked</p></span>
                                </button>';
                            
        
                          }else{
                            
                            echo "<button type='button' class='like-btn' id = 'like_btn_".$post_id."' 
                            value = 'false'
                            onclick = 'toggle_like(this.id,this.value,`".$_SESSION['acc_id']."`)'>";

                            echo '<span class="d-flex justify-content-center ">
                            <i class="fas fa-thumbs-up mt-1 mx-3" style="color: black;"></i>
                            <p class="m-0" style="color: black;">Like</p></span>
                          </button>';
                          // }

                          }
                        }
                      }
                      catch(Exception $e){
                        echo $e;
                    
                    }
                            ?>
                        
                          </div>


                          <div class=" dropdown-item rounded d-flex justify-content-center align-items-center pointer p-1 ">
                          <button type="button" class="comment-btn " data-bs-toggle="collapse"  
                          data-bs-target="<?php echo '#comment_section_'.$post_id ?>" aria-expanded="false" 
                            aria-controls="comment_section_"> 
                            <span class="d-flex justify-content-center ">
                              <i class="fa-solid fa-comment mt-1 mx-3"></i>
                              <p class="m-0" >Comment</p>
                            </span></button>
                            
                            
                          </div>
                        </div>
                        <!-- comment expand -->
                        <div id="<?php echo'comment_section_'.$post_id ?>"  
                        class="accordion-collapse collapse" aria-labelledby="headingTwo" 
                        data-bs-parent="#accordionExample">
                          <hr />
                          <div class="accordion-body">
                            <!-- comment 1 -->

                            <?php
                            
                            //comment

                              $conn4 = new mysqli('localhost','root','','farmbook_db');
                              try{
                              if($conn4->connect_error){
                                die('Connection failed : ' . $conn4->connect_error);
                               }else{
                                
                               $query4 = "SELECT p.id,
                               pp.profilePic, CONCAT(a.firstName, ' ', a.lastName) AS `Account Owner`, caption,
                               GROUP_CONCAT(pm.media) AS `Medias`, p.dateTime AS `Date and Time`,
                               COUNT(CASE WHEN pi.data = `LIKE` THEN 1 END) AS `Likes`,
                               COUNT(CASE WHEN pi.data != `LIKE` THEN 1 END) AS `Comments`
                               FROM postings p
                               INNER JOIN accounts a ON p.acc_id = a.id
                               LEFT JOIN posting_medias pm ON p.id = pm.posting_id
                               LEFT JOIN posting_interactions pi ON p.id = pi.posting_id
                               LEFT JOIN profile_pictures pp ON a.id = pp.acc_id
                               WHERE a.id = '".$_SESSION['logged_in']."'";
                              
                              $result4 = mysqli_query($conn4,$query4);
                              
                              while($rows4 = mysqli_fetch_assoc($result4)){
                              
                              ?>
                              <!-- comment real -->
                            <div class="comment d-flex align-items-center p-2" id = "comment_<?php echo $rows4['comment_id']?>">
                              <!-- avatar -->
                              <img <?php echo 'src=data:image/jpeg;base64,'.base64_encode($rows4['profile_pic'])?>
                               alt="avatar" class="rounded-circle me-2" 
                               style="width: 40px;height: 40px;object-fit: cover;"/>
                              <!-- comment text -->
                              <div class="p-3 rounded comment__input w-100">
                                <!-- comment menu of author -->
                                <div class="d-flex justify-content-end">
                                  <!-- icon -->
                                  <i class="fas fa-ellipsis-h text-blue pointer" id="post1CommentMenuButton" 
                                  data-bs-toggle="dropdown"aria-expanded="false"></i>
                                  <!-- menu -->
                                  <ul
                                    class="dropdown-menu border-0 shadow"
                                    aria-labelledby="post1CommentMenuButton"
                                  >
                                   
                                    <!-- <li class="d-flex align-items-center">
                                      <a class=" dropdown-item d-flex justify-content-around align-items-center fs-7 "  href="#" >
                                        Delete Comment
                                      </a>
                                    </li> -->
                                  </ul>
                                </div>
                                <p class="fw-bold m-0"><?php echo $rows4['fullname']?></p>
                                <p class="m-0 fs-7 bg-gray p-2 rounded">
                                  <?php echo $rows4['comment']?>
                                </p>
                              </div>
                            </div>
                            <?php
                            
                              }
                               }
                              }catch(Exception $e){
                                echo $e;
                              }
    
                            ?>
                         
                           
                            <!-- create comment -->
                            <!-- <form class="d-flex my-1"> -->
                              <!-- avatar -->
                           
                          
                     
                          </div> <!-- accordion end-->

                          <div class="input-comment d-flex  align-items-center p-3" style="width: 100%;" id ="write_comment">
                              <div id = "profile_icon">
                                <img <?php echo $profile?> alt=" avatar "class="rounded-circle me-2" 
                                style=" width: 38px;height: 38px;object-fit: cover;"/>
                              </div>
                              <!-- input -->
                              
                                <input type="text" class="form-control border-0 rounded-pill bg-gray comment-write"
                                 placeholder="Write a comment" 
                                 id = "write_comment_<?php echo $post_id?>"
                                 
                                 />


                                 <!-- use this instead of the enter button to send a comment -->
                                <button type="submit" onclick = "submit_comment('<?php echo $post_id?>','<?php echo $_SESSION['acc_id']?>')">send</button>
                              </div>
                        </div>
                      </div>
                    </div>
                    <!-- end -->
                  </div>
                </div>
              </div>
  
<?php

    


    }
  }
?>
<!-- ========== FEED POST ========= -->
                              </div>

                            <!-- ======  POST ===== -->
                             
                            </div>

                            
                              
                            <div class="tab-pane fade" id="products" role="tabpanel" aria-labelledby="products-tab">
                             <div class="mt-4 mb-4" style="height: 530px; overflow-y: auto;">

                               <div class="add-product">

                                <button type="button" class="btn btn-success me-4" data-bs-toggle="modal" data-bs-target="#exampleModal" style="float: right;">
                                Add Product
                                </button>
                                 
                              <!-- Modal -->
                              <div class="modal fade " id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">ADD PRODUCT</h5>
                                      <h5>Account owner Name</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body" style="text-align: left;">
                                      <form enctype="multipart/form-data" method="post" action="../php_func/add_product.php">
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <label for="Product Name" class="form-label">Product name</label>
                                                  <input type="text" class="form-control" id="product-name" name = "product_name"required>
                                                </div>
                                                <div class="col-md-6">
                                                    <select name="category" id="" class="btn btn-md bg-success text-white my-4">
                                                    <option value="">Category</option>
                                                    <option value="vegetables">Vegetable</option>
                                                    <option value="fruits">Fruits</option>
                                                    <option value="crops">Crops</option>
                                                    </select>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-6">
                                                  <label for="Product price" class="form-label">Price</label>
                                                  <input type="number" class="form-control" id="product-price" name = "product_price"required>
                                                  </div>
                                                </div>
                                                <!-- <div class="row"> -->
                                                  <div class="col-md-6">
                                                  <label for="Transaction Type" class="form-label">Transaction Type</label>
                                                  <select name="transaction" id="" class="btn btn-md bg-success text-white my-1">
                                                    <option value="">Transaction Type</option>
                                                    <option value="pickup">For pickup only</option>
                                                    <option value="delivery">For delivery only</option>
                                                    <option value="both">Available for both delivery and pickup</option>
                                                    </select>
                                                  </div>
                                                <!-- </div> -->
                                            
                                              <div class="mb-3">
                                                <label for="Description" class="form-label">Description</label>
                                                <input type="text" class="form-control" id="description" name = "description" required>
                                                <small class="form-text text-muted"></small>
                                              </div>
                                            
                                              <div class="mb-3">
                                                <label for="product-img" class="form-label">Image</label>
                                                <input type="file" class="form-control" id="product-img" name = "product_img"required>
                                              </div>
                                            
                                      </div>
                                      <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-success">Add Product</button>
                                      </div>
                                      </form>
                                  </div>
                                  </div>
                              </div>
                               </div>
                  </div>
                               
                              <div class="row mt-5 mx-1">

                              <?php
    $conn = new mysqli('localhost','root','','farmbook_db');


    if($conn->connect_error){
      die('Connection failed : ' . $conn->connect_error);
      }else{
    
    $query = "SELECT `id`, `accOwner_id`, `productName`, `category`, `product_img`, `description`, `transactionType`, `price` FROM `products` 
    WHERE accOwner_id = '".$_SESSION['acc_id']."'";
    
    $result = mysqli_query($conn,$query);
    
    while($rows = mysqli_fetch_assoc($result))
        {
    
   
    ?>
      
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                                  <div class="products-single fix px-4 py-4">
                                    <a href="../pages_php/product.php?product_id=<?php echo $rows['id']?>">
                                      <div class="box-img-hover text-center">
                                          <!-- <div class="type-lb">
                                              <p class="sale">Sale</p>
                                          </div> -->
                                          <img <?php echo 'src=data:image/jpeg;base64,'.base64_encode($rows['product_img']) ?> class="img-fluid prod-img rounded" alt="Image">
                                          
                                      </div>
                                      <div class="why-text">
                                          <h5><?php echo $rows['productName']?></h5>
                                          <h4>₱<?php echo $rows['price']?>.00</h4>
                                      </div>
                                    </a>
                                   
                                  </div>
                                  </div>
                                  <?php
        }
      }
                                  ?>
                                  
                              
                                
                                
                              
                              </div>
                            </div>
                              
                            
                          
                          
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>

    
</body>

<style>

div.products-single {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
 * {
    box-sizing: border-box;
    }
    body {
        background-color: #ecf0f1;
    }
    .gallery-container {
        display: flex;
        flex-wrap: wrap;
        /* justify-content: space-between; */
        background-color: #fff;
        box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.3);
        width: 100%;
        margin: 0 auto;
        padding: 20px;
        height: 530px;
        overflow-y: auto;
    }
    .gallery-item {
        flex-basis: 32.7%;
        margin-bottom: 6px;
        opacity: .85;
        cursor: pointer;
        height: 50%;
    }
    .gallery-item:hover {
        opacity: 1;
    }
    .gallery-item img {
        width: 100%;
        height: 100%;
        
        object-fit: cover;
    }
    .gallery-content {
        font-size: .8em;
    }

    .lightbox {
        position: fixed;
        display: none;
        background-color: rgba(0, 0, 0, 0.8);
        width: 100%;
        height: 100%;              
        overflow: auto;
        top: 0;
        left: 0;
        margin-top: 80px;
    }
    .lightbox-content {
        position: relative;
        width: 50%;
        height: 70%;
        margin: 5% auto;
    }
    .lightbox-content img {
        border-radius: 7px;
        box-shadow: 0 0 3px 0 rgba(225, 225, 225, .25);
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .lightbox-prev,
    .lightbox-next {
        position: absolute;
        background-color: rgba(0, 0, 0, 0.8);
        color: #fff;
        padding: 7px;
        top: 45%;
        cursor: pointer;
    }
    .lightbox-prev {
        left: 0;
    }
    .lightbox-next {
        right: 0;
    }
    .lightbox-prev:hover,
    .lightbox-next:hover {
        opacity: .8;
    }

    @media (max-width: 767px) {
        .gallery-container {
            width: 100%;
        }
        .gallery-item {
            flex-basis: 49.80%;
            margin-bottom: 3px;
        }
        .lightbox-content {
            width: 80%;
            height: 60%;
            margin: 15% auto;
        }
    }
    @media (max-width: 480px) {
        .gallery-item {
            flex-basis: 100%;
            margin-bottom: 1px;
        }
        .lightbox-content {
            width: 90%;
            margin: 20% auto;
        }
    }
</style>

<script>
    const galleryItem = document.getElementsByClassName("gallery-item");
    const lightBoxContainer = document.createElement("div");
    const lightBoxContent = document.createElement("div");
    const lightBoxImg = document.createElement("img");
    const lightBoxPrev = document.createElement("div");
    const lightBoxNext = document.createElement("div");

    lightBoxContainer.classList.add("lightbox");
    lightBoxContent.classList.add("lightbox-content");
    lightBoxPrev.classList.add("fa", "fa-angle-left", "lightbox-prev");
    lightBoxNext.classList.add("fa", "fa-angle-right", "lightbox-next");

    lightBoxContainer.appendChild(lightBoxContent);
    lightBoxContent.appendChild(lightBoxImg);
    lightBoxContent.appendChild(lightBoxPrev);
    lightBoxContent.appendChild(lightBoxNext);

    document.body.appendChild(lightBoxContainer);

    let index = 1;

    function showLightBox(n) {
        if (n > galleryItem.length) {
            index = 1;
        } else if (n < 1) {
            index = galleryItem.length;
        }
        let imageLocation = galleryItem[index-1].children[0].getAttribute("src");
        lightBoxImg.setAttribute("src", imageLocation);
    }

    function currentImage() {
        lightBoxContainer.style.display = "block";

        let imageIndex = parseInt(this.getAttribute("data-index"));
        showLightBox(index = imageIndex);
    }
    for (let i = 0; i < galleryItem.length; i++) {
        galleryItem[i].addEventListener("click", currentImage);
    }

    function slideImage(n) {
        showLightBox(index += n);
    }
    function prevImage() {
        slideImage(-1);
    }
    function nextImage() {
        slideImage(1);
    }
    lightBoxPrev.addEventListener("click", prevImage);
    lightBoxNext.addEventListener("click", nextImage);

    function closeLightBox() {
        if (this === event.target) {
            lightBoxContainer.style.display = "none";
        }
    }
    lightBoxContainer.addEventListener("click", closeLightBox);
</script>




<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
crossorigin="anonymous"
></script>
<script src="./main.js"></script>

</html>