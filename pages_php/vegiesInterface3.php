<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Vegetables-3</title>
      
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
      color: white;
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
    .w-100 {
      height: 100vh;
    }
    .navbar-toggler {
      padding: 1px 5px;
      font-size: 18px;
      line-height: 0.3;
      color: #FFDE59;
    }
    .navbar-light .navbar-toggler {
      border-color: transparent;
      background:transparent;
      border: none;
      outline: none;
      margin-right: 2%;
    }
    .navbar-light .navbar-toggler:focus{
        outline: none;
        box-shadow: none;
      }
    .navbar-nav {
      text-align: center;    
    }
    .navbar-collapse {
      background: transparent;
    }
    .navbar-collapse .nav-link {
      color: #FFDE59 !important;
    }
        .header{
        background-image: linear-gradient(rgba(1,2,2,0.4),rgba(0,1,1,0.4)), url('../img/vegetables/vegies-bg.jpeg');
        background-size: cover;
        background-position: center;
        font-family: sans-serif;
        background-repeat: no-repeat;
        position: relative;
        min-height: 70vh;
        background-attachment: fixed;
        width: 100%; 
        margin-bottom: 5%;
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
        font-size: 60px;
        padding-bottom: 40px;
        color: #fff;
        }
</style>

    <section class="header">
  
    </section>

    <div class="text-box">
        <h2><b>Vegetables</b></h2>
      </div>         
    </section>

<div class="container">
  <h1 class="fruit-header" style="margin-right: 10%;">VEGETABLES</h1>
  <div class="vegetables-gallery">
    <div class="pic chives">
        <figure class="effect-ming tm-pic-item">
            <img src="../img/vegetables/vegetables-chives.jpeg" alt="Image" class="img-fluid">
            <figcaption class="d-flex align-items-center justify-content-center">
                <h2 style="font-size: 20px;">Chives</h2>
                <a href="chives-detail.html"></a>
            </figcaption>                    
        </figure>
        </div>
        <div class="pic yam">
        <figure class="effect-ming tm-pic-item">
            <img src="../img/vegetables/vegetables-yam.jpg" alt="Image" class="img-fluid">
            <figcaption class="d-flex align-items-center justify-content-center">
                <h2>Yam</h2>
                <a href="yam-detail.html"></a>
            </figcaption>                    
        </figure>
        </div>
        <div class="pic turnip">
            <figure class="effect-ming tm-pic-item">
                <img src="../img/vegetables/vegetables-turnips.jpeg" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                    <h2>Turnips</h2>
                    <a href="../pages_php/vegies-detail.php"></a>
                </figcaption>                    
            </figure>
            </div>
            <div class="pic spinach">
                <figure class="effect-ming tm-pic-item">
                    <img src="../img/vegetables/vegetables-spinach.jpeg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Spinach</h2>
                        <a href="spinach-detail.html"></a>
                    </figcaption>                    
                </figure>
                </div>
            
               
              

    </div>
</div>
        
        <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        input{
            display: none;
        }
        .container{
            width: 90%;
            text-align: center;
        }
        .fruit-header{
            font-weight: normal;
            font-size: 35px;
            position: relative;
            margin: 40px 0;
            margin-bottom: 5%;
            margin-left: 9%;
        }
        .fruit-header::before{
            content: '';
            position: absolute;
            width: 100px;
            height: 3px;
            background-color: crimson;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            animation: animate 4s linear infinite;
        }
        .vegetables-gallery{
            width: 100%;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 25px;
            margin-left: 2%;
        }
        .pic{
            position: relative;
            height: 230px;
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
            top: 30px;
            right: 30px;
            bottom: 30px;
            left: 30px;
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
        </style>>


        <nav aria-label="page-navigation">
            <ul class="pagination pagination-lg pagination-circle justify-content-center" style="margin-top: 10%;">
            
            <li class="page-item"><a class="page-link" href="vegiesInterface.html">1</a></li>
            <li class="page-item"><a class="page-link" href="vegiesInterface-2.html">2</a></li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">
                3
            <span class="visually-hidden">(current)</span>
            </span></li>
            </ul>
        </nav>

<!-- footer start--> 
<?php include "../components/footer.php"?>                     
<!-- footer end -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- lightbox -->
<script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

</body>
</html>
