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



    <style>
        body {
    overflow-x: hidden;
    
}

.carousel-item {
	height: 100vh;
	min-height: 300px;
	background-color: #f7f5eb;
}

.imgBox img {
   
	width: 650px;
}

.carousel-caption{
    top: 40%;
    text-transform: capitalize;
    
}

.carousel-control-prev-icon, .carousel-control-next-icon {
	
	outline: black;
	background-size: 100%, 100%;
	border-radius: 50%;
	background-image: none;
	color: #fff;

}
.carousel-control-next-icon:after {
	content: '>';
	font-size: 55px;
	color: white;
}
.carousel-control-prev-icon:after {
	content: '<';
	font-size: 55px;
	color: #fff;
}
.carousel-indicators [data-bs-target] {
	background-color: white;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
	.navbar-nav {
		text-align: center;
       
	}
	.navbar-collapse {
		background: transparent;
	}

	.navbar-collapse .nav-link {
		color: #FFDE59 !important;
	}

}
@media only screen and (max-width: 767px) {
	.navbar-nav {
		text-align: center;
	}
	.navbar-collapse {
		background:transparent;
	}
	.navbar-collapse .nav-link {
		color: #FFDE59 !important;
	}
	.carousel-caption {

		text-align: center;
	}

	.carousel-caption p {
		width: 100%;
		line-height: 1.6;
		font-size: 12px;
	}
  /* .carousel-caption h1{
    font-size: 600px;
    font-weight: 500px;
  } */
	.banner-info .btn {
		padding: 0 15px;
		font-size: 20px;
	}
	.imgBox .img-fluid {
		max-width: 80%;
		height: auto;
	}
	.carousel-control-prev-icon, .carousel-control-next-icon {
		height: 50px;
		width: 50px;
	}
	.carousel-control-next-icon:after {
		font-size: 30px;
	}
	.carousel-control-prev-icon:after {
		font-size: 30px;
	}

 

}

/* LOGIN BUTTON */
    .car-login{
        position: absolute;
        background-color: #FFDE59;
        top: 80%;
        width: 150px;
        border-radius: 10px;
        font-size: 20px;        
    }
    .car-login:hover{
        background-color: rgba(255,222,89,0.5);
    }

    .login-div{
        text-align: center;
        margin-right: 140px;
        
    }
    </style>

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
              <h1 class="" >Welcome to<br>For <br>FarmBook</h1>
             
            </div>
          
          </div>
          <div class="carousel-item" style="background-image:linear-gradient(rgba(1,2,2,0.5),rgba(0,1,1,0.4)), url(img/bg/bg1.jpeg);  background-size:cover ;height: 680px; background-repeat: no-repeat;">     
            <div class="carousel-caption">
              <h1 class="display-4">Welcome to<br>For <br>FarmBook</h1>
            </div>
          </div>
          <div class="carousel-item" style="background-image:  url(img/bg/bg13.jpeg);   background-size:cover ;height: 680px; background-repeat: no-repeat;">
            <div class="carousel-caption">
              <h1 class="display-4">Welcome to<br>For <br>FarmBook</h1>
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
          <button class="car-login" data-bs-toggle="modal" data-bs-target="#loginform">Login</button>
          
        </div>
      </div>




     <div class="container  text-md-left mt-5"style="width:auto; overflow-x:hidden">
   
      <div class="row  text-md-left">
              <div class="text-center col-md-4 col-lg-4 col-xl-4 mx-auto mt-3" style=" padding: 1%; padding-right: 3%;" >
                 
               
                    <img src="img/farmer3.jpeg" alt="" class="responsive" style="height: 450px; width:100%;max-width: 800px; border-radius: 10px;">
                  </div>
                 
              <div class="col-md-8 col-lg-8 col-xl-8 mx-auto mt-3" style="padding: 1%; padding-right: 5%; ">
                 <h1>Farmbook</h1>
                 <h5>A Social Media Plaform for Filipino Farmers</h5>
                 <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni explicabo fugit minima dolores illum. Dolorem, nesciunt. 
                   Similique tempore inventore enim dolor velit corrupti delectus, possimus sit quae sed quaerat ea.Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni explicabo fugit minima dolores illum. Dolorem, nesciunt. 
                   Similique tempore inventore enim dolor velit corrupti delectus, possimus sit quae sed quaerat ea</p>
                   
      </div>
  </div>



 
     

<style>
    
.form-control{
    background-color:#DDDDDD;
    color: black;
    padding-left: 20px;
    border: 0px;
    border-bottom: 1px solid #fff;
    border-radius: 10px;
}

.btn-close{
    float: right;
}

.myform .btn{
    width: 100%;
    font-weight: 800;
    color:#FFDE59 ;
    background-color: #57744B;
    border-radius: 10px;
    padding: 0.5em 0;
}

.myform .btn:hover{
    color: #333;
}
p{
    text-align: center;
    padding-top: 2em;
    color: black;
}

p a {
    color: black ;
    text-decoration: none;
}
p a:hover{
    color: blue;
}
.btn_next{
    float: right; 
    border-radius: 10px;
    border-color: transparent;
    background-color: transparent;
    font-size: 25px;
}
.btn_next:hover{
  color: grey;
}

.btn_back{
    float: left; 
    border-radius: 10px;
    border-color: transparent;
    background-color: transparent;
    font-size: 25px;
}
.btn_back:hover{
  color: grey;
}

.insert_pic{
    height:110px;
    width:110px;
    border-radius: 50px;
}
</style>



      <div class="modal fade" id="loginform">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close btn-close-black" 
                    data-bs-dismiss="modal" aria-label="Close"></button>
  
                    <div class="myform">
                        <h1 class="text-center">Login Form</h1>
                        <form action ="#">
                            <div class="mb-3 mt-3">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="email">Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-light mt-3">LOGIN</button>
                            <p>Not a Member? <a href="" data-bs-toggle="modal" data-bs-target="#signUpform">Sign Up</a></p>
                            <p> <a href="" data-bs-toggle="modal" data-bs-target="#forgotform"> Forgot Password?</a></p>
                        </form>
                      
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
                            <form action ="#">
                                <div class="signUp_as_list">
                                    <div class="mb-3 mt-3">
                                        <button type="submit" class="btn singnUpAs_btn btn-light mt-3 mx-1 rounded-2 " data-bs-toggle="modal" data-bs-target="#signUp_Form" >Enthusiast</button>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <button type="submit" class="btn singnUpAs_btn btn-light mt-3 mx-1 rounded-2 " data-bs-toggle="modal" data-bs-target="#signUp_Form">Farmer</button>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <button type="submit" class="btn singnUpAs_btn btn-light mt-3 mx-1 rounded-2 " data-bs-toggle="modal" data-bs-target="#signUp_Form">Vendor</button>
                                    </div>
                                </div>
                                <p>Already have an account?<a href=""  data-bs-toggle="modal" data-bs-target="#loginform">Login</a></p>
                            </form>   
                        </div>
                    </div>
                  </div>
                </div>
            </div>


<style>
  .image-preview-container {
    width: 50%;
    margin: 0 auto;
    border: 1px solid rgba(0, 0, 0, 0.1);
    padding: 3rem;
    border-radius: 20px;
}

.image-preview-container img {
    width: 100%;
    display: none;
    margin-bottom: 30px;
}
.image-preview-container input {
    display: none;
}

.image-preview-container label {
    display: block;
    width: 45%;
    height: 45px;
    margin-left: 25%;
    text-align: center;
    background: #8338ec;
    color: #fff;
    font-size: 15px;
    text-transform: Uppercase;
    font-weight: 400;
    border-radius: 5px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>
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
<style>
  .file-upload{
    border-radius:10px;
    background-color:#57744B;
    padding: 3%

  }
</style>

 

              <!--  -->
            <div class="modal fade " id="signUp_Form">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close btn-close-black" 
                            data-bs-dismiss="modal" aria-label="Close"></button>
          
                            <div class="myform">
                                <!-- <h1 class="text-center">Farmer</h1> -->
                                <form action ="#">
                                 
                                  <div class="mb-1 mt-1 d-block justify-content-between">
                                    <h4>Name</h4>
                                    
                                      <div class="mb-1 mt-1 mx-2">
                                        <label for="" class="FirstName " style="font-size: small;">First Name <i>(Pangalan)</i></label>
                                        <input type="" class="form-control" >
                                      </div>
                                      <div class="mb-1 mt-1 mx-2">
                                        <label for="" class="Middle_Name " style="font-size: small;">Middle Name<i>(Gitnang Pangalan)</i></label>
                                        <input type="" class="form-control">
                                      </div>
                                      <div class="mb-1 mt-1 mx-2">
                                        <label for="" class="Last_name" style="font-size: small;">Last Name <i>(Apelyido)</i></label>
                                        <input type="" class="form-control" >
                                      </div>
                                  </div>
                                  
                                  <div class="mb-1 mt-3 d-block justify-content-between">
                                    <h4>Email and Password</h4>
                                    <div class="mb-1 mt-1 mx-2">
                                      <label for="" class="Last_name" style="font-size: small;">Email</label>
                                      <input type="email" class="form-control" >
                                    </div>
                                    <div class="mb-1 mt-1 mx-2">
                                      <label for="" class="Last_name" style="font-size: small;">Password</label>
                                      <input type="password" class="form-control" >
                                    </div>
                                    <div class="mb-1 mt-1 mx-2">
                                      <label for="email" class="Last_name" style="font-size: small;">Confirm Password</label>
                                      <input type="password" class="form-control" >
                                    </div>
                                  </div>
                                  <button type="submit " class="btn-light btn_back"  data-bs-toggle="modal" data-bs-target="#signUpform"><i class="fa-sharp fa-solid fa-arrow-left"></i></button>  
                                  <button type="submit " class="btn-light btn_next" data-bs-toggle="modal" data-bs-target="#next_signUp_Form"><i class="fa-sharp fa-solid fa-arrow-right"></i></button>
                                  <p>Already have an account?<a href=""  data-bs-toggle="modal" data-bs-target="#loginform">Login</a> </p> 
      
                                </form>
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
                                <form action ="#">  
                                <h4>Address and Contact number</h4>
                                <div class="mb-1 mt-1 mx-2">
                                    
                                  <label for="" class="Province" style="font-size: small;">Province<i>(Probinsya)</i></label>
                                  <select class="select box form-select" aria-label="Default select example" onfocus='this.size=5;' onblur='this.size=1;' 
                                  onchange='this.size=1; this.blur();'>
                                    <!-- <option selected>Select Province</option> -->
                                    <option value="1">Batangas</option>
                              
                                  </select>
                                </div>
                           
                                <div class="mb-1 mt-1 mx-2">
                                  <style>
                                  
                                  </style>
                                  <label for="" class="Municipality" style="font-size: small;">Municipality/City <i>(Bayan)</i></label>
                                    
                                    <select class="select box form-select position-relative" aria-label="multiple select example"  onfocus='this.size=5;' onblur='this.size=1;' 
                                        onchange='this.size=1; this.blur();' >
                                      <!-- <option selected>Select Municipality / City</option> -->
                                      <option value="1">Agoncillo</option>
                                      <option value="2">Alitagtag </option>s
                                      <option value="3">Balayan</option>
                                      <option value="4">Balete </option>
                                      <option value="5">Batanagas City </option>
                                      <option value="6">Bauan </option>
                                      <option value="7">Calaca </option>
                                      <option value="8">Calatagan </option>
                                      <option value="9">Cuenca </option>
                                      <option value="10">Ibaan </option>
                                      <option value="11">Laurel</option>
                                      <option value="12">Lemery </option>
                                      <option value="13">Lian</option>
                                      <option value="14">Lipa City</option>
                                      <option value="15">Lobo</option>
                                      <option value="16">Mabini</option>
                                      <option value="17">Malvar</option>
                                      <option value="18">Mataas na kahoy</option>
                                      <option value="19">Nasugbu</option>
                                      <option value="20">Padre Garcia </option>
                                      <option value="21">Rosario </option>
                                      <option value="22">San Jose </option>
                                      <option value="23">San Juan</option>
                                      <option value="24">Taal </option>
                                      <option value="25">Tanauan </option>
                                      <option value="26">Tuy</option>

                                
                                    </select>
                                </div>
                                
                              </div>
                        
                                <div class="mb-1 mt-1 mx-2">
                                  <label for="" class="Barangay" style="font-size: small;">Barangay</i></label>
                                  <select class="select box form-select position-relative" aria-label="multiple select example"  onfocus='this.size=5;' onblur='this.size=1;' 
                                  onchange='this.size=1; this.blur();' >
                                <!-- <option selected>Select Barangayq</option> -->
                                <option value="1">Aga</option>
                                <option value="2">Balaytigue</option>s
                                <option value="3">Banilad</option>
                                <option value="4">Barangay 1</option>
                                <option value="5">Barangay 2</option>
                                <option value="6">Barangay 3</option>
                                <option value="7">Barangay 4</option>
                                <option value="8">Barangay 5</option>
                                <option value="9">Barangay 6</option>
                                <option value="10">Barangay 7</option>
                                <option value="11">Barangay 8</option>
                                <option value="12">Barangay 9</option>
                                <option value="13">Barangay 10</option>
                                <option value="14">Barangay 11</option>
                                <option value="15">Barangay 12</option>
                                <option value="16">Bilaran</option>
                                <option value="17">Bucana</option>
                                <option value="18">Bulihan</option>
                                <option value="19">Calayo</option>
                                <option value="20">Catandaan</option>
                                <option value="21">Cogunan</option>
                                <option value="22">Dayap</option>
                                <option value="23">Kaylaway</option>
                                <option value="24">Kayrilaw</option>
                                <option value="25">Latag</option>
                                <option value="26">Looc</option>
                                <option value="27">Lumbangan</option>
                                <option value="28">Malapad na Bato</option>
                                <option value="29">Mataas na Pulo</option>
                                <option value="30">Maugat</option>
                                <option value="31">Munting Indang</option>
                                <option value="32">Natipuan</option>
                                <option value="33">Pantalan</option>
                                <option value="34">Papaya</option>
                                <option value="35">Putat</option>
                                <option value="36">Reparo</option>
                                <option value="37">Talangan</option>
                                <option value="38">Tumalim</option>
                                <option value="39">Utod</option>
                                <option value="40">Wawa</option>
                              </select>
                                </div>
                                  <div class="mb-1 mt-1 mx-2">
                                    <label for="" class="Last_name" style="font-size: small;">Contact Number</label>
                                    <input type="" class="form-control" style="margin-right: 5px;" size="30">
                                  </div>
                                
                                </form>
                                <button type="submit " class="btn-light btn_back"  data-bs-toggle="modal" data-bs-target="#signUp_Form"><i class="fa-sharp fa-solid fa-arrow-left"></i></button>
                                <button type="submit " class="btn-light btn_next" data-bs-toggle="modal" data-bs-target="#second_signUp_Form"><i class="fa-sharp fa-solid fa-arrow-right"></i></button>
                                <p>Already have an account?<a href=""  data-bs-toggle="modal" data-bs-target="#loginform">Login</a> </p> 
                                  
                            </div>
                        </div>
                      </div>
                    </div>
                </div>



                 <div class="modal fade" id="second_signUp_Form">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close btn-close-black" 
                                data-bs-dismiss="modal" aria-label="Close"></button>
              
                                <div class="myform text-center">
                                    <!-- <h3 class="text-center">Farmer</h3> -->
                                   <form action ="#" class="insert_profile_pic text-center d-block ">
                                      <h4>Profile Picture</h4>
                                      <div class="text-center d-flex mx-auto">
                                      <img id="preview-selected-image"  class="card-img-top insert_pic mx-auto my-3 " alt="..." />
                                       
                                      </div>
                                     

                                  <label for="file-upload" class="file-upload">Upload Image</label>
                                  <input type="file" id="file-upload" accept="image/*" onchange="previewImage(event);" style="display:none" />
                                 
                                    </form>
                                    <button type="submit" class="btn btn-light mt-3">Sign up</button>
                                    <button type="submit " class="btn-light btn_back"  data-bs-toggle="modal" data-bs-target="#next_signUp_Form"><i class="fa-sharp fa-solid fa-arrow-left"></i></button>
          
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
                                    <form action ="#">
                                      <div class="md-form mt-5">
                                        <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
                                        <input type="email" id="orangeForm-email" class="form-control validate">
                                       
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
                                      <form action ="#">
                                        <div class="md-form mb-2">
                                            <label data-error="wrong" data-success="right" for="orangeForm-email">Enter new password</label>
                                            <input type="email" id="orangeForm-email" class="form-control validate">
                                         
                                            <label data-error="wrong" data-success="right" for="orangeForm-email">Confirm new password</label>
                                            <input type="email" id="orangeForm-email" class="form-control validate">
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
</body>
</html>