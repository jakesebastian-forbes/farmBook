<?php
 session_start();
 if (!isset($_SESSION['logged_in'])) {
    header("Location: ../index.php");
}
 $page_title = 'profile';
//  $acc_in_sess = $_SESSION['acc_id'];
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
      $page_title = "profile";
      include "../components/appBar.php"?>
    
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
              <div class="left__col bg-light" style="height: 400px;">
                <div class="img__container">
                  <img src="../img/profile pics/profile.jpg" alt="" />
                  <span></span>
                </div>
                <div class="profile-info mt-5 mb-0 " >
                    <h2>Mac Miller</h2>
                    <!-- <p>UX/UI Designer</p>
                    <p>anna@example.com</p> -->
                </div>
              
                <!-- FARMERS PROFILE -->
                <ul class="about px-5 py-2" >
                  <li class="mx-3"><span>4,073</span> Followers</li>
                  <li><span class="text-center">322</span>Friends</li>
                </ul>
      
                <div class="content "style=" text-align: left; margin-left:40px" >
                  <!-- <p>Works asadasdasdasdaddddddddddddddddddddss</p> -->
                  <!-- address -->
                  <p> <i class="fa-solid fa-location-dot"></i> From <span>Nasugbu, Batangas</span></p>
                  <!-- bio -->
                  <p> <i class="fa fa-clipboard-check"></i> Lives in <span>Farmer</span></p>
                  <!-- accountType -->
                  <p ><i class="fa-solid fa-briefcase"></i> Works as <span>Farmer</span></p>
                  <p ><i class="fa fa-bag-heart-fill"></i> Farm Name <span>Strawberry Farm</span></p>
                  
                 
                
                 
                  
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
                          <!-- <ul class="nav  nav-pills rounded">
                        
                            <li class="nav-item nav_list rounded">
                              <a class="nav-link link active" id="posts-tab" data-bs-toggle="tab" data-bs-target="#posts" href="#" style="color: black;">POSTS</a>
                          </li>
                          <li class="nav-item nav_list rounded">
                            <a class="nav-link link" id="photos-tab" data-bs-toggle="tab" data-bs-target="#photos" href="#" style="color: black;">PHOTOS</a>
                          </li>
                        
                      
  
                      </ul> -->

                      <ul class="nav nav-pills rounded">
                            
                        <li class="nav-item cat nav_list  rounded cat-nav " role="presentation">
                          <a class="nav-link cat-item text-dark active" id="posts-tab" data-bs-toggle="tab" data-bs-target="#posts" href="#" style="color: black;">POSTS</a>
                        </li>
                        <li class="nav-item cat nav_list rounded cat-nav  " role="presentation">
                          <a class="nav-link cat-item  text-dark" id="photos-tab" data-bs-toggle="tab" data-bs-target="#photos" href="#" style="color: black;"> PHOTOS</a>
                        </li>
                        <li class="nav-item cat nav_list rounded cat-nav  " role="presentation">
                          <a class="nav-link cat-item  text-dark" id="products-tab" data-bs-toggle="tab" data-bs-target="#products" href="#" style="color: black;">PRODUCTS</a>
                        </li>
                       
                        <!-- text-white link-dark -->
                    
        
                        </ul>


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
                                          <form>
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
                                                <label for="Description" class="form-label">Bio</label>
                                                <input type="text" class="form-control" id="description" required>
                                                <small class="form-text text-muted"></small>
                                              </div>
                                            
                                              <div class="mb-3">
                                                <label for="product-img" class="form-label">Profile</label>
                                                <input type="file" class="form-control" id="product-img" required>
                                              </div>
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
                              
                              
                              
                              <div class="mt-4 mb-4" style="height: 530px; overflow-y: auto;">

                                 <!-- create post -->
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

                                <!--post 1  -->
                                <div class="bg-white p-4 rounded shadow mt-3 mx-2 my-4">
                                  <!-- author -->
                                  <div class="d-flex justify-content-between">
                                    <!-- avatar -->
                                    <div class="d-flex">
                                      <img src="../img/profile pics/profile2.png" alt="avatar" class="rounded-circle me-2"  style="width: 38px; height: 38px; object-fit: cover"/>
                                      <div>
                                        <p class="m-0 fw-bold">Izuku Midoriya</p>
                                        <span class="text-muted fs-7">July 17 at 1:23 pm</span>
                                      </div>
                                    </div>
                                 
                                  </div>
                                  <!-- post content -->
                                  <div class="mt-3">
                                    <!-- content -->
                                    <div>
                                      <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Quae fuga incidunt consequatur tenetur doloremque officia
                                        corrupti provident tempore vitae labore?
                                      </p>
                                      <div class="text-center">
                                        <img src="../img/Vegetables/cabbage-3.jpg" id="myImg" alt="post image"class="img-fluid rounded " style="object-fit: none; object-position: center;   width: 90%;max-height: 280px;" />
                                      </div>
                                 
                                    </div>
                                    
                                      <!-- The Modal -->
                                        <div id="myModal" class="modal myModal px-5">
                                          <span class="close">×</span>
                                          <img class="modal-content " id="img01" />
                                          <!-- <div id="caption"></div> -->
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
                                              <button type="button" class="like-btn "> <span class="d-flex justify-content-center "><i class="fas fa-thumbs-up mt-1 mx-3"></i><p class="m-0" >Like</p></span></button>
                                              
                                              
                                            </div>
                                            <div class=" dropdown-item rounded d-flex justify-content-center align-items-center pointer p-1 ">
                                            <button type="button" class="comment-btn " data-bs-toggle="collapse"  data-bs-target="#collapsePost1" aria-expanded="false"   aria-controls="collapsePost1"> <span class="d-flex justify-content-center "><i class="fa-solid fa-comment mt-1 mx-3"></i><p class="m-0" >Comment</p></span></button>
                                              
                                              
                                            </div>
                                          </div>
                                          <!-- comment expand -->
                                          <div id="collapsePost1"  class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <hr />
                                            <div class="accordion-body">
                                              <!-- comment 1 -->
                                              <div class="comment-1 d-flex align-items-center p-2">
                                                <!-- avatar -->
                                                <img src="../img/profile pics/profile5.jpg" alt="avatar" class="rounded-circle me-2"  style="width: 40px;height: 40px;object-fit: cover;"/>
                                                <!-- comment text -->
                                                <div class="p-3 rounded comment__input w-100">
                                                  <!-- comment menu of author -->
                                                  <div class="d-flex justify-content-end">
                                                    <!-- icon -->
                                                    <i class="fas fa-ellipsis-h text-blue pointer" id="post1CommentMenuButton" data-bs-toggle="dropdown"aria-expanded="false"></i>
                                                    <!-- menu -->
                                                    <ul
                                                      class="dropdown-menu border-0 shadow"
                                                      aria-labelledby="post1CommentMenuButton"
                                                    >
                                                     
                                                      <li class="d-flex align-items-center">
                                                        <a class=" dropdown-item d-flex justify-content-around align-items-center fs-7 "  href="#" >
                                                          Delete Comment
                                                        </a
                                                        >
                                                      </li>
                                                    </ul>
                                                  </div>
                                                  <p class="fw-bold m-0">Paul Walker</p>
                                                  <p class="m-0 fs-7 bg-gray p-2 rounded">
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.
                                                  </p>
                                                </div>
                                              </div>
                                              <!-- comment 2 -->
                                              <div class="comment-1 d-flex align-items-center p-2">
                                                <!-- avatar -->
                                                <img src="../img/profile pics/profile6.jpg" alt="avatar" class="rounded-circle me-2"  style="width: 40px;height: 40px;object-fit: cover;"/>
                                                <!-- comment text -->
                                                <div class="p-3 rounded comment__input w-100">
                                                  <!-- comment menu of author -->
                                                  <div class="d-flex justify-content-end">
                                                    <!-- icon -->
                                                    <i class="fas fa-ellipsis-h text-blue pointer" id="post1CommentMenuButton" data-bs-toggle="dropdown"aria-expanded="false"></i>
                                                    <!-- menu -->
                                                    <ul class="dropdown-menu border-0 shadow" aria-labelledby="post1CommentMenuButton" >
                                                     
                                                      <li class="d-flex align-items-center">
                                                        <a class=" dropdown-item d-flex justify-content-around align-items-center fs-7 "  href="#" >
                                                          Delete Comment
                                                        </a
                                                        >
                                                      </li>
                                                    </ul>
                                                  </div>
                                                  <p class="fw-bold m-0">Peter Parker</p>
                                                  <p class="m-0 fs-7 bg-gray p-2 rounded">
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.
                                                  </p>
                                                </div>
                                               
                                              </div>
                                              <!-- create comment -->
                                              <form class="d-flex my-1">
                                                <!-- avatar -->
                                                <div class="input-comment d-flex  align-items-center p-3" style="width: 100%;">
                                                <div>
                                                  <img src="../img/profile pics/profile.jpg "alt=" avatar "class="rounded-circle me-2" style=" width: 38px;height: 38px;object-fit: cover;"/>
                                                </div>
                                                <!-- input -->
                                                
                                                  <input type="text" class="form-control border-0 rounded-pill bg-gray" placeholder="Write a comment" />
                                                </div>
                                            
                                              </form>
                                              <!-- end -->
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- end -->
                                    </div>
                                  </div>
                                </div>

                                <!-- post 2 -->
                                <div class="bg-white p-4 rounded shadow mt-3 mx-2 my-4">
                                  <!-- author -->
                                  <div class="d-flex justify-content-between">
                                    <!-- avatar -->
                                    <div class="d-flex">
                                      <img src="../img/profile pics/profile3.jpg" alt="avatar" class="rounded-circle me-2"  style="width: 38px; height: 38px; object-fit: cover"/>
                                      <div>
                                        <p class="m-0 fw-bold">Fank Ocean</p>
                                        <span class="text-muted fs-7">July 16 at 2:25 pm</span>
                                      </div>
                                    </div>
                                 
                                  </div>
                                  <!-- post content -->
                                  <div class="mt-3">
                                    <!-- content -->
                                    <div>
                                      <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Quae fuga incidunt consequatur tenetur doloremque officia
                                        corrupti provident tempore vitae labore?
                                      </p>
                                      <div class="text-center d-flex gap-2"> 
                                        <img src="../img/Vegetables/cabbage-3.jpg" id="myImg" alt="post image"class="img-fluid rounded " style="object-fit: none; object-position: center;   width: 50%;max-height: 230px;" />
                                        <img src="../img/Vegetables/onions-3.jpg" id="myImg" alt="post image"class="img-fluid rounded " style="object-fit: none; object-position: center;   width: 50%;max-height: 230px;" />
                                      </div>
                                 
                                    </div>
                                    
                                      <!-- The Modal -->
                                        <div id="myModal" class="modal myModal px-5">
                                          <span class="close">×</span>
                                          <img class="modal-content " id="img01" />
                                          <!-- <div id="caption"></div> -->
                                      </div>
                    
                                    <!-- likes & comments -->
                                    <div class="post__comment mt-3 position-relative">
                     
                                      <hr>
                                      <!-- comments start-->
                                      <div class="accordion" id="accordionExample">
                                        <div class="accordion-item border-0">
                                        
                                          <!-- <hr /> -->
                                          <!-- comment & like bar -->
                                          <div class="d-flex justify-content-around">
                                            <div class=" dropdown-item rounded d-flex justify-content-center align-items-center pointer p-1 ">
                                              <button type="button" class="like-btn "> <span class="d-flex justify-content-center "><i class="fas fa-thumbs-up mt-1 mx-3"></i><p class="m-0" >Like</p></span></button>
                                              
                                              
                                            </div>
                                            <div class=" dropdown-item rounded d-flex justify-content-center align-items-center pointer p-1 ">
                                            <button type="button" class="like-btn " data-bs-toggle="collapse"  data-bs-target="#collapsePost2" aria-expanded="false"   aria-controls="collapsePost2"> <span class="d-flex justify-content-center "><i class="fa-solid fa-comment mt-1 mx-3"></i><p class="m-0" >Comment</p></span></button>
                                              
                                              
                                            </div>
                                          </div>
                                          <!-- comment expand -->
                                          <div id="collapsePost2"  class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <hr />
                                            <div class="accordion-body">
                                              <!-- comment 1 -->
                                              <div class="comment-1 d-flex align-items-center p-2">
                                                <!-- avatar -->
                                                <img src="../img/profile pics/profile5.jpg" alt="avatar" class="rounded-circle me-2"  style="width: 40px;height: 40px;object-fit: cover;"/>
                                                <!-- comment text -->
                                                <div class="p-3 rounded comment__input w-100">
                                                  <!-- comment menu of author -->
                                                  <div class="d-flex justify-content-end">
                                                    <!-- icon -->
                                                    <i class="fas fa-ellipsis-h text-blue pointer" id="post1CommentMenuButton" data-bs-toggle="dropdown"aria-expanded="false"></i>
                                                    <!-- menu -->
                                                    <ul
                                                      class="dropdown-menu border-0 shadow"
                                                      aria-labelledby="post1CommentMenuButton"
                                                    >
                                                     
                                                      <li class="d-flex align-items-center">
                                                        <a class=" dropdown-item d-flex justify-content-around align-items-center fs-7 "  href="#" >
                                                          Delete Comment
                                                        </a
                                                        >
                                                      </li>
                                                    </ul>
                                                  </div>
                                                  <p class="fw-bold m-0">Paul Walker</p>
                                                  <p class="m-0 fs-7 bg-gray p-2 rounded">
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.
                                                  </p>
                                                </div>
                                              </div>
                                              <!-- comment 2 -->
                                              <div class="comment-1 d-flex align-items-center p-2">
                                                <!-- avatar -->
                                                <img src="../img/profile pics/profile6.jpg" alt="avatar" class="rounded-circle me-2"  style="width: 40px;height: 40px;object-fit: cover;"/>
                                                <!-- comment text -->
                                                <div class="p-3 rounded comment__input w-100">
                                                  <!-- comment menu of author -->
                                                  <div class="d-flex justify-content-end">
                                                    <!-- icon -->
                                                    <i class="fas fa-ellipsis-h text-blue pointer" id="post1CommentMenuButton" data-bs-toggle="dropdown"aria-expanded="false"></i>
                                                    <!-- menu -->
                                                    <ul class="dropdown-menu border-0 shadow" aria-labelledby="post1CommentMenuButton" >
                                                     
                                                      <li class="d-flex align-items-center">
                                                        <a class=" dropdown-item d-flex justify-content-around align-items-center fs-7 "  href="#" >
                                                          Delete Comment
                                                        </a
                                                        >
                                                      </li>
                                                    </ul>
                                                  </div>
                                                  <p class="fw-bold m-0">Peter Parker</p>
                                                  <p class="m-0 fs-7 bg-gray p-2 rounded">
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.
                                                  </p>
                                                </div>
                                               
                                              </div>
                                              <!-- create comment -->
                                              <form class="d-flex my-1">
                                                <!-- avatar -->
                                                <div class="input-comment d-flex  align-items-center p-3" style="width: 100%;">
                                                <div>
                                                  <img src="../img/profile pics/profile.jpg "alt=" avatar "class="rounded-circle me-2" style=" width: 38px;height: 38px;object-fit: cover;"/>
                                                </div>
                                                <!-- input -->
                                                
                                                  <input type="text" class="form-control border-0 rounded-pill bg-gray" placeholder="Write a comment" />
                                                </div>
                                            
                                              </form>
                                              <!-- end -->
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- end -->
                                    </div>
                                  </div>
                                </div>

                                 <!-- post 3 -->
                                <div class="bg-white p-4 rounded shadow mt-3">
                                  <!-- author -->
                                  <div class="d-flex justify-content-between">
                                    <!-- avatar -->
                                    <div class="d-flex">
                                      <img src="../img/profile pics/profile3.jpg" alt="avatar" class="rounded-circle me-2"  style="width: 38px; height: 38px; object-fit: cover"/>
                                      <div>
                                        <p class="m-0 fw-bold">Fank Ocean</p>
                                        <span class="text-muted fs-7">July 16 at 2:25 pm</span>
                                      </div>
                                    </div>
                                 
                                  </div>
                                  <!-- post content -->
                                  <div class="mt-3">
                                    <!-- content -->
                                    <div >
                                      <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Quae fuga incidunt consequatur tenetur doloremque officia
                                        corrupti provident tempore vitae labore?
                                      </p>
                    
                                    
                                      <div class="text-center img-post d-flex gap-2 y-2 justify-content-center"> 
                                        <img src="../img/Vegetables/cabbage-3.jpg" id="myImg" alt="post image"class="img-fluid rounded " style="object-fit: none; object-position: center;   width: 40%;max-height: 150px;" />
                                        <img src="../img/Vegetables/onions-3.jpg" id="myImg" alt="post image"class="img-fluid rounded " style="object-fit: none; object-position: center;   width: 40%;max-height: 150px;" />
                                        </div>
                                        <div class="text-center img-post d-flex gap-2 y-2 mt-2 justify-content-center"> 
                                        <img src="../img/Vegetables/cabbage-3.jpg" id="myImg" alt="post image"class="img-fluid rounded " style="object-fit: none; object-position: center;   width: 40%;max-height: 150px;" />
                                        <img src="../img/Vegetables/onions-3.jpg" id="myImg" alt="post image"class="img-fluid rounded " style="object-fit: none; object-position: center;   width: 40%;max-height: 150px;" />
                                      </div>
                                 
                                    </div>
                                    
                    
                    
                                    <!-- likes & comments -->
                                    <div class="post__comment mt-3 position-relative">
                                   
                                     
                                      <hr>
                                      <!-- comments start-->
                                      <div class="accordion" id="accordionExample">
                                        <div class="accordion-item border-0">
                                        
                                          <!-- <hr /> -->
                                          <!-- comment & like bar -->
                                          <div class="d-flex justify-content-around">
                                            <div class=" dropdown-item rounded d-flex justify-content-center align-items-center pointer p-1 ">
                                              <button type="button" class="like-btn "> <span class="d-flex justify-content-center "><i class="fas fa-thumbs-up mt-1 mx-3"></i><p class="m-0" >Like</p></span></button>
                                              
                                              
                                            </div>
                                            <div class=" dropdown-item rounded d-flex justify-content-center align-items-center pointer p-1 ">
                                            <button type="button" class="like-btn " data-bs-toggle="collapse"  data-bs-target="#collapsePost3" aria-expanded="false"   aria-controls="collapsePost3"> <span class="d-flex justify-content-center "><i class="fa-solid fa-comment mt-1 mx-3"></i><p class="m-0" >Comment</p></span></button>
                                              
                                              
                                            </div>
                                          </div>
                                          <!-- comment expand -->
                                          <div id="collapsePost3"  class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <hr />
                                            <div class="accordion-body">
                                              <!-- comment 1 -->
                                              <div class="comment-1 d-flex align-items-center p-2">
                                                <!-- avatar -->
                                                <img src="../img/profile pics/profile5.jpg" alt="avatar" class="rounded-circle me-2"  style="width: 40px;height: 40px;object-fit: cover;"/>
                                                <!-- comment text -->
                                                <div class="p-3 rounded comment__input w-100">
                                                  <!-- comment menu of author -->
                                                  <div class="d-flex justify-content-end">
                                                    <!-- icon -->
                                                    <i class="fas fa-ellipsis-h text-blue pointer" id="post1CommentMenuButton" data-bs-toggle="dropdown"aria-expanded="false"></i>
                                                    <!-- menu -->
                                                    <ul
                                                      class="dropdown-menu border-0 shadow"
                                                      aria-labelledby="post1CommentMenuButton"
                                                    >
                                                     
                                                      <li class="d-flex align-items-center">
                                                        <a class=" dropdown-item d-flex justify-content-around align-items-center fs-7 "  href="#" >
                                                          Delete Comment
                                                        </a
                                                        >
                                                      </li>
                                                    </ul>
                                                  </div>
                                                  <p class="fw-bold m-0">Paul Walker</p>
                                                  <p class="m-0 fs-7 bg-gray p-2 rounded">
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.
                                                  </p>
                                                </div>
                                              </div>
                                              <!-- comment 2 -->
                                              <div class="comment-1 d-flex align-items-center p-2">
                                                <!-- avatar -->
                                                <img src="../img/profile pics/profile6.jpg" alt="avatar" class="rounded-circle me-2"  style="width: 40px;height: 40px;object-fit: cover;"/>
                                                <!-- comment text -->
                                                <div class="p-3 rounded comment__input w-100">
                                                  <!-- comment menu of author -->
                                                  <div class="d-flex justify-content-end">
                                                    <!-- icon -->
                                                    <i class="fas fa-ellipsis-h text-blue pointer" id="post1CommentMenuButton" data-bs-toggle="dropdown"aria-expanded="false"></i>
                                                    <!-- menu -->
                                                    <ul class="dropdown-menu border-0 shadow" aria-labelledby="post1CommentMenuButton" >
                                                     
                                                      <li class="d-flex align-items-center">
                                                        <a class=" dropdown-item d-flex justify-content-around align-items-center fs-7 "  href="#" >
                                                          Delete Comment
                                                        </a
                                                        >
                                                      </li>
                                                    </ul>
                                                  </div>
                                                  <p class="fw-bold m-0">Peter Parker</p>
                                                  <p class="m-0 fs-7 bg-gray p-2 rounded">
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.
                                                  </p>
                                                </div>
                                               
                                              </div>
                                              <!-- create comment -->
                                              <form class="d-flex my-1">
                                                <!-- avatar -->
                                                <div class="input-comment d-flex  align-items-center p-3" style="width: 100%;">
                                                <div>
                                                  <img src="../img/profile pics/profile.jpg "alt=" avatar "class="rounded-circle me-2" style=" width: 38px;height: 38px;object-fit: cover;"/>
                                                </div>
                                                <!-- input -->
                                                
                                                  <input type="text" class="form-control border-0 rounded-pill bg-gray" placeholder="Write a comment" />
                                                </div>
                                            
                                              </form>
                                              <!-- end -->
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- end -->
                                    </div>
                                  </div>
                                </div>
                                
                              </div>
                             
                            </div>

                            <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="photos-tab">
                              <!-- <div class="mt-4 bg-light px-2  rounded">
                                <h1>PHOTOS</h1>
                              </div> -->
                              <div class="gallery-container mt-4 mb-4 rounded" >
                               
                               
                                <div class="gallery-item col-4 me-1"data-index="1">
                                  <img src="../img/fruits/fruit-banana.jpg" alt="">
                                </div>
                                <div class="gallery-item col-4 me-1"data-index="1">
                                  <img src="../img/fruits/apple-1.jpeg" alt="">
                                </div>
                                <div class="gallery-item col-4 me-1"data-index="1">
                                  <img src="../img/fruits/dragonfruit-1.jpeg" alt="">
                                </div>
                                <div class="gallery-item col-4 me-1"data-index="1">
                                  <img src="../img/fruits/fruit-banana.jpg" alt="">
                                </div>
                                <div class="gallery-item col-4 me-1"data-index="1">
                                  <img src="../img/fruits/apple-1.jpeg" alt="">
                                </div>
                                <div class="gallery-item col-4 me-1"data-index="1">
                                  <img src="../img/fruits/dragonfruit-1.jpeg" alt="">
                                </div>
                                <div class="gallery-item col-4 me-1"data-index="1">
                                  <img src="../img/fruits/fruit-banana.jpg" alt="">
                                </div>
                                <div class="gallery-item col-4 me-1"data-index="1">
                                  <img src="../img/fruits/apple-1.jpeg" alt="">
                                </div>
                                <div class="gallery-item col-4 me-1"data-index="1">
                                  <img src="../img/fruits/dragonfruit-1.jpeg" alt="">
                                </div>
                                <div class="gallery-item col-4 me-1"data-index="1">
                                  <img src="../img/fruits/dragonfruit-1.jpeg" alt="">
                                </div>
                                <div class="gallery-item col-4 me-1"data-index="1">
                                  <img src="../img/fruits/dragonfruit-1.jpeg" alt="">
                                </div>
                                <div class="gallery-item col-4 me-1"data-index="1">
                                  <img src="../img/fruits/dragonfruit-1.jpeg" alt="">
                                </div>
                                
                                
                              
                              </div>
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
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body" style="text-align: left;">
                                          <form>
                                              <div class="row">
                                                <div class="col-md-6 mb-3">
                                                  <label for="Product Name" class="form-label">Product name</label>
                                                  <input type="text" class="form-control" id="product-name" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                  <label for="Product price" class="form-label">Price</label>
                                                  <input type="number" class="form-control" id="product-price" required>
                                                </div>
                                              </div>
                                            
                                              <div class="mb-3">
                                                <label for="Description" class="form-label">Description</label>
                                                <input type="text" class="form-control" id="description" required>
                                                <small class="form-text text-muted"></small>
                                              </div>
                                            
                                              <div class="mb-3">
                                                <label for="product-img" class="form-label">Image</label>
                                                <input type="file" class="form-control" id="product-img" required>
                                              </div>
                                            </form>
                                      </div>
                                      <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-success">Add Product</button>
                                      </div>
                                  </div>
                                  </div>
                              </div>
                               </div>
                              <div class="row mt-5 mx-1">
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                                  <div class="products-single fix px-4 py-4">
                                    <a href="../pages_php/product.php">
                                      <div class="box-img-hover text-center">
                                          <!-- <div class="type-lb">
                                              <p class="sale">Sale</p>
                                          </div> -->
                                          <img src="../img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img rounded" alt="Image">
                                          
                                      </div>
                                      <div class="why-text">
                                          <h4>Lorem ipsum dolor sit amet</h4>
                                          <h5> $9.79</h5>
                                      </div>
                                    </a>
                                   
                                  </div>
                                  
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                                  <div class="products-single fix px-4 py-4">
                                    <a href="/pages_php/product.php">
                                      <div class="box-img-hover text-center">
                                          <!-- <div class="type-lb">
                                              <p class="sale">Sale</p>
                                          </div> -->
                                          <img src="../img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img rounded " alt="Image">
                                          
                                      </div>
                                      <div class="why-text">
                                          <h4>Lorem ipsum dolor sit amet</h4>
                                          <h5> $9.79</h5>
                                      </div>
                                    </a>
                                   
                                  </div>
                                  
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                                  <div class="products-single fix px-4 py-4">
                                    <a href="/pages_php/product.php">
                                      <div class="box-img-hover text-center">
                                          <!-- <div class="type-lb">
                                              <p class="sale">Sale</p>
                                          </div> -->
                                          <img src="../img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img rounded" alt="Image">
                                          
                                      </div>
                                      <div class="why-text">
                                          <h4>Lorem ipsum dolor sit amet</h4>
                                          <h5> $9.79</h5>
                                      </div>
                                    </a>
                                   
                                  </div>
                                  
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                                  <div class="products-single fix px-4 py-4">
                                    <a href="/pages_php/product.php">
                                      <div class="box-img-hover text-center">
                                          <!-- <div class="type-lb">
                                              <p class="sale">Sale</p>
                                          </div> -->
                                          <img src="../img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img rounded" alt="Image">
                                          
                                      </div>
                                      <div class="why-text">
                                          <h4>Lorem ipsum dolor sit amet</h4>
                                          <h5> $9.79</h5>
                                      </div>
                                    </a>
                                   
                                  </div>
                                  
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                              
                                  <div class="products-single fix px-4 py-4">
                                    <a href="/pages_php/product.php">
                                      <div class="box-img-hover text-center">
                                          <!-- <div class="type-lb">
                                              <p class="sale">Sale</p>
                                          </div> -->
                                          <img src="../img/Vegetables/broccoli-3.jpg" class="img-fluid prod-img rounded" alt="Image">
                                          
                                      </div>
                                      <div class="why-text">
                                          <h4>Lorem ipsum dolor sit amet</h4>
                                          <h5> $9.79</h5>
                                      </div>
                                    </a>
                                   
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
          </div>

    
</body>

<style>
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