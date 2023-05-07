<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>About Us</title>
      
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../bootstrap-5.2.2/css/bootstrap.min.css"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href='https://fonts.googleapis.com/css?family=Archivo Black' rel='stylesheet'>
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
      <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
      <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script>

  </head>
  <body>
    <style>
   
    .header{
        background-image: linear-gradient(rgba(1,2,2,0.4),rgba(0,1,1,0.4)), url('../img/vegetables/strawberries-bg.jpeg');
        background-size: cover;
        background-position: center;
        font-family: sans-serif;
        background-repeat: no-repeat;
        position: relative;
        min-height: 60vh;
        background-attachment: fixed;
        width: 100%; 
     }
        .text-box{
        width: 90%;
        color: #000000;
        position:absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        }
        .text-box h2 {
        font-size: 50px;
        padding-bottom: 40px;
        color: #fff;
        margin-right: 70%;
        margin-top: 8%;
        }
</style>

 
   <?php 
   $page_title = "ABOUT US";
   include "../components/nav_bar.php"?>

  <div class="header">
    <div class="text-box">
      <h2> <b><br>About Us</b></h2>
    </div>
  </div>

         <!-- About Start -->
         <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-about text-uppercase" style="font-size: 15px; color: #57744B; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">About Us</h6>
                        <h1 class="farm-header mb-4">Welcome to <span class="text-farmbook text-uppercase" style="color: green;">FarmBook</span></h1>
                        <p class="mb-4" style="text-align: justify;">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et
                             lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet. Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.
                              Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <button class="btn btn-success c" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        style="height: 20%; width: 22%;">
                            Read More
                        </button>
                          
                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">About Us</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, labore reiciendis. Assumenda eos quod animi! Soluta nesciunt inventore dolores excepturi provident, culpa beatae tempora, explicabo corporis quibusdam corrupti. Autem, quaerat. Assumenda quo aliquam vel, nostrum explicabo ipsum dolor, ipsa perferendis porro
                                    doloribus obcaecati placeat natus iste odio est non earum? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, labore reiciendis. Assumenda eos quod animi! Soluta nesciunt inventore dolores excepturi provident, culpa beatae tempora, explicabo corporis quibusdam corrupti. Autem, quaerat. Assumenda quo aliquam vel, nostrum explicabo ipsum dolor, ipsa perferendis 
                                    porro doloribus obcaecati placeat natus iste odio est non earum?
                                </div>
                              </div>
                            </div>
                          </div>
                  </div>

                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100" src="../img/bg/farmers-img3.jpeg" 
                                style="margin-top: 10%; height: 90%; width: 80%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100" src="../img/bg/farmers-img1.jpeg"
                                style="margin-top: 0; height: 130%; width: 88%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50" src="../img/bg/farmers-img2.jpeg"
                                style=" height: 65%; width: 100%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75" src="../img/bg/farmers-img4.jpeg"
                                style="margin-top: 22%; height: 90%; width: 110%;">
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
        <!-- About End -->


        <style>
            #benefits {
              background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.5)), url('../img/bg/bg6.jpeg');
              background-size: cover;
              background-position: center;
              color: #efefef !important;
              background-attachment: fixed;
              padding-top: 40px;
              padding-bottom: 50px;
              
            }
            #benefits h1{
              text-align: center;
              color: #efefef !important;
              padding-bottom: 10px;
            }
            #benefits h1::after{
              content: '';
              background: #efefef;
              display: block;
              height: 3px;
              width: 170px;
              margin: 20px auto 5px;
            }
            .benefits{
              margin-top: 40px;
            }
            .icon{
              font-size: 40px;
              margin: 20px auto;
              padding: 10px;
              height: 80px;
              width: 80px;
              border:  1px solid #fff;
              border-radius: 50%;
            }
            #benefits p{
              font-size: 14px;
              margin-top: 20px;
              color: white;
            }
            .benefits .col-md-3:hover{
              background: seagreen;
              cursor: pointer;
              transition: 0.7s;
            }
            </style>
    

    <section id="benefits" style="margin-top: 5%;">
        <div class="container">
          
          <div class="row benefits">
            <div class="col-md-3 text-center">
              <div class="icon">
                <i class="fa-solid fa-seedling"></i>
              </div>
                <h3>Harvest</h3>
                <p><br>Harvesting is the process of removing your produce (fruits, vegetables and root crops) from the plant when mature, at the time they are ready for immediate consumption, sale or storage.</p>
              </div>
              <div class="col-md-3 text-center">
              <div class="icon">
                <i class="fa-solid fa-plant-wilt"></i>
              </div>
                <h3>Cultivation</h3>
                <p><br>Cultivation is carried out to improve soil physical conditions, to allow improved root growth and therefore tree anchorage, to improve root access to soil nutrients and moisture, and to improve the quality of planting. </p>
              </div>
                <div class="col-md-3 text-center">
              <div class="icon">
                <i class="fa-brands fa-pagelines"></i>
              </div>
                <h3> Protection</h3>
                <p><br>Crop Protection is a general practice of managing, improving and protecting crops from pests and plant diseases using biocontrol agents including herbicides.</p>
              </div>
                <div class="col-md-3 text-center">
              <div class="icon">
                <i class="fa-solid fa-sun-plant-wilt"></i>
              </div>
                <h3>Treatment</h3>
                <p><br>Crop treatment with biochar, however, minimized the toxic effects of Ni, thus increasing the plant productivity.
                  Some of the treatments available are: Microbiocides for irrigation water. Bactericides for soil and crops. Insecticides for crops. </p>
              </div>
            </div>
          </div>
      </section>
  

   <!--YT VIDEO START-->
   <div class="container-fluid" style="background-color: white;">
    <div class="text-center">
      <h6 class="section-title text-center text-secondary text-uppercase" style="
      font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Farming Videos</h6>
        <h1 class="mb-5" style="font-size: 50px; font-family:Georgia, 'Times New Roman', Times, serif;">
          Farming <span class="text-header uppercase">Videos</span></h1>
    </div>

    <div class="container">
          <div class="row" style="margin-top: 5%; margin-left: 1%; text-align: center;">
              <a href="https://www.youtube.com/watch?v=8etNofdG5ss" data-toggle="lightbox"  data-gallery="youtubevideos" 
              class="col-sm-4">
              <img src="../img/bg/yt-1.jpg" class="img-fluid" style="height: 80%; width: 95%;">
          </a>
              <a href="https://www.youtube.com/watch?v=vDv4xHDFRC0" data-toggle="lightbox"  
              class="col-xl-4">
                  <img src="../img/bg/yt-2.jpg" class="img-fluid" style="height: 80%; width: 95%;">
              </a>
              <a href="https://www.youtube.com/watch?v=aVHy6CIkUxc" data-toggle="lightbox" 
              class="col-xl-4">
                  <img src="../img/bg/yt-3.jpg" class="img-fluid" style="height:80%; width: 95%;">
          </div>
      </div>
  </div> 


    <!--YT VIDEO END-->

        <!--Footer Start-->

        <footer class="bg-light text-dark pt-5 pb-4" style="margin-top: 2%;">
            <div class="container text-center text-md-left">
                <div class="row text-center text-md-left">
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h5 class="text-uppercase mb-4 font-weight-bold text-info" style="text-decoration: none">FarmBook</h5>
                            <hr class="mb-4" style="height: 2px; color: black">
                            <p class="text-dark">
                                lorem ipsum dolor sit amet, consetetur adipisicing elit, sed do eiusmod tempor 
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
   <!--Footer End-->

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdjns.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js">
    <!-- lightbox -->
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.7.8/dist/index.bundle.min.js"></script>

<script>

</script>

</body>
</html>