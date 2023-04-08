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
                            <form action ="#" id="signup_form_classes">
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
                              
                            </form>   
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
                                <form action ="#" id="signup_form_basics">
                                 
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
                                      <input type="email" class="form-control" required id="input_email">
                                    </div>
                                    <div class="mb-1 mt-1 mx-2">
                                      <label for="" class="Last_name" style="font-size: small;">Password</label>
                                      <input type="password" class="form-control" id="input_password">
                                    </div>
                                    <div class="mb-1 mt-1 mx-2">
                                      <label for="email" class="Last_name" style="font-size: small;">Confirm Password</label>
                                      <input type="password" class="form-control" id="input_con_password">
                                    </div>
                                  </div>
                                  <button type="button" class="btn-light btn_back"  data-bs-toggle="modal" data-bs-target="#signUpform"><i class="fa-sharp fa-solid fa-arrow-left"></i></button>  
                                  <button type="button" class="btn-light btn_next" data-bs-toggle="modal" data-bs-target="#next_signUp_Form"><i class="fa-sharp fa-solid fa-arrow-right"></i></button>
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
                                   <form action ="#" class="insert_profile_pic text-center d-block "
                                   id="signup_form_picture">
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


  

   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="dependencies\jquery-3.6.4.js"></script>
<script src="js\get_address.js"></script>

<script>

  //change links
  $("#link_home")[0].setAttribute("href","index.php");
  $("#link_about")[0].setAttribute("href","pages_php/aboutUs.php");
  $("#link_e-learning")[0].setAttribute("href","pages_php/e-learning2.php");


  function select_class(n){
    $("#class")[0].value = n;
  }

  
var fname,lname,mname,email,password,con_password,region,province,city,barangay,contact;
var my_arr = [fname,lname,mname,email,password,con_password,region,province,city,barangay,contact]
var my_ids = ["input_fname","input_lname","input_mname","input_email","input_password","input_con_password",
"input_region","input_province","input_city","input_barangay",'input_contact']

  function get_value(id){
    return $("#"+id)[0].value;
  }

  function store(vars,ids){
    //get everything as is to restore
    for(var i = 0; i< vars.length; i++){
        vars[i] = get_value(ids[i]);
        console.log(vars[i]);
    }

  }

  function store2(fname,lname,mname,email,password,con_password,region,province,city,barangay,contact){
    //get everything as text to put on the db
    fname = get_value("input_fname");
    mname = get_value("input_mname");
    lname = get_value("input_lname");
    email = get_value("input_email");
    password = get_value("input_password");
    con_password = get_value("input_con_password");
    region = $("#input_region option:selected").text();
    province = $("#input_province option:selected").text();
    city = $("#input_city option:selected").text();
    barangay = $("#input_barangay option:selected").text()
    
  }






</script>
</html>