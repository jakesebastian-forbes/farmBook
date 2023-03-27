<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cabbage Detail</title>
      
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../bootstrap-5.2.2/css/bootstrap.min.css"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href='https://fonts.googleapis.com/css?family=Archivo Black' rel='stylesheet'>
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
      <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
      <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" >

      <!-- <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css"/>
      <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script>
      <link href='https://fonts.googleapis.com/css?family=Archivo Black' rel='stylesheet'> 

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src ="js/vendor/bootstrap.min.js"></script> -->

  
  </head>

  <body>

    <style>
        body{
            overflow-x: hidden !important;
        }
      
    .w-100 {
      height: 100vh;
    }
        .header{
        background-image: linear-gradient(rgba(1,2,2,0.7),rgba(0,1,1,0.4)), url(../img/vegetables/cabbage-1.jpeg);
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
   
   <section class="header">
     
   <?php include "../components/nav_bar.php"?>
             
 <div class="site-section">
    <div class="container">
        <h1 style="text-align: center; color: #fff; font-family:Georgia, 'Times New Roman', Times, serif;
      margin-bottom: 10%; font-size: 70px; margin-left: 2%; margin-top: 10%;">All About Cabbages</h1>
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-5 order-lg-1 ">
          <div class="cabbage-info">
            <img src="../img/vegetables/cabbage-1.jpeg" style="width: 100%; margin-top: 5%; height: 60%;">
        </div>
        </div>
        
        <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
          <h2 class="text-title mb-2" style="color: #fff; font-family: Georgia, 'Times New Roman', Times, serif;
          font-size: 42px; letter-spacing: 1px; margin-bottom: 15%; margin-top:8%;">How cabbages grow?</h2>
          <p class="mb-3" style="text-align: justify; color: #fff;  letter-spacing: 2px; margin-top: 5%;
          font-size: 17px;">Cabbage grows well in deep, well drained soils high in organic matter with an optimum pH range from 6.0 to 6.8. 
          The soil also requires Boron and Molybdenum with moisture level not less than 2.5 cm deficit.
          Cabbage should be planted in a full sun location with fertile and well-draining soils. It is a good practice to incorporate compost and a granular fertilizer into the soil before you plant.
          Cabbages are heavy feeders. Space plants at least 24″ apart.
          </p>
          <h2 class="text-title mb-2" style="color: #fff; font-family: Georgia, 'Times New Roman', Times, serif;
          font-size: 42px; letter-spacing: 1px; margin-bottom: 15%;">What season does cabbage grow?</h2>
          <p class="mb-3" style="text-align: justify; color: #fff;  letter-spacing: 2px; margin-top: 5%;
          font-size: 17px;">Cabbage is a cool weather vegetable, growing best with average temperatures between 60 and 65 degrees F and no higher than 75 degrees F. Prolonged periods (10 days or more) of cold temperatures between 35 and 50 degrees F can lead to premature flowering.</p>
          <h2 class="text-title mb-2" style="color: #fff; font-family: Georgia, 'Times New Roman', Times, serif;
          font-size: 42px; letter-spacing: 1px; margin-bottom: 15%;">Nutrition Facts</h2>
           <p class="mb-3" style="text-align: justify; color: #fff;  letter-spacing: 2px; margin-top: 5%;
           font-size: 17px;">
          Calories: 22, Protein: 1 g, Fiber: 2 g, Vitamin K: 56% of the Daily Value (DV), Vitamin C: 36% of the DV,
          Folate: 10% of the DV, Manganese: 6% of the DV, Vitamin B6: 6% of the DV, Calcium: 3% of the DV,
          Potassium: 3% of the DV,Magnesium: 3% of the DV..</p>
        </div>
      </div>
    </div>
  </div>

           <!--difficulty & lifespan -->
        <div class="site-section">
          <div class="container">
            <div class="row justify-content-between align-items-center">
              <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                <div class="cabbage-info">
                  <img src="../img/vegetables/cabbage-2.jpeg" style="width: 100%;">
              </div>
              </div>

              <div class="col-lg-5 order-lg-1">
                <h2 class="text-title mb-2" style="color: #fff; font-family: Georgia, 'Times New Roman', Times, serif;
                font-size: 45px; letter-spacing: 1px;;">How long does cabbage last?</h2>
                <p class="mb-3" style="text-align: justify; color: #fff;  letter-spacing: 2px; margin-top: 5%;
                font-size: 18px;">
                  Red, green, and white cabbage last about two weeks in the fridge, while savoy cabbage keeps for only about four days. 
                  Cabbage can last up to 5 months, but that requires keeping it in a freezing place (32°F or 0°C) that’s also super humid (95% relative humidity). For that, you’d probably need a root cellar.
                </p>
              </div>
            </div>
          </div>
        </div>

      
           <!-- spoiled info -->
      <div class="site-section">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
              <h2 class="text-title mb-4" style="color: #fff; font-family: Georgia, 'Times New Roman', Times, serif;
              font-size: 40px; letter-spacing: 1px; margin-bottom: 10%;">How to Know if it's Spoiled?</h2>
              <p class="mb-4" style="margin-left: 1%; text-align: justify; color: #fff; font-size: 18px; letter-spacing: 2px;">
                The first sign is discoloration and a mushy texture. Looking over the veggie before eating shows common traits. A whole rotten cabbage, 
                for example, may demonstrate shrinking and shriveling outer leaves Old, rotten cabbage smells like decay or ammonia.  When cabbage spoils, it takes on a slimy feeling. The texture is more squishy and wet.
                 </p>
            </div>
            <div class="col-lg-5 order-lg-1">
              <img src = "/img/vegetables/cabbage-3.jpg" style="width: 100%;  margin-top: 5%;">
            </div>
          </div>
        </div>
      </div>

           <!-- timelapse -->
        <div class="col-lg-12 col-md-12 col-12">
          <div class="row">
            <h1 class="section-title text-center" style="font-size: 50px; text-align: center; color: #fff; margin-top: 5%; 
            margin-right: 1%; margin-left: 1%;"> Cabbage Growth Timelapse</h1>
            <div class="ratio ratio-16x9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/vD3OumfxTe4 " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
            encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="col-sm-4" style="margin-top: 5%; 
            width: 70%; height: 75%; margin-left: 17%;"></iframe>
            </div>
           </div>
        </div>
      </div>
</section>

<style>
        .section-padding {
          padding: 140px 0;
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
      left: 20%;
      margin-top: -1px;
      background: #FDDA0D;
      }
      .section-title::after {
      position: absolute;
      content: "";
      width: 45px;
      height: 2px;
      top: 50%;
      right: 20%;
      margin-top: -1px;
      background: #FDDA0D;
    }

    .section-title.text-start::before,
    .section-title.text-end::after {
        display: none;
    }
    .site-section {
        padding: 2.5em 0; 
      }
        @media (min-width: 768px) {
      .site-section 
      {
        padding: 7em 0; 
      } 
      }
      .site-section.site-section-sm {
        padding: 4em 0; 
      }

      .site-section-heading {
        padding-bottom: 10px;
        position: relative;
        font-size: 2.5rem; 
      }
      .site-section p{
        justify-content: center;
        text-align: center;
      }
        @media (min-width: 768px) {
        .site-section-heading {
        font-size: 3rem; 
        } 
      }
      @media only screen and (min-width: 768px) {
      iframe{
        height: 17em;
        width: 32%;
      }
      .about .section-padding{
        width: 50%;
      }
      } 
      </style>
      
</style>


 <footer class="bg-light text-dark pt-5 pb-3">
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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  </body>
  </html>
