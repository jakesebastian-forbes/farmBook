<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Avocado Detail</title>
      
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../bootstrap-5.2.2/css/bootstrap.min.css"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href='https://fonts.googleapis.com/css?family=Archivo Black' rel='stylesheet'>
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
      <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
      <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" >


  
  </head>

  <body>

    <style>
        body{
        overflow-x: hidden !important;
      }
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
      color: black;
      border-color: transparent;
      background:transparent;
      margin-right: 20px;
      border: none;
      outline: none;
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
        /* background-image: linear-gradient(rgba(1,2,2,0.7),rgba(0,1,1,0.4)), url(/img/fruits/fruit-avocado.jpeg); */
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
        $full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $title  = substr($full_url, strpos($full_url, "=") + 1);    
     
        
        
                          $conn = new mysqli('localhost','root','','farmbook_db');

                          if($conn->connect_error){
                            die('Connection failed : ' . $conn->connect_error);
                           }else{

                          $query = "SELECT * FROM `learning_contents` WHERE title = '$title'";
                        
                          $result = mysqli_query($conn,$query);

                          while($rows = mysqli_fetch_assoc($result))
                              {
                                
                          ?>  
 
   
   <section class="header" style = "background-image: linear-gradient(rgba(1,2,2,0.7),rgba(0,1,1,0.4)),
    url(<?php echo 'data:image/jpeg;base64,'.base64_encode( $rows['background_img'])?>)";>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" >
     <h1 style="color: #FFDE59;font-family: 'Archivo Black';margin-left: 10px;">FarmBook</h1>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span><i class="fa-solid fa-bars" style="color: #FFDE59;"></i></span>
         </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="color: #FFDE59;">
                 <li class="nav-item" ><a class="nav-link" href="homepage-test.html"><i class="fa fa-fw fa-home fa-2x"></i>Home</a></li>
                 <li class="nav-item" ><a class="nav-link"  href="aboutUs.html"><i class="fa fa-fw fa-circle-info fa-2x"></i>About Us</a></li>
                 <li class="nav-item" ><a class="nav-link" href="e-learning2.html"><i class="fa fa-fw fa-book fa-2x"></i>E-Learning</a></li>
                 <li class="nav-item" ><a class="nav-link"  href="contact.html"><i class="fa fa-fw fa-phone fa-2x"></i>Contact</i></a></li>
                 </ul>
             </div>
         </nav>
       
             
 <div class="site-section">
    <div class="container">
        <h1 style="text-align: center; color: #fff; font-family:Georgia, 'Times New Roman', Times, serif;
      margin-bottom: 10%; font-size: 70px; margin-left: 2%; margin-top: 10%;">All About <?php echo $rows['title']?></h1>
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-5 order-lg-1 ">
          <div class="fruit-info">
          <?php echo '<img src=data:image/jpeg;base64,'.base64_encode( $rows['cover_img']). ' style="width: 100%; margin-top: 5%; height: 60%";>' ;?>
        </div>
        </div>
        
        <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
          <h2 class="text-title mb-2" style="color: #fff; font-family: Georgia, 'Times New Roman', Times, serif;
          font-size: 38px; letter-spacing: 1px; margin-bottom: 15%;">How do <?php echo $rows['title']?><small>(e/s)</small> grow?</h2>
          <p class="mb-3" style="text-align: justify; color: #fff;  letter-spacing: 2px; margin-top: 5%;
          font-size: 17px;" id= "detail_growth">
          <?php echo $rows['growth']?>  
        </p>
          <h2 class="text-title mb-2" style="color: #fff; font-family: Georgia, 'Times New Roman', Times, serif;
          font-size: 38px; letter-spacing: 1px; margin-bottom: 15%;">What season do <?php echo $rows['title']?><small>(e/s)</small> grow in?</h2>
          <p class="mb-3" style="text-align: justify; color: #fff;  letter-spacing: 2px; margin-top: 5%;
          font-size: 17px;" id="detail_season">
        <?php echo $rows['season']?>   
      </p>
          <h2 class="text-title mb-2" style="color: #fff; font-family: Georgia, 'Times New Roman', Times, serif;
          font-size: 38px; letter-spacing: 1px; margin-bottom: 15%;">Nutrition Facts</h2>
           <p class="mb-3" style="text-align: justify; color: #fff;  letter-spacing: 2px; margin-top: 5%;
           font-size: 17px;" id="detail_nutrition_fact">
            <?php echo $rows['nutritionFact']?>  
          </p>
        </div>
      </div>
    </div>
  </div>

           <!--difficulty and timelapse -->
        <div class="site-section">
          <div class="container">
            <div class="row justify-content-between align-items-center">
              <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                <div class="img_duration">
                <?php echo '<img src=data:image/jpeg;base64,'.base64_encode( $rows['img2']). ' style="width: 100%";>';?>
                </div>
              </div>
              

              <div class="col-lg-5 order-lg-1">
                <h2 class="text-title mb-2" style="color: #fff; font-family: Georgia, 'Times New Roman', Times, serif;
                font-size: 45px; letter-spacing: 1px;;">How Long Do <?php echo $rows['title']?><small>(e/s)</small> Last?</h2>
                <p class="mb-3" style="text-align: justify; color: #fff;  letter-spacing: 2px; margin-top: 5%;
                font-size: 19px;" id = "detail_edibility">
          <?php echo $rows['edibility']?>   
          </p>
              </div>
            </div>
          </div>
        </div>

      
           <!-- spoiled info -->
      <div class="site-section">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 order-lg-1">
            <?php echo '<img src=data:image/jpeg;base64,'.base64_encode( $rows['spoilt_img']). ' style="width: 100%; margin-top: 5%; height: 60%";>' ;?>
            </div>
            <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
              <h2 class="text-title mb-4" style="color: #fff; font-family: Georgia, 'Times New Roman', Times, serif;
              font-size: 40px; letter-spacing: 1px; margin-bottom: 10%;">How to Know if it's Spoiled?</h2>
              <p class="mb-4" style="margin-left: 1%; text-align: justify; color: #fff; font-size: 18px; letter-spacing: 2px;"
              id= "detail_spoilage">
              <?php echo $rows['spoiltStale']?> 
                  </p>
            </div>
          </div>
        </div>
      </div>

           <!-- timelapse -->
        <div class="col-lg-12 col-md-12 col-12">
          <div class="row">
            <h1 class="section-title text-center" style="font-size: 50px; text-align: center; color: #fff; 
            margin-right: 1%; margin-left: 1%;"> <?php echo $rows['title']?><small>(e/s)</small> Growth Timelapse</h1>
            <div class="ratio ratio-16x9">
            <iframe width="560" height="315" src="<?php echo $rows['timeLapse']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
            encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="col-sm-4" style="margin-top: 5%; 
            width: 70%; height: 75%; margin-left: 17%;"></iframe>
            </div>
            <!-- <p style= "background-color:#FFDE59">link: <?php //echo $rows['timeLapse']?></p> -->
           </div>
        </div>
      </div>
</section>

<?php }
                           }
?>

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


<?php
  require '../../../page_component/footer.php'
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
