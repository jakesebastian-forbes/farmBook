<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css.css">
    <title>FULL FORECAST | WEATHER</title>

    
</head>
<Style>
    p, h1,h2,h3,h4,h5,h6, details, input, label{
        color: black;

    }
    card-header {
        background-color: aqua;
    }
    input {
        color: blue;
        border: 2px;
    }
   
</Style>
<body>
   
        <div class="container py-5">
            <div class="row justify-content-center"> 
                <div class="col-sm-8">
                    <form class="row g-3">
                        
                          <div class="d-flex border rounded border-success" style="border-width: 2px;">
                            <input class="form-control border-0 me-2 text-dark" type="search" placeholder="  Search Location..." aria-label="Search">
                            <div class="d-flex" style="margin-right: -10px">
                                <button class="btn btn-outline-success px-2" type="submit">Search</button>
                                <button class="btn btn-outline-secondary" type="button">
                                <i class="bi bi-geo-alt"></i></button>
                              </div>
                          </div>
                      
                    </form>
                </div>
            </div>
            
            <!-- Todays Forecast -->
            <div class="row justify-content-center mt-5 my-2">
            <div class="col-md-8 my-1">
                <div class="card shadow">
                <div class="card-header bg-success text-center">
                    <!-- date -->
                    <h1 class="display-4 text-white"><b>London, UK</b></h1>
                    <h3 class="text-white">Tuesday, April 11th</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6 text-center">
                        <h2 class="display-1">15&#176;C</h2>
                        <img src="https://openweathermap.org/img/w/01d.png" alt="Weather Icon" class="img-fluid">
                        <h3>Sunny</h3>
                    </div>
                    <div class="details col-md-6 text-center">
                        <h4>Details</h4>
                        <p>Humidity: 62%</p>
                        <p>Wind: 7 km/h</p>
                        <p>Pressure: 1014 hPa</p>
                        <p>Sunrise: 06:17 AM</p>
                        <p>Sunset: 07:46 PM</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <!-- weekly weather forecast -->
            <div class="container py-5">
                <div class="card rounded">
                    <div class="card-body">
                    <h5 class="card-title">Weekly Weather Forecast</h5>
                    <div class="row row-cols-1 row-cols-md-5 g-4">
                        <div class="col">
                        <div class="card h-100" >
                          
                            <img src="./weather_img/sun.png" alt="" class="card-img-top">
                            <div class="card-body">
                            <h6 class="card-title">Monday</h6>
                            <p class="card-text">Sunny Day.</p>
                            
                            </div>
                        </div>
                        </div>
                        <div class="col">
                        <div class="card h-100">
                            <!-- <img src="mostly_sunny.jpg" class="card-img-top" alt="..."> -->
                            <img src="./weather_img/mostly-sunny.png" alt="" class="card-img-top">
                            <div class="card-body">
                            <h6 class="card-title">Tuesday</h6>
                            <p class="card-text">Mostly sunny with a slight breeze.</p>
                            </div>
                        </div>
                        </div>
                        <div class="col">
                        <div class="card h-100">
                            <!-- <img src="partly_cloudy.jpg" class="card-img-top" alt="..."> -->
                            <img src="./weather_img/partly-cloudy.png" alt="" class="card-img-top">
                            <div class="card-body">
                            <h6 class="card-title">Wednesday</h6>
                            <p class="card-text">Partly cloudy with a chance of thunderstorms.</p>
                            </div>
                        </div>
                        </div>
                        <div class="col">
                        <div class="card h-100">
                            <!-- <img src="mostly_cloudy.jpg" class="card-img-top" alt="..."> -->
                            <img src="./weather_img/mostly-cloudy-rain.png" alt="" class="card-img-top">
                            <div class="card-body">
                            <h6 class="card-title">Thursday</h6>
                            <p class="card-text">Mostly cloudy with a chance of showers.</p>
                            </div>
                        </div>
                        </div>
                        <div class="col">
                        <div class="card h-100">
                            <!-- <img src="sunny_mild.jpg" class="card-img-top" alt="..."> -->
                            <img src="./weather_img/rainy-day.png" alt="" class="card-img-top">
                            <div class="card-body">
                            <h6 class="card-title">Friday</h6>
                            <p class="card-text">Sunny with mild temperatures.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
 
      
      



</body>
</html>