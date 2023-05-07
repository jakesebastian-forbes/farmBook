<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>E-Learning</title>
      
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../bootstrap-5.2.2/css/bootstrap.min.css"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
      <link href='https://fonts.googleapis.com/css?family=Archivo Black' rel='stylesheet'>
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
      <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
      <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <style>
      body{
            overflow-x: hidden !important;
            scroll-behavior: smooth;
        }
    
    .w-100 {
      height: 100vh;
    }
      /** carousel **/
      .carousel-item {
        height: 65vh;
      }
      .carousel-caption {
        top: 60px;
        z-index: 2;
      }
      .carousel-caption h5 {
        font-size: 58px;
        text-transform: uppercase;
        letter-spacing: 4px;
        margin-bottom: 60px;
      }
      .carousel-caption p{
        font-size: 30px;
        letter-spacing: 1px;
        font-family: 'Courier New', Courier, monospace;
      }
      .carousel-inner:before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.1);
        z-index: 1;
      }
      .c-item {
        height: 480px;
      }
      .c-img {
        height: 100%;
        object-fit: cover;
        filter: brightness(0.8);
      }
    </style>

     

              <?php 
              $page_title = "E-LEARNING";
              include "../components/nav_bar.php"?>
  
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../img/bg/e-learn-bg1.jpg" class="d-block w-100 c-img" alt="..." >
        <div class="carousel-caption top-0 mt-4">
          <h5 class="display-1 fw-bolder text-capitalize" style="margin-top: 11%; font-size: 48px;">E-Learning</h5>
          <p class="fs-3 mt-5" style="color: #fff;">Planting pattern for plants</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../img/bg/e-learn-bg2.jpg" class="d-block w-100 c-img" alt="..." >
        <div class="carousel-caption top-0 mt-4">
        </div>
      </div>
      <div class="carousel-item">
        <img src="../img/bg/e-learn-bg3.jpg" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption top-0 mt-4">
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
     
    <style>
      * {
      font-family: 'Montserrat', sans-serif;
    }
    .bg-light {
      background-color: transparent !important;
    }
    .carousel-item {
      height: 65vh;
      min-height: 300px;
    }
    .carousel-caption {
      bottom: 220px;
    }
    .carousel-caption h5 {
      font-size: 45px;
      text-transform: uppercase;
      letter-spacing: 2px;
      margin-top: 25px;
    }
    .carousel-caption p {
      width: 60%;
      margin: auto;
      font-size: 18px;
      line-height: 1.9;
    }
    .carousel-caption a {
      text-transform: uppercase;
      text-decoration: none;
      background: darkorange;
      padding: 10px 30px;
      display: inline-block;
      color: #000;
      margin-top: 15px;
    }

    @media only screen and (max-width: 767px) {
      .carousel-caption {
        bottom: 165px;
      }
      .carousel-caption h5 {
        font-size: 17px;
      }
      .carousel-caption a {
        padding: 10px 15px;
        font-size: 15px;
      }
    }
    </style>

      <!-- how to farm section -->
      <div class="site-section-fruits">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
              <div class="ratio ratio-16x9">
                <iframe
                src="https://www.youtube.com/embed/fRlUhUWS0Hk" title="YouTube video" allowfullscreen
              style="margin-top: 4%;"></iframe>
            </div>
            </div>
            <div class="col-lg-5 order-lg-1">
              <h1 class="section-title text-center mb-5" style="font-size: 48px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: 600;
              margin-left: 5%; margin-top: 7%;">How to <span class="text-header uppercase">Farm?</span></h1>
              <p class="mb-4" style="text-align: justify; font-size: 21px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">The first step in farming is to decide what you want to farm.
              Then choose a location and obtain the necessary equipment and supplies. Prepare the land. Once the land is prepared, you can begin planting your crops or raising your livestock.
              Harvest or sell your products and maintain your equipment and land.</p>
            </div>
          </div>
        </div>
      </div>


    <div class="site-section">
      <div class="container-fluid">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 order-lg-1 ">
        <div class="fruits-info">
          <a href="../pages_php/fruitsInterface.php" type="button" class="btn-fruits">
            <h1 style="text-align: center; color: white; font-size: 50px;margin-top: 15%;">Fruits</h1>
          </a>
      </div>
      </div>
      <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
        <a href="../pages_php/vegiesInterface.php"  type="button" class="btn-vegetables">
          <h1 style="text-align: center; color: white; font-size: 45px;margin-top: 15%; margin-left: 1%;">Vegetables</h1>
        </a>
            </div>
          </div>
        </div>
      </div>


      <style>
      .site-section-fruits{
        padding: 1.5em 0;
      }
    .site-section {
        padding: 2.5em 0; 
      }

    .container-fluid {
    background-image:  linear-gradient(rgba(1,1,1,0.1),rgba(0,1,1,0.5)), url(../img/bg/e-learn-bg4.jpeg) ; 
    /* background-color:#C1E1C1;  */
    background-size: cover;
    height: 38rem;
    }
    .basic{
        padding: 0 px 50px;
        margin: 0 auto 5 0px auto;
        justify-content: space-around;
      }
      .btn-fruits{
      color: #000;
      background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)), url(../img/fruits/fruits.jpeg);
      width: 76%;
      height: 35vh; 
      background-repeat: no-repeat;
      background-position: center;
      border-color: white;
      margin-top: 21%;
      border-width: 50px;  
      border-radius: 25px;
      text-decoration: none;
      margin-left: 15%;
      }
      .btn-vegetables{
      color: #000;
      background-image:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)), url(../img/vegetables/vegetables.jpeg);
      width: 76%;
      height: 35vh;
      margin-left: 15%;
      background-repeat: no-repeat;
      background-position: center;
      border-color: white;
      border-width: 50px;
      margin-top: 21%;
      border-radius: 25px;
      text-decoration: none;
      }
      
    .btn-fruits{
      transition: .3s;
    }
    .btn-fruits:hover {
      animation: pulse 1s infinite;
      transition: .3s;
    }
    @keyframes pulse {
      0% {
        transform: scale(1);
      }
      70% {
        transform: scale(.9);
      }
        100% {
        transform: scale(1);
      }
    }
    .btn-vegetables{
      transition: .3s;
    }
    .btn-vegetables:hover {
      animation: pulse 1s infinite;
      transition: .3s;
    }
    @keyframes pulse {
      0% {
        transform: scale(1);
      }
      70% {
        transform: scale(.9);
      }
        100% {
        transform: scale(1);
      }
    }
     .card-title{
     margin-left: 30px;
     font-size: 20px;
    }
      </style>

       <!-- techniques section -->
            <div class="techniques-section">
            <div class="container-techniques">
              <div class="row">
                  <div class="col-lg-12 text-center">
                    <h6 class="section-title text-center text-secondary text-uppercase">Farming Techniques</h6>
                    <h1 class="mb-5" style="font-size: 50px;">Techniques in <span class="text-header uppercase;">Farming</span></h1>
                  </div>
            <div class="col-lg-4 col-sm-6 mb-4">
              <div class="card border-0 shadow rounded-xs pt-5">
                  <div class="card-body"> 
                    <i class="fa-solid fa-leaf fa-2x icon-lg icon-green icon-bg-green icon-bg-circle mb-3"></i><span class="card-title"> Plant a Variety of Crops</span>
                      <p style="text-align: justify; font-size: 17px; margin-top: 3%;">Rotating your plants promotes biodiversity. It also improves your soil quality and 
                        helps control pests. One method for adding diversity is intercropping. This involves growing a variety of 
                        vegetation in one area. Another trick is to rotate crops every three to four years.</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-4">
              <div class="card border-0 shadow rounded-xs pt-5">
                  <div class="card-body"> <i class="fa-solid fa-seedling fa-2x icon-lg icon-yellow icon-bg-yellow icon-bg-circle mb-3"></i><span class="card-title"> Reduce Your Tillage</span>
                      
                      <p style="text-align: justify; font-size: 17px; margin-top: 3%;">Tillage is traditional plowing which involves preparing the soil by digging and 
                        overturning. However, this can cause dirt loss. Instead, try to insert seeds directly into untouched mulch. 
                        The technique can also reduce erosion and improve soil health.</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-4">
              <div class="card border-0 shadow rounded-xs pt-5">
                  <div class="card-body"> <i class="fa-solid fa-plant-wilt fa-2x icon-lg icon-brown icon-bg-brown icon-bg-circle mb-3"></i><span class="card-title">Taking on Agroforestry Practices</span>
                      <!-- <h4 class="mt-4 mb-3">Taking on Agroforestry Practices</h4> -->
                      <p style="text-align: justify; font-size: 17px; margin-top: 3%;">This is one of the best farming techniques using natural resources. It involves 
                        mixing in trees within your farming operations. These trees provide shade and shelter for plants and animals.
                        In addition, they provide extra income by allowing you to sell food or lumber.</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-4">
              <div class="card border-0 shadow rounded-xs pt-5">
                  <div class="card-body"> <i class="fa-brands fa-pagelines fa-2x icon-lg icon-brown icon-bg-brown icon-bg-circle mb-3"></i><span class="card-title">Taking on Agroforestry Practices</span>
                      <!-- <h4 class="mt-4 mb-3">Try Hydroponics and Aquaponics Methods</h4> -->
                      <p style="text-align: justify; font-size: 17px; margin-top: 8%;">These techniques focus on growing plants without soil. Instead, nourish them 
                        with specialized nutrients and water. For hydroponic systems, the vegetation is grown in a mineral 
                        solution with gravel.</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-4">
              <div class="card border-0 shadow rounded-xs pt-5">
                  <div class="card-body"> <i class="fa-solid fa-wheat-awn fa-2x icon-lg icon-yellow icon-bg-yellow icon-bg-circle mb-3"></i><span class="card-title">Incorporate Biodynamic Farming</span>
                      <!-- <h4 class="mt-4 mb-3">Incorporate Biodynamic Farming</h4> -->
                      <p style="text-align: justify; font-size: 17px;margin-top: 2%;"><br>Biodynamic farming takes an ecological and ethical approach to farming. 
                        It improve soil quality with on-site methods. These include things like composting, using animal manure, and cover cropping.</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-4">
              <div class="card border-0 shadow rounded-xs pt-5">
                  <div class="card-body"> <i class="fa-solid fa-leaf fa-2x icon-lg icon-green icon-bg-green icon-bg-circle mb-3"></i><span class="card-title">Apply Permaculture Practices</span>
                      <!-- <h4 class="mt-4 mb-3">Apply Permaculture Practices</h4> -->
                      <p style="text-align: justify; font-size: 17px; margin-top: 2%;";>This is a system that applies principles found in nature to land management. Permaculture intends to design efficient systems that use less waste. 
                        There is a focus on adding different perennials, such as fruit trees, that all work together. </p>
                  </div>
              </div>
            </div>
      </div>
      </div>
   
       

            <style>
          .techniques-section {
              padding: 0 5px;
              height: 100%;
              margin: 0 auto;
              display: grid;
              place-items: center;
          }
          .card:hover{
            background-color: #78c5b3;
          }
          .card-body:hover{
            background-color: #78c5b3;
          }
          .container-techniques {
            padding: 40px;
          }

        .section-title.text-start::before,
        .section-title.text-end::after {
            display: none;
        }
          
          .shadow,
          .subscription-wrapper {
              box-shadow: 0px 15px 39px 0px rgba(8, 18, 109, 0.1) !important
          }
          
          .icon-bg-circle {
              position: relative;
          }
          .icon-lg {
              font-size: 50px
          }
          
          .icon-bg-circle::before {
              z-index: 1;
              position: relative;
              left: 10px;
              top: 6px;
          }
          
          .icon-bg-circle::after {
              content: '';
              position: absolute;
              width: 65px;
              height: 65px;
              top: -2px;
              left: 5px;
              border-radius: 50%;
              background: inherit;
              opacity: .1
          }
          
          p,
          .paragraph {
              font-weight: 400;
              color: rgb(90, 86, 86);
              font-size: 15px;
              line-height: 1.6;
              font-family: "Open Sans", sans-serif
          }
          
          .icon-bg-yellow::after {
              background: #f6a622 !important
          }
          
          .icon-bg-brown::after {
              background:  burlywood;
          }
          
          .icon-yellow {
              color: #f6a622
          }
          
          .icon-brown {
              color: burlywood;
          }
          .icon-bg-green::after {
              background: #66cc33;
          }
          .icon-green {
              color: #66cc33;
         
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
      
              </style>


   
    <!-- techniques end -->
    <style>

      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
     
      .btn-video{
        text-decoration: none;
        padding: 15px 40px;
        background-color: rgba(255,122,0);
        color: #fff;
        border-radius: 40px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: bolder;
        box-shadow: 0 10px 40px  rgba(255, 122, 0, 0.4);
      }
      .video-container{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 99999;
        background-color: rgba(255,122, 0, 0.1);
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        pointer-events: none;
        transition: all 0.3s;
      }
      .video-container.show{
        pointer-events: all;
        opacity: 1;
      }
      .video-container.show video{
        transform: scale(1);
      }
      .btn-learnmore{
        height: 40px;
        width: 120px;
        background: #239B56;
        float: center;
        box-shadow: 0 0 1px #ccc;
        transition: all 0.5s ease-in-out;
        border: 0px;
        color: #fff;
        border-radius: 10px;
      }
      .btn-learnmore:hover{
        transform: scale(1.1);
        background: #45B39D;
    }
          
    </style>
    
    
    <script>
      const btn = document.querySelector('btn');
    
      const videoContainer = document.querySelector('.video-container');
    
      const close = document.querySelector('.close');
    
      btn.addEventListener('click',()=>{
        videoContainer.classList.add('show');
      })
      close.addEventListener('click',()=>{
        videoContainer.classList.remove('show');
      })
    </script>
    
       <!-- tips end -->


    <!-- about farming start -->
       <section id = "farmbook" class = "vh-100 flex py-2">
        <div class = "container">
            <div class = "farmbook-content">
                <div class = "title">
                    <h2 style="margin-bottom: 3%; font-size: 43px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Agriculture Tips For Farmers</h2>
                </div>
               <div class = "container">
                <div class="row justify-content-center align-items-center">
                <div class="col-lg-12 order-lg-1">
        <img src = "../img/bg/plant.jpg" style="width: 70%;">
        <div class="col-lg-12 order-lg-2 mb-4 mb-lg-0"> 
        <p class = "text" style="text-align: center; color: white; font-size: 22px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" >
          1. Invest in the best farming equipment<br>
          2. Plant Early, Plant Effectively<br>
          3. Climate, cropping pattern, and agricultural production issues<br>
          4. Recognize your target customers<br>
          5. Manage operating risk<br>
          6. Develop a thoughtful plan.</p>  
            </div>
            </div>
        </div>
        </div>
    </section>

    <style>
    #farmbook *{
      margin: 0;
      box-sizing: border-box;
      outline: none;
    }
   #farmbook {
        background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.5)), url(../img/bg/e-learn-bg5.jpg) center/cover no-repeat fixed;
        color: white;
        height: 80%;
        width: 101%;
        margin-top: 3%;
        background-size: cover;
    }
    .container{
      padding: 7px;
    }
    #farmbook .title h2, #farmbook h3{
        color: white;
    }
    #farmbook .title h2::after{
        background: white;
    }
    #farmbook {
          text-align: center;
          min-height: 135vh;
      }
    #farmbook h2{
        padding-top:  30px;
        font-size: 40px;
        font-family: sans-serif;
      }
      #farmbook img{
          padding-bottom: 30px;
          margin-bottom: 30px;
        }
      #farmbook .text{
      margin-left: 20px;
      padding-bottom: 30px;
      font-size: 20px;
      }
      
    </style>

    <!-- about farming end -->


    <style>
    
      .tips-caption h1 {
        font-size: 58px;
        text-transform: uppercase;
        letter-spacing: 4px;
        margin-bottom: 50px;
        color: #111;
        text-align: center;
      }
      .tips-caption {
        top: 60px;
        z-index: 2;
      }
      .text-header{
        color: green;
      }
      .text-body{
        text-align: center;
        color: #111;
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
      
      section {
        display: grid;
        place-items: center;
      }
      
      .section-header{
          position: relative;
          padding-bottom: 10px;
          text-align: center;
          font-weight: 900;
          padding-bottom: 25px;
          color: #fff;
      }
      .section-header:after{
          content: '';
          height: 3px;
          width: 200px;
          position: absolute;
          bottom: 0;
          left: calc(50% - 100px);
          background: #fff;
        
      }
      .section-header span {
        display: block;
        font-size: 15px;
        font-weight: 300;
      }
     
      .tips{
        padding: 0 40px 50px;
        margin: 0 auto 5px auto;
      }
      .tips .card-header {
      box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);
      }
      .text-title{
        font-size: 45px;
      }
      .site-section {
        padding: 2.5em 0;
      }
        @media (min-width: 768px) {
      .site-section 
      {
        padding: 5em 0; 
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
        @media (min-width: 768px) {
        .site-section-heading {
        font-size: 3rem; 
        } 
      }

    </style>

     <!-- tips in farming section -->
     <section id="tips" class="tips section-padding">
      <div class="container-tips">
          <div class="row">
              <div class="col-md-12">
                <div class="text-center">
                  <h6 class="section-title text-center text-secondary text-uppercase" style="margin-top: 6%;">Farming Tips</h6>
                    <h1 class="mb-5" style="font-size: 50px;">Tips in <span class="text-header uppercase">Farming</span></h1>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-12 col-lg-4">
                  <div class="card-header text-light text-center bg-white pb-2">
                      <div class="card-body-text text-dark">
                        <div class="img-area mb-4">
                            <img src="../img/bg/tips-pic1.jpg" class="img-fluid" alt="">
                        </div>
                          <h3 class="card-title">Tips on How to Keep Fruit Fresh</h3>
                          <p style="font-size: 17px; margin-top: 10%;">Here are some tips on how to keep your fruit fresh for longer.
                            By following these simple tricks, you can enjoy the 
                            delicious taste and nutrients of fruits without fear that it will spoil quickly.
                          </p>
                          <a href="../pages_php/tip1-fruits.php" type="button" class="btn-learnmore" style="font-size: 
                          larger; font-weight: 300; color: #fff; text-decoration: none; margin-bottom: 4%;">Learn More</a>
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-12 col-lg-4">
                  <div class="card-header text-light text-center bg-white pb-2">
                      <div class="card-body-text text-dark">
                        <div class="img-area mb-4">
                            <img src="../img/bg/tips-pic2.jpg" class="img-fluid" alt="">
                        </div>
                          <h3 class="card-title">Tips on How to Keep Vegetables Fresh</h3>
                          <p style="font-size: 17px; margin-top: 10%;">Here are some tips on how to keep your vegetables fresh for longer.
                            By following these simple tricks, you can enjoy the delicious taste and nutrients of vegetables 
                            without fear that it will spoil quickly.
                          </p>
                          <a href="../pages_php/tip2-vegetables.php"  type="button" class="btn-learnmore" style="font-size: 
                          larger; font-weight: 300; color: #fff; text-decoration: none; margin-bottom: 4%;">Learn More</a>
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-12 col-lg-4">
                  <div class="card-header text-light text-center bg-white pb-2">
                      <div class="card-body-text text-dark">
                        <div class="img-area mb-4">
                            <img src="../img/bg/tips-pic3.jpg" class="img-fluid" alt="">
                        </div>
                        <h3 class="card-title">Tips on How to Maintain the Freshness of the Crops</h3>
                        <p style="font-size: 17px;  margin-top: 4%;">Here are some tips on how to keep your crops fresh for longer.
                          By following these simple tricks, you can enjoy the freshness of crops
                          without fear that it will result to poor quality.
                        </p>
                        <a href="../pages_php/tip3-crops.php" type="button" class="btn-learnmore" style="font-size: 
                        larger; font-weight: 300; color: #fff; text-decoration: none; margin-bottom: 4%;">Learn More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>

       <!-- yt tutorial start -->
       <div class=" ../pages_php/ontainer youtube-tutorial" style="background: white;">
        <div class="col-lg-12 order-lg-2 mb-4 mb-lg-0">
        <div class="row">
          <div class="text-center">
            <h6 class="section-title text-center text-secondary text-uppercase">FARMING TUTORIAL</h6>
              <h1 class="mb-5" style="font-size: 50px;">Crop Farming <span class="text-header uppercase">Tutorial</span></h1>
          </div>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/fRlUhUWS0Hk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
          encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="col-sm-4" style="margin-top: 2%;"></iframe>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/h6ly4g5SC2o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
          encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="col-sm-4" style="margin-top: 2%;"></iframe>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/ZsJVsQe66ko" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
          encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="col-sm-4" style="margin-top: 2%;"></iframe>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/BNR8b4_o2LA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
          encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="col-sm-4" style="margin-top: 2%;"></iframe>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/otg0BQ4VoV8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
          encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="col-sm-4" style="margin-top: 2%;"></iframe>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/eb2d-d7IE_U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
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

    <!-- yt tutorial end-->


    <!-- footer start-->
    
    <!-- <footer class="bg-light text-dark pt-5 pb-4" style="margin-top: 3%; width: 101%;">
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
                         <li class="fa fa-home mr-3"></li> Nasugbu Nas 4231, PH
                      </p>
                      <p>
                          <li class="fa fa-envelope mr-3"></li> farmbook@gmail.com
                       </p>
                       <p>
                          <li class="fa fa-phone mr-3"></li> +9353081922
                       </p>
                       <p>
                          <li class="fa fa-print mr-3"></li> +9353081922
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
  </footer> -->
  <?php include "../components/footer.php"?>

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  
    </body>
    </html>