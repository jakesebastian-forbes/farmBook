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

</style>
<body style="background-color: #e4e4e4;">
    
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
<style>

    /* PRODUCT IMAGE  */

    
    #myImg{
    object-fit: cover;
    /* height: auto; */
    /* margin-top: 3rem; */
    width: 90%;
    aspect-ratio: 60/50
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
      padding-top: 85px;
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
      object-fit: cover;
    height: 30rem;
    width: 30rem;
  }

 
  /* Add Animation */

  .modal-content,
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
  }

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
        height: 40%;
      }
  }
   /* add to cart button  */
   .add-to-cart-btn:hover{
      background-color: rgba(87,116,75,0.1);
   }
</style>
<div class="container my-5" >



        <div class="row  bg-light  rounded mx-1   " style="margin-top: 100px; ">
          <div class="col-lg-6  text-center py-5 ">
        
             <img src="../img/Vegetables/bellpepper-1.jpeg" alt="post image" id="myImg"  class="img-fluid rounded ">
             
            <div id="myModal" class="modal myModal px-5" >
                <span class="close">×</span>
                <img class="modal-content " id="img01" />
             
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
        
        </div>

            <div class="col-lg-6  py-5 ">
                <div class="product-name ">
                    <h1 > Banana </h1>
                </div>
                <div class="product-price mt-4  " >
                    <h2>₱ 200.00 per kilo</h2>
                    
               
                </div>
                <div class="seller-name mt-3">
                    <h4>Seller name: Jhong Hilario</h4>
                </div>
                <div class="seller-location mt-3">
                    <h5><i class="fa-solid fa-location-dot"></i> Brgy. Pantalan, Nasugbu, Batangas</h5>
                </div>

                <div class="product-description mt-4 pe-5">
                    <h5 class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. At eveniet porro dolore dicta nisi repellendus nesciunt, ut maxime qui.
                         Perspiciatis hic repellat maxime consequuntur eum. Corrupti impedit quidem officia maiores.</h5>
                </div>
                
                <div class="kilo mt-5 d-flex">
                    <h5 class="mt-1 me-3">KILO</h5>
                <div class="input-group kilo-input  " style="width:140px;">
                  <button class="btn btn-outline-secondary minus-btn" type="button">-</button>
                  <input type="number" class="form-control quantity-input text-center  " value="1">
                  <button class="btn btn-outline-secondary add-btn" type="button">+</button>
                    
                </div>
                </div>

                  <script>
                  // Get the minus and add buttons
                      var minusBtn = document.querySelector(".minus-btn");
                      var addBtn = document.querySelector(".add-btn");

                      // Get the quantity input field
                      var quantityInput = document.querySelector(".quantity-input");

                      // Add event listeners to the buttons
                      minusBtn.addEventListener("click", function() {
                        // Decrease the quantity by 1 if it's greater than 1
                        if (quantityInput.value > 1) {
                          quantityInput.value--;
                        }
                      });

                      addBtn.addEventListener("click", function() {
                        // Increase the quantity by 1
                        quantityInput.value++;
                      });

                  </script>

                  <div class="mask-icon justify-content-start mt-4 d-flex gap-2">
                                                        
                    <button class="btn add-to-cart-btn text-white" style="background-color: #57744B;"><i class="fa-solid fa-bookmark"></i> </button>
                    <button class="btn add-to-cart-btn text-white" style="background-color: #57744B;"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                  </div>
            
              </div>
        </div>
    </div>
    <footer class="bg-light text-dark pt-5 pb-4" style="margin-top: 5%;">
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
</body>
</html>