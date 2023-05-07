<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

        /* ==== Search ==== */
.search-loc button{
   background-color: #57744B;
   color: white;
}
.search-loc button:hover{
   background-color: rgba(87,116,75,0.5);
   /* color: white; */
}

.search-loc button:active{
   background-color: #57744B;
   color: white;
}
</style>
<body  style="background-color: #E4E4E4;">
    
    <nav class="navbar navbar-expand-lg navbar-light fixed-top px-2" >
        <h1 style="color: #FFDE59;font-family: 'Archivo Black';margin-left: 10px;">FarmBook</h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="color: aqua;"></span>
        </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="color: #FFDE59 ; ">
               <!--======================= di nagana pag nasa index=================== -->
                  <li class="nav-item" ><a class="nav-link" href="" style=" color: #FFDE59;"   id="link_home"><i class="fa fa-fw fa-home fa-2x"></i>Home</a></li>
                  <li class="nav-item" ><a class="nav-link" href="" style=" color: #FFDE59;" id="link_about"><i class="fa fa-fw fa-circle-info fa-2x"></i>About Us</a></li>
                  <li class="nav-item" ><a class="nav-link" href="" style=" color: #FFDE59;" id="link_e-learning"><i class="fa fa-fw fa-book fa-2x"></i>E-Learning</a></li>
                  <!-- <li class="nav-item" ><a class="nav-link"  href="contact.html"><i class="fa fa-fw fa-phone fa-2x"></i>Contact</i></a></li> -->
                </ul>
        
              </div>
        
    </nav>  

    <div class="container px-5 py-1 " style="margin-top: 100px;">
        <div class="search-loc  d-flex" style="float: right;" >
            <input type="text" class="rounded-start" placeholder="Search Location.." >
            <button type="submit" class="rounded-end" ><i class="fa fa-search rounded"></i></button>
        </div>
        
       <div class="row  mt-5 my-2 justify-content-center" >
        <div class="col-md-8">
            <div class="card shadow mt-1 rounded" >
                <div class="card-header text-center " style="background-color: #57744B; color: white;">
                    <h2>Nasugbu, Batangas</h2>
                    <h3>Monday, April 11, 2023</h3>
                </div>
                <div class="card-body" style="background-image:url(../img/Weather/weather.jpg); color: white;">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <h2 class="display-1 ">15&#176;C</h2>
                            <img src="../img/Weather/sun.png" alt="" style="height: 80px; width: 80px;">
                            <h3>Sunny</h3>  
                        </div>
                        <div class="col-md-6 text-center">
                            <h3>Details</h3>
                            <h5>Humidity: 62%</h5>
                            <h5>Wind: 7 km/h</h5>
                            <h5>Pressure: 1014 hPa</h5>
                            <h5>Sunrise: 06:17 AM</h5>
                            <h5>Sunset: 07:46 PM</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="container mt-2">
            <div class="card">
                <div class="card-header text-center" style="background-color: #57744B; color: white;">
                    <h5>Weekly Forecast</h5>
                </div>
                <div class="card-body text-center" style="background-image: url(/img/Weather/weather.jpg);">
                    <div class="row row-cols-1 row-cols-md-5 g-4">
                        <div class="col">
                            <div class="card h-100 pt-2" >
                          
                                <img src="../img/Weather/sun.png" alt="" class="card-img-top mx-auto  " style="height: 60px; width: 60px;">
                                <div class="card-body">
                                <h6 class="card-title">Monday</h6>
                                <p class="card-text">Sunny Day.</p>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 pt-2" >
                          
                                <img src="../img/Weather/cloudy.png" alt="" class="card-img-top mx-auto" style="height: 60px; width: 60px;">
                                <div class="card-body">
                                <h6 class="card-title">Tuesday</h6>
                                <p class="card-text">Partly Cloudy</p>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100 pt-2" >
                          
                                <img src="../img/Weather/cloudy.png"  alt="" class="card-img-top mx-auto" style="height: 60px; width: 60px;">
                                <div class="card-body">
                                <h6 class="card-title">Wednesday</h6>
                                <p class="card-text">Partly Cloudy</p>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100 pt-2" >
                          
                                <img src="../img/Weather/sun.png"  alt="" class="card-img-top mx-auto" style="height: 60px; width: 60px;">
                                <div class="card-body">
                                <h6 class="card-title">Thursday</h6>
                                <p class="card-text">Sunny Day</p>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100 pt-2" >
                          
                                <img src="../img/Weather/sun.png" alt="" class="card-img-top mx-auto" style="height: 60px; width: 60px;">
                                <div class="card-body">
                                <h6 class="card-title">Friday</h6>
                                <p class="card-text">Sunny Day</p>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
       
    </div>

          <!-- footer start--> 
          <?php include "../components/footer.php"?>
  <!-- footer end -->
</body>
</html>
        

