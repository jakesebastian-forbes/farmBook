<?php
session_start();
$page_title = 'index';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Archivo Black' rel='stylesheet'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script>
    <title>Homepage</title>

    <link rel="stylesheet" href="css/index_css.css">

</head>
<body>
  

   <?php include "components/nav_bar.php"?>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="height: 680px;">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" style="background-image: linear-gradient(rgba(1,2,2,0.5),rgba(0,1,1,0.4)), url(img/bg/bg2.jpeg);  background-size:cover;height: 680px; background-repeat: no-repeat; ; ">  
            
            <div class="carousel-caption">
              <h1 class="" >Welcome to <br>FarmBook</h1>
             
            </div>
          
          </div>
          <div class="carousel-item" style="background-image:linear-gradient(rgba(1,2,2,0.5),rgba(0,1,1,0.4)), url(img/bg/bg1.jpeg);  background-size:cover ;height: 680px; background-repeat: no-repeat;">     
            <div class="carousel-caption">
              <h1 class="display-4">Welcome to <br>FarmBook</h1>
            </div>
          </div>
          <div class="carousel-item" style="background-image:  url(img/bg/bg13.jpeg);   background-size:cover ;height: 680px; background-repeat: no-repeat;">
            <div class="carousel-caption">
              <h1 class="display-4">Welcome to <br>FarmBook</h1>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

        <div class="login-div text-center">
  

          <!-- <button class="car-login" data-bs-toggle="modal" data-bs-target="#loginform" id = "d_loginbtn"
          >Login</button> -->
          
          <?php
          if (isset($_SESSION["acc_id"])) {
            // print "session already exists";
           echo '<button class="car-login" id = "d_loginbtn" onclick = "window.location.href = '.'`pages_php/feed.php`'.' ";>Login</button>';
  
        }
        else {
          echo ' <button class="car-login" data-bs-toggle = "modal" data-bs-target="#loginform" id = "d_loginbtn">Login</button>';
  

        }
          ?>

        </div>
      </div>




    <div class="container-xxl py-5">
      <div class="container">
    
          <div class="row g-5 align-items-center">
              <div class="col-lg-6">
                  <!-- <h6 class="section-title text-start text-about text-uppercase" style="font-size: 15px; color: #57744B; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Explore</h6> -->
                  <h6 class="section-title text-center text-secondary text-uppercase" style="
                  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-top: 2%;">Explore</h6>
                  <h1 class="farm-header mb-4"><span class="text-farmbook text-uppercase" style="color: green;">FarmBook</span></h1>
                  <p class="mb-4" style="text-align: justify; font-size: large;">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et
                      lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet. Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.
                        Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
            </div>

              <div class="col-lg-6">
                  <div class="row g-3">
                      <div class="col-6 text-end">
                          <img class="img-fluid rounded w-100" src="img/bg/farmers-img3.jpeg" 
                          style="margin-top: 3%; height: 90%; width: 80%;">
                      </div>
                      <div class="col-6 text-start">
                          <img class="img-fluid rounded w-100" src="img/bg/farmers-img1.jpeg"
                          style="margin-top: 0; height: 130%; width: 88%;">
                      </div>
                      <div class="col-6 text-end">
                          <img class="img-fluid rounded w-50" src="img/bg/farmers-img2.jpeg"
                          style=" height: 65%; width: 100%;">
                      </div>
                      <div class="col-6 text-start">
                          <img class="img-fluid rounded w-75" src="img/bg/farmers-img4.jpeg"
                          style="margin-top: 20%; height: 90%; width: 110%;">
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>

    <style>
    .container-fluid{
     margin-top: 2%;
     background-color: whitesmoke;
      }
     .section-title {
    position: relative;
     display: inline-block;
     }
 .section-title::before {
      position: absolute;
      content: "";
      width: 45px;
     height: 2px;
      top: 50%;
      left: -55px;
     margin-top: -1px;
     background: green;
  }
  .section-title::after {
      position: absolute;
      content: "";
     width: 45px;
     height: 2px;
      top: 50%;
     right: -55px;
     margin-top: -1px;
     background: green;
     }
               
     .section-title.text-start::before,
     .section-title.text-end::after {
         display: none;
     }
     .btn.btn-success{
        background: #afc275;
        border:0px;
        color:#fff;
        box-shadow: 0 0 1px #ccc;
        transform-origin: 50% 50%;
        transition-duration: 0.5s;
        transition-timing-function: ease-out;
        box-shadow:0px 0px 0 100px #228B22 inset;
        transform-origin: 0 0;
     }
     .btn.btn-success:hover {
        color: #000;
        box-shadow:0px 0px 0 0px #8A9A5B inset;
        transform: scale(1);
        }
     
 </style>

<section class="explore">
  <div class="explore-content">
    
</div>
</section>

<section class="about" id="about">
  <!-- <h1 class="heading" style="margin-bottom: 4%;margin-top: 3%;"> <span>  Food</span>Types</h1> -->
  <div class="text-center">
    <h6 class="section-title text-center text-secondary text-uppercase" style="
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-top: 6%;">Food Types</h6>
      <h1 class="mb-5" style="font-size: 50px; font-family:Georgia, 'Times New Roman', Times, serif;">
        Food <span class="text-farmbook" style="color: green;">Types</span></h1>
  </div>
  <div class="foodtypes-gallery">
    <div class="pic veggies">
          <figure class="effect-ming tm-pic-item">
              <img src ="img/bg/bg13.jpeg" alt="Image" class="img-fluid"> 
              <figcaption class="d-flex align-items-center justify-content-center">
                <h2>Fruits & Vegetables</h2>
            </figcaption>                
          </figure>
     </div>
     <div class="pic fruits">
      <figure class="effect-ming tm-pic-item">
          <img src="img/bg/bg15.jpg" alt="Image" class="img-fluid">
          <figcaption class="d-flex align-items-center justify-content-center">
              <h2>Crops</h2>
          </figcaption>                    
      </figure>
  </div>
</div>
 </div>
   </section>


<section class="about" id="about">
  <div class="text-center">
    <h6 class="section-title text-center text-secondary text-uppercase" style="
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-top: 10%;">E-Learning</h6>
      <h1 class="mb-5" style="font-size: 50px; font-family:Georgia, 'Times New Roman', Times, serif;">
        Farmbook <span class="text-farmbook" style="color: green;">E-Learning</span></h1>
  </div>
    
<div class="container">
  <div class="card">
      <div class="img">
              <img src="img/bg/bg18.jpg" alt="">
          </div>
          <div class="content">
              <h1>Tips</h1>
              <p>Tips in Farming</p>
          </div>
      </div>
      <div class="card">
        <div class="img">
          <img src="img/bg/bg17.jpg" alt="">
      </div>
      <div class="content">
          <h1>Basics</h1>
          <p>Fruits, Vegetables, Crops </p>
      </div>
  </div>
  <div class="card">
      <div class="img">
          <img src="img/bg/bg19.jpg" alt="">
      </div>
      <div class="content">
          <h1>Techniques</h1>
          <p>Techniques in Farming</p>
      </div>
  </div>
</div>
</section>

<section class="explore">
  <div class="explore-content">
</div>
</section>
        <!-- yt tutorial start -->
        <div class="container youtube-tutorial" style="background: white;">
          <div class="col-lg-12 order-lg-2 mb-4 mb-lg-0">
          <div class="row">
            <div class="text-center">
              <h6 class="section-title text-center text-secondary text-uppercase">E-Learning</h6>
                <h1 class="mb-5" style="font-size: 50px;">Farming<span class="text-farmbook" style="color: green;"> Videos</span></h1>
            </div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/fRlUhUWS0Hk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
            encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="col-sm-4" style="margin-top: 2%;"></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/h6ly4g5SC2o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
            encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="col-sm-4" style="margin-top: 2%;"></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ZsJVsQe66ko" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
            encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="col-sm-4" style="margin-top: 2%;"></iframe>
          
      </div>
      </div>
      </div>
    
        <style>
          @media only screen and (min-width: 768px) {
        iframe{
          height: 17em;
          width: 32%;
        }
        .container-fluid .youtube-tutorial{
          width: 50%;
        }
        } 
       
        </style>




<style>
  
 .heading{
      text-align: center;
      font-size: 4rem;
      color: #000;
      padding: 20px;
      margin: 2rem 0;
      background: rgb(195, 220, 195);
    }
    .heading span{
      color: rgb(27, 69, 27);
    }
    @media (max-width: 450px){
      html{
        font-size: 50%;
      }
      .heading{
        font-size: 3rem;
      }
    }
  .container{
    margin: 50px auto 0;
    width: 85%;
    height: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}
.card{
    margin: 10px;
    width: 360px;
    height: 390px;
    margin-top: 1%;
    position: relative;
    background-color: beige;
    overflow: hidden;
    margin-bottom: 6%;
}
.card .img{
    width: 100%;
    height: 320px;
}
.card .img img{
    width: 100%;
    height: 100%;
}
.card .content{
    width: 100%;
    height: 80px;
    position: absolute;
    bottom: 0;
    background-color: rgb(23, 133, 111);
    transition: 0.5s;
    padding: 10px;
    box-sizing: border-box;
}
.card .content h1{
    margin-top: 10px;
    letter-spacing: 1px;
    color: white;
    text-align: center;
}
.card .content p{
    text-align: justify;
    color: rgba(255, 255, 255, 0.8);
    font-size: 25px;
    text-align: center;
    margin-top: 1%;
}
.card:hover .content{
    height: 180px;
}

@media(max-width:748px){
    .container{
        justify-content: center;
    }
}
</style>


  <style>
          *{
              margin: 0;
              padding: 0;
              box-sizing: border-box;
              font-family: sans-serif;
          }

    .explore{
        width: 100%;
        height: 30vh;
        margin-top: 6%;
        background-image:linear-gradient(rgba(0,0.1,0.1,0.1),rgba(1,1,0,0.3)), url("img/bg/bg20.jpg");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        background-attachment: fixed;
      }
    
      .explore-content{
        width: 60%;
        padding: 60px;
        color: whitesmoke;
        display: flex;
        align-items: center;
        flex-direction: column;
      }
      .explore-content .line{
        margin-bottom: 50px;
      }
    
      .explore-content h1{
        font-size: 7vmin;
        margin: 50px;
    
      }
      .explore-content p{
        color: rgb (221,221,221);
        font-size: 20px;
      }
    
          input{
              display: none;
          }
          .container{
              width: 100%;
              text-align: center;
          }
          .fruit-header{
              font-weight: normal;
              font-size: 35px;
              position: relative;
              margin: 40px 0;
              margin-bottom: 5%;
          }
          .fruit-header::before{
              content: '';
              position: absolute;
              width: 100px;
              height: 3px;
              background-color: rgb(20, 220, 140);
              bottom: -10px;
              left: 50%;
              transform: translateX(-50%);
              animation: animate 4s linear infinite;
          }
          .foodtypes-gallery{
              width: 80%;
              margin: auto;
              display: grid;
              grid-template-columns: repeat(2, 1fr);
              grid-gap: 50px;
              margin-right: 10%;
              margin-bottom: 3%;
          }
          .pic{
              position: relative;
              height: 200px;
              border-radius: 10px;
              cursor: pointer;
          }
          .pic img{
              width: 100%;
              height: 100%;
              border-radius: 10px;
              object-fit: cover;
          }
          .tm-pic-item {
              position: relative;
              overflow: hidden;
              text-align: center;
              cursor: pointer;
              height: 240px;
              border-radius: 10px;
              box-shadow: 3px 3px 5px lightgray;
          }
          .tm-pic-item img {
              min-height: 100%;
              max-width: 100%;
              opacity: 0.8;
              border-radius: 10px;
              transition: .5s;
          }
          .tm-pic-item figcaption {
              padding: 5em;
              color: #fff;
              text-transform: uppercase;
              font-size: 1.25em;
              -webkit-backface-visibility: hidden;
              backface-visibility: hidden;
          }
          
          .tm-pic-item figcaption::before,
          .tm-pic-item figcaption::after {
              pointer-events: none;
          }
          
          .tm-pic-item figcaption,
          .tm-pic-item figcaption > a {
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
          }
          
          .tm-pic-item figcaption > a {
              z-index: 1000;
              text-indent: 200%;
              white-space: nowrap;
              font-size: 0;
              opacity: 0;
          }
          
          .tm-pic-item h2 {
              word-spacing: -0.15em;
              font-weight: 300;
          }
          
          .tm-pic-item h2,
          .tm-pic-item p {
              margin: 0;
          }
          
          .tm-pic-item p {
              letter-spacing: 1px;
              font-size: 68.5%;
          }
          
          .tm-gallery div.d-block { animation: show .5s ease; }
          
          @keyframes show {
              0% {
                  opacity: 0;
                  transform: scale(0.9);
              }
              100% {
                  opacity: 1;
                  transform: scale(1);
              }
          }
          
          figure.effect-ming {
              background: #030c17;
          }
          
          figure.effect-ming img {
              opacity: 0.9;
              -webkit-transition: opacity 0.35s;
              transition: opacity 0.35s;
          }
          
          figure.effect-ming figcaption::before {
              position: absolute;
              top: 20px;
              right: 20px;
              bottom: 20px;
              left: 20px;
              border: 2px solid #fff;
              box-shadow: 0 0 0 30px rgba(255,255,255,0.2);
              content: '';
              opacity: 0;
              -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
              transition: opacity 0.35s, transform 0.35s;
              -webkit-transform: scale3d(1.4,1.4,1);
              transform: scale3d(1.4,1.4,1);
          }
          
          figure.effect-ming h2 {
              font-size: 1.3em;
              opacity: 0;
              -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
              transition: opacity 0.35s, transform 0.35s;
              -webkit-transform: scale(1.5);
              transform: scale(1.5);
          }
          
          figure.effect-ming:hover figcaption::before,
          figure.effect-ming:hover h2 {
              opacity: 1;
              -webkit-transform: scale3d(1,1,1);
              transform: scale3d(1,1,1);
          }
          
          figure.effect-ming:hover figcaption { background-color: rgba(58,52,42,0); }
          figure.effect-ming:hover img { opacity: 0.4; }
          i {
              font-style: italic;
          }
        </style>




<!-- footer start--> 
    <footer class="bg-light text-dark pt-5 pb-4" style="margin-top: 5%;">
      <div class="container text-center text-md-left">
          <div class="row text-center text-md-left">
                  <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                      <h5 class="text-uppercase mb-4 font-weight-bold text-info" style="text-decoration: none">FarmBook</h5>
                      <hr class="mb-4" style="height: 2px; color: black">
                      <p>Farmbook is an online farmers market where local farmers sell vegetables and fruits online. Browse their products, contact them directly and choose what you want to buy. You can pick-your own or have it delivered right to you. Your healthy lifestyle starts here!


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

  <!-- lightbox -->
  <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>



<script>
  const previewImage = (event) => {
    /**
     * Get the selected files.
     */
    const imageFiles = event.target.files;
    /**
     * Count the number of files selected.
     */
    const imageFilesLength = imageFiles.length;
    /**
     * If at least one image is selected, then proceed to display the preview.
     */
    if (imageFilesLength > 0) {
        /**
         * Get the image path.
         */
        const imageSrc = URL.createObjectURL(imageFiles[0]);
        /**
         * Select the image preview element.
         */
        const imagePreviewElement = document.querySelector("#preview-selected-image");
        /**
         * Assign the path to the image preview element.
         */
        imagePreviewElement.src = imageSrc;
        /**
         * Show the element by changing the display value to "block".
         */
        imagePreviewElement.style.display = "block";
    }
};
</script>



      <div class="modal fade" id="loginform">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close btn-close-black" 
                    data-bs-dismiss="modal" aria-label="Close"></button>
  
                    <div class="myform">
                        <h1 class="text-center">Login Form</h1>
                        <form action ="php_func/login_validation.php" 
                        method="POST" id="login_form">
                            <div class="mb-3 mt-3">
                                <label for="email">Email Address</label>
                                <input name = "login_email"
                                type="email" class="form-control" required>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="email">Password</label>
                                <input name = "login_password"
                                type="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-light mt-3">LOGIN</button>
                           
                        </form>

                        <p>Not a Member? <a href="" data-bs-toggle="modal" data-bs-target="#signUpform">Sign Up</a></p>
                        <p> <a href="" data-bs-toggle="modal" data-bs-target="#forgotform"> Forgot Password?</a></p>
                      
                    </div>
                </div>
              </div>
            </div>
        </div>

        <div class="modal fade" id="signUpform">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close btn-close-black" 
                        data-bs-dismiss="modal" aria-label="Close"></button>
      

    
                        <div class="myform">
                            <h1 class="text-center">Sign-up as</h1>
                            <!-- <form id="signup_form_classes"> -->
                                <p style = "display:none" name = "class" id="class"></p>
                                <div class="signUp_as_list">
                                    <div class="mb-3 mt-3">
                                        <button type="submit" class="btn singnUpAs_btn btn-light mt-3 mx-1 rounded-2 " data-bs-toggle="modal" 
                                        data-bs-target="#signUp_Form" onclick="select_class('Enthusiast')">Enthusiast</button>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <button type="submit" class="btn singnUpAs_btn btn-light mt-3 mx-1 rounded-2 " data-bs-toggle="modal" 
                                        data-bs-target="#signUp_Form" onclick="select_class('Farmer')">Farmer</button>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <button type="submit" class="btn singnUpAs_btn btn-light mt-3 mx-1 rounded-2 " data-bs-toggle="modal" 
                                        data-bs-target="#signUp_Form" onclick="select_class('Vendor')">Vendor</button>
                                    </div>
                                </div>
                              
                            <!-- </form>    -->
                            <p>Already have an account?<a href=""  data-bs-toggle="modal" data-bs-target="#loginform">Login</a></p>
                        </div>
                    </div>
                  </div>
                </div>
            </div>


 

            <div class="modal fade " id="signUp_Form">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close btn-close-black" 
                            data-bs-dismiss="modal" aria-label="Close"></button>
          
                            <div class="myform">
                                <!-- <h1 class="text-center">Farmer</h1> -->

                                 
                                  <div class="mb-1 mt-1 d-block justify-content-between">
                                    <h4>Name</h4>
                                    
                                      <div class="mb-1 mt-1 mx-2">
                                        <label for="" class="FirstName " style="font-size: small;">First Name <i>(Pangalan)</i></label>
                                        <input type="" class="form-control" required id="input_fname">
                                      </div>
                                      <div class="mb-1 mt-1 mx-2">
                                        <label for="" class="Middle_Name " style="font-size: small;">Middle Name<i>(Gitnang Pangalan)</i></label>
                                        <input type="" class="form-control" id="input_mname">
                                      </div>
                                      <div class="mb-1 mt-1 mx-2">
                                        <label for="" class="Last_name" style="font-size: small;">Last Name <i>(Apelyido)</i></label>
                                        <input type="" class="form-control" required id="input_lname">
                                      </div>
                                  </div>
                                  
                                  <div class="mb-1 mt-3 d-block justify-content-between">
                                    <h4>Email and Password</h4>
                                    <div class="mb-1 mt-1 mx-2">
                                      <label for="" class="Last_name" style="font-size: small;">Email</label>
                                      <input type="email" class="form-control" required id="input_email" onkeyup="showHint(this.value)">
                                      <p id= "email_status"></p>
                                    </div>
                                    <div class="mb-1 mt-1 mx-2">
                                      <label for="" class="Last_name" style="font-size: small;">Password</label>
                                      <input type="password" class="form-control" id="input_password">
                                    </div>
                                    <div class="mb-1 mt-1 mx-2">
                                      <label for="email" class="Last_name" style="font-size: small;" >Confirm Password</label>
                                    
                                      <input type="password" class="form-control" id="input_con_password" >
                                      <span id='message'></span>
                                    </div>
                                  </div>
                                  <button type="button" class="btn-light btn_back"  data-bs-toggle="modal" data-bs-target="#signUpform"><i class="fa-sharp fa-solid fa-arrow-left"></i></button>  
                                  <button type="button" class="btn-light btn_next" data-bs-toggle="modal" data-bs-target="#next_signUp_Form" id="btn_next_basic" disabled>
                                    <!-- <i class="fa-sharp fa-solid fa-arrow-right" disabled = "disabled"></i> -->
                                    next
                                  </button>
                                  <p>Already have an account?<a href=""  data-bs-toggle="modal" data-bs-target="#loginform">Login</a> </p> 
      
                             
                            </div>
                        </div>
                      </div>
                    </div>
              </div>

              <div class="modal fade " id="next_signUp_Form">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close btn-close-black" 
                            data-bs-dismiss="modal" aria-label="Close"></button>
          
                            <div class="myform">
                                <!-- <h1 class="text-center">Farmer</h1> -->
                                <form action ="#" id="signup_form_contacts">  
                                <h4>Address and Contact number</h4>
                                <div class="mb-1 mt-1 mx-2">
                                    
                                    <label for="" class="Province" style="font-size: small;">Region<i>(Rehiyon)</i></label>
                                    <select class="select box form-select" 
                                    onchange='select_region();' 
                                    id= "input_region">
                                      <!-- <option selected>Select Province</option> -->
                                      
                                
                                    </select>
                                  </div>
                                <div class="mb-1 mt-1 mx-2">
                                    
                                  <label for="" class="Province" style="font-size: small;">Province<i>(Probinsya)</i></label>
                                  <select class="select box form-select"  
                                  onchange='select_province();' 
                                  id= "input_province">
                                    <!-- <option selected>Select Province</option> -->
                                  
                              
                                  </select>
                                </div>
                           
                                <div class="mb-1 mt-1 mx-2">
                                  <style>
                                  
                                  </style>
                                  <label for="" class="Municipality" style="font-size: small;">Municipality/City <i>(Bayan)</i></label>
                                    
                                    <select class="select box form-select position-relative" 
                                     onchange='select_city();'
                                        id = "input_city" >
                                      <!-- <option selected>Select Municipality / City</option> -->
                                      
                                
                                    </select>
                                </div>
                                
                              </div>
                        
                                <div class="mb-1 mt-1 mx-2">
                                  <label for="" class="Barangay" style="font-size: small;">Barangay</i></label>
                                  <select class="select box form-select position-relative" 
                                  onchange='select_barangay()' 
                                  id = "input_barangay">
                                <!-- <option selected>Select Barangayq</option> -->
                           
                              </select>
                                </div>
                                  <div class="mb-1 mt-1 mx-2">
                                    <label for="" class="Last_name" style="font-size: small;">Contact Number</label>
                                    <input type="" class="form-control" style="margin-right: 5px;" size="30" id="input_contact">
                                  </div>
                                
                                </form>
                                <button type="submit " class="btn-light btn_back"  data-bs-toggle="modal" data-bs-target="#signUp_Form"><i class="fa-sharp fa-solid fa-arrow-left"></i></button>
                                <!-- <button type="submit " class="btn-light btn_next" data-bs-toggle="modal" data-bs-target="#second_signUp_Form"><i class="fa-sharp fa-solid fa-arrow-right"></i></button> -->
                                <!-- <form action= method="post"> -->
                                <button type="submit" class="btn btn-success btn_next mt-3"
                                onclick = "insert_user()">Sign up</button>
                                <!-- </form> -->
                                <p>Already have an account?<a href=""  data-bs-toggle="modal" data-bs-target="#loginform">Login</a> </p> 
                                  
                            </div>
                        </div>
                      </div>
                    </div>
                </div>


                <div class="modal fade" id="forgotform">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close btn-close-black" 
                                data-bs-dismiss="modal" aria-label="Close"></button>
              
                                <div class="myform">
                                    <h1 class="text-center">Forgot Password</h1>
                                    <form action ="#" id="form_reset">
                                      <div class="md-form mt-5">
                                        <label data-error="wrong" data-success="right" for="pwr_email">Your email</label>
                                        <input type="email" id="pwr_email" class="form-control validate">
                                       
                                      </div>
                              
                                      <div class="md-form mb-4">
                                        <button type="submit" class="btn btn-light mt-3" data-bs-toggle="modal" data-bs-target="#resetform">
                                          Request Password Reset</button>
                                          </div>
                                        <p> <a href="" data-bs-toggle="modal" data-bs-target="#loginform">Back to Sign in</a></p>  
                                    </form>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
          
          
                    <div class="modal fade" id="resetform">
                      <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                              <div class="modal-body">
                                  <button type="button" class="btn-close btn-close-black" 
                                  data-bs-dismiss="modal" aria-label="Close"></button>
                
                                  <div class="myform">
                                      <h1 class="text-center">Reset Your Password</h1>
                                      <p>Strong passwords include numbers, letters, and punctuation marks. </p>
                                      <form action ="#" id="form_new_pass">
                                        <div class="md-form mb-2">
                                            <label data-error="wrong" data-success="right" for="pwr_newpass">Enter new password</label>
                                            <input type="email" id="pwr_newpass" class="form-control validate">
                                         
                                            <label data-error="wrong" data-success="right" for="pwr_newpass_confirm">Confirm new password</label>
                                            <input type="email" id="pwr_newpass_confirm" class="form-control validate">
                                        </div>
                                
                                        <div class="md-form mb-1">
                                          <button type="submit" class="btn btn-light mt-3" data-bs-toggle="modal" data-bs-target="#loginform">
                                            Reset Password</button>
                                      </form>
                                      <button type="submit " class="btn-light btn_back"  data-bs-toggle="modal" data-bs-target="#forgotform"><i class="fa-sharp fa-solid fa-arrow-left"></i></button>
                                      <p> <a href="" data-bs-toggle="modal" data-bs-target="#loginform">Back to Sign in</a></p> 
                                  </div>
                              </div>
                            </div>
                          </div>
                      </div>


  



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="dependencies\jquery-3.6.4.js"></script>
<script src="js\get_address.js"></script>
<script src="js\insert_new_user.js"></script>


<script>
//change links
$("#link_home")[0].setAttribute("href","index.php");
$("#link_about")[0].setAttribute("href","pages_php/aboutUs.php");
$("#link_e-learning")[0].setAttribute("href","pages_php/e-learning.php");


var modalId = localStorage.getItem('openModal');
function open_modal(){
console.log('attempting open');


if (modalId != null){
console.log(modalId + "1");
$("#loginform").modal("show");
// localStorage.removeItem('openModal');
}else{

console.log(modalId);
}


}

open_modal();



</script>
</body>
</html>