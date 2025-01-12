<?php 
     
$conn = new mysqli('localhost','root','','farmbook_db');

if($conn->connect_error){
  die('Connection failed : ' . $conn->connect_error);
 }else{

$query = 'SELECT t1.id, t1.firstName, t1.lastName,t2.profilePic as `profile`,t2.dateTime, t2.status 
FROM `accounts` as t1
INNER JOIN `profile_pictures` as t2
ON t1.id = t2.acc_id
WHERE (t1.id = "'.$_SESSION['acc_id'].'") AND status = 1';

$result = mysqli_query($conn,$query);

$profile;


while($rows = mysqli_fetch_assoc($result))
    {
      if($rows['profile'] == NULL){
        $profile = 'src = ../img/avatar_placeholder.png';
      }else{
       $profile = 'src=data:img/jpeg;base64,'.base64_encode($rows['profile']) ;
      }

      ?>


<?php
        }
      }
    ?>  

      <div class="d-flex align-items-center fixed-top shadow " style="min-height: 56px; z-index: 5; background-color: #57744B;">
        <div class="container-fluid">
          <div class="row align-items-center" style="background-color: #57744B; height: 80px;">
            <!-- search -->
            <div class="col-4  d-flex align-items-center">
              <!-- logo -->
         
              <!-- <h1  style="font-family: 'Archivo Black'; color: #FFDE59; ">FarmBook</h1>   -->
              <img src="../img/farmbook_logo.png" alt="" class="Logo rounded-circlep-1 mx-2 " style="width: 60px; height: 60px;border-color: black;">
              <!-- search bar -->
              <div class="input-group ms-1" type="button">
                <!-- mobile -->
                <span
                class="input-group-prepend d-lg-none"
                id="searchMenu"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                data-bs-auto-close="outside"
              >
                <div
                  class="input-group-text bg-gray border-0 rounded-circle"
                  style="min-height: 40px"
                >
                  <i class="fas fa-search text-muted"></i>
                </div>
              </span>
                <!-- desktop -->
                <span class="input-group-prepend d-none d-lg-block" id="searchMenu" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                  <div
                    class="input-group-text bg-gray border-0 rounded-pill"
                    style="min-height: 40px; min-width: 300px"
                  >
                    <i class="fas fa-search me-1 text-muted"></i>
                    <p class="m-0 fs-7 text-muted">Search</p>
                  </div>
                </span>
                <!-- search menu -->
                <ul
                  class="dropdown-menu overflow-auto border-0 shadow p-3"
                  aria-labelledby="searchMenu"
                  style="width: 20em; max-height: 600px"
                >
                  <!-- search input -->
                  <li>
                    <input
                      type="text"
                      class="rounded-pill border-0 bg-gray dropdown-item"
                      placeholder="Search Flexbook..."
                      autofocus
                    />
                  </li>
                  <!-- search 1 -->
                  <li class="my-4">
                    <div class="
                        alert
                        fade
                        show
                        dropdown-item
                        p-1
                        m-0
                        d-flex
                        align-items-center
                        justify-content-between
                      "
                      role="alert"
                    >
                      <div class="d-flex align-items-center">
                        <img
                          src="../img/profile pics/profile2.png"
                          alt="avatar"
                          class="rounded-circle me-2"
                          style="width: 35px; height: 35px; object-fit: cover"
                        />
                        <p class="m-0">Lorem ipsum</p>
                      </div>
                      <button
                        type="button"
                        class="btn-close p-0 m-0"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                      ></button>
                    </div>
                  </li>
                  <!-- search 2 -->
                  <li class="my-4">
                    <div
                      class="
                        alert
                        fade
                        show
                        dropdown-item
                        p-1
                        m-0
                        d-flex
                        align-items-center
                        justify-content-between
                      "
                      role="alert"
                    >
                      <div class="d-flex align-items-center">
                        <img
                          src="../img/profile pics/profile2.png"
                          alt="avatar"
                          class="rounded-circle me-2"
                          style="width: 35px; height: 35px; object-fit: cover"
                        />
                        <p class="m-0">Lorem ipsum</p>
                      </div>
                      <button
                        type="button"
                        class="btn-close p-0 m-0"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                      ></button>
                    </div>
                  </li>
                  <!-- search 3 -->
                  <li class="my-4">
                    <div
                      class="
                        alert
                        fade
                        show
                        dropdown-item
                        p-1
                        m-0
                        d-flex
                        align-items-center
                        justify-content-between
                      "
                      role="alert"
                    >
                      <div class="d-flex align-items-center">
                        <img
                          src="../img/profile pics/profile2.png"
                          alt="avatar"
                          class="rounded-circle me-2"
                          style="width: 35px; height: 35px; object-fit: cover"
                        />
                        <p class="m-0">Lorem ipsum</p>
                      </div>
                      <button
                        type="button"
                        class="btn-close p-0 m-0"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                      ></button>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
      
            <!-- menus -->
            <div class="col-8 d-flex align-items-center justify-content-end">
              <!-- avatar -->
              <!-- main menu -->
              <div class="nav-menu-btn rounded-circle  d-flex  align-items-center  justify-content-center mx-1 p-3 "  type="button" id="chatMenu"data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <i class="fa-solid fa-ellipsis"></i>
              </div>
              <!-- main menu dd -->
              <ul
                class="dropdown-menu border-0 shadow p-3 overflow-auto"
                aria-labelledby="mainMenu"
                style="width: 23em; max-height: 600px"
              >
                <!-- menu -->
                <div>
                  <!-- header -->
                  <li class="p-1 mx-2">
                    <h2>Menu</h2>
                  </li>
                  <!-- search -->
               
                  <!-- social items -->
              
               
                  <!-- s1 -->
                  <li class="my-2 p-1">
                    <a href="#" class="text-decoration-none text-dark d-flex align-items-centerjustify-content-between ">
                      <div class="p-2"> 
                        <i class="fa-solid fa-user-group "   style="font-size: 35px; object-fit: cover;"></i>
                      </div>
                   
                      <div>
                        <p class="m-1 h4">Friends</p>
                        <!-- <span class="fs-7 text-muted" >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio, commodi.</span> -->
                      </div>
                    </a>
                  </li>
                  <!-- s2 -->
                  <li class="my-2 p-1">
                    <a href="marketplace.php" class="text-decoration-none text-dark d-flex align-items-centerjustify-content-between ">
                      <div class="p-2"> 
                   
                        <i class="fas fa-shop "   style="font-size: 35px; object-fit: cover;"></i>
                        
                      </div>
                   
                      <div>
                        <p class="m-1 h4">Marketplace</p>
                        <!-- <span class="fs-7 text-muted" >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio, commodi.</span> -->
                      </div>
                    </a>
                  </li>
  
                   <!-- s3 -->
                   <li class="my-2 p-1">
                    <a href="e-learning.php" class="text-decoration-none text-dark d-flex align-items-centerjustify-content-between ">
                      <div class="p-2"> 
                   
                        <i class="fa-solid fa-book" style="font-size: 35px; object-fit: cover;"></i>
                        
                      </div>
                   
                      <div>
                        <p class="m-1 h4">E-Learning</p>
                        <!-- <span class="fs-7 text-muted" >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio, commodi.</span> -->
                      </div>
                    </a>
                  </li>
               
                
            
              </ul>
              <!-- chat -->
              <div class=" nav-menu-btn rounded-circle  d-flex  align-items-center  justify-content-center mx-1 p-3 "  type="button" id="chatMenu"data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <i class="fa-solid fa-envelope"></i>
              </div>
              <!-- chat  dd -->
              <ul
                class="dropdown-menu border-0 shadow p-3 overflow-auto"
                aria-labelledby="chatMenu"
                style="width: 23em; max-height: 600px"
              >
                <!-- header -->
                <li class="p-1">
                  <div class="d-flex justify-content-between">
                    <h2>Message</h2>
                    <div>
                      <!-- expand message -->
                      <i class="fas fa-expand-arrows-alt text-muted mx-2"  type="button" ></i>
                      <!-- new message -->
                      <i class="fas fa-edit text-muted mx-2" type="button"  data-bs-toggle="modal" data-bs-target="#newChat"></i>
                    </div>
                  </div>
                </li>
                <!-- search -->
                <li class="p-1">
                  <div
                    class="input-group-text bg-gray border-0 rounded-pill"
                    style="min-height: 40px; min-width: 230px"
                  >
                    <i class="fas fa-search me-2 text-muted"></i>
                    <input
                      type="text"
                      class="form-control rounded-pill border-0 bg-gray"
                      placeholder="Search Message"
                    />
                  </div>
                </li>
                <!-- message 1 -->
                
                <li class="my-2 messages1 p-1" type="button" data-bs-toggle="modal"data-bs-target="#singleChat1">
                  <div class="d-flex align-items-center justify-content-between">
                    <!-- big avatar -->
                    <div class="d-flex align-items-center justify-content-evenly">
                      <div class="p-2">
                        <img src="../img/profile pics/profile2.png" alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover"/>
                      </div>
                      <div>
                        <p class="fs-7 m-0">Izuku Midoriya</p>
                        <span class="fs-7 text-muted"
                          >Lorem ipsum &#8226; 7d
                        </span>
                      </div>
                    </div>
                    <!-- small avatar -->
                    <div class="p-2">
                      <img  src="../img/profile pics/profile2.png" alt="avatar" class="rounded-circle" style="width: 15px; height: 15px; object-fit: cover"/>
                    </div>
                  </div>
                </li>
  
  
               <!-- message 2 -->
               <li class="my-2 messages1 p-1" type="button" data-bs-toggle="modal"data-bs-target="#singleChat2">
                <div class="d-flex align-items-center justify-content-between">
                  <!-- big avatar -->
                  <div class="d-flex align-items-center justify-content-evenly">
                    <div class="p-2">
                      <img src="../img/profile pics/profile3.jpg" alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover"/>
                    </div>
                    <div>
                      <p class="fs-7 m-0">Frank Ocean</p>
                      <span class="fs-7 text-muted"
                        >Lorem ipsum &#8226; 7d
                      </span>
                    </div>
                  </div>
                  <!-- small avatar -->
                  <div class="p-2">
                    <img  src="../img/profile pics/profile3.png" alt="avatar" class="rounded-circle" style="width: 15px; height: 15px; object-fit: cover"/>
                  </div>
                </div>
              </li>
            <!-- message 3 -->
            <li class="my-2 messages1 p-1" type="button" data-bs-toggle="modal"data-bs-target="#singleChat3">
              <div class="d-flex align-items-center justify-content-between">
                <!-- big avatar -->
                <div class="d-flex align-items-center justify-content-evenly">
                  <div class="p-2">
                    <img src="../img/profile pics/profile4.jpg" alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover"/>
                  </div>
                  <div>
                    <p class="fs-7 m-0">LeBron James</p>
                    <span class="fs-7 text-muted"
                      >Lorem ipsum &#8226; 7d
                    </span>
                  </div>
                </div>
                <!-- small avatar -->
                <div class="p-2">
                  <img  src="../img/profile pics/profile4.jpg" alt="avatar" class="rounded-circle" style="width: 15px; height: 15px; object-fit: cover"/>
                </div>
              </div>
            </li>
       
               
              </ul>
              <!-- notifications -->
             
              <div class=" nav-menu-btn rounded-circle  d-flex  align-items-center  justify-content-center mx-1 p-3" type="button" id="chatMenu"data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <i class="fa-solid fa-bell"></i>
              </div>
              <ul
                class="dropdown-menu border-0 shadow p-3"
                aria-labelledby="notMenu"
                style="width: 29rem; max-height: 600px; overflow-y: auto"
              >
                <!-- header -->
                <li class="p-1">
                  <div class="d-flex justify-content-between">
                    <h2>Notifications</h2>
                    
                  </div>
                 
                </li>
                <!-- news -->
                <div class="d-flex justify-content-between mx-2">
                  <h5>New</h5>
                  <a href="#" class="text-decoration-none">See All</a>
                </div>
                <!-- news 1 -->
                <li class="my-2 p-1">
                  <a href="#" class="d-flex align-items-center= justify-content-evenly text-decoration-none text-dark">
                    <div class="p-2" >
                      <img src="../img/profile pics/profile2.png" alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover"/>
                    </div>
                    <div class="d-flex align-items-center justify-content-evenly">
                    
                      <div>
                        <h5>Izuku Midoriya</h5>
                        <p class="fs-7 m-0">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        
                        </p>
                        <span class="fs-7 text-primary">about an hour ago</span>
                      </div>
                    </div>
                    <i class="fas fa-circle fs-7 text-primary"></i>
                  </a>
                </li>
                <!-- news 2 -->
                <li class="my-2 p-1">
                  <a href="#" class="d-flex align-items-center= justify-content-evenly text-decoration-none text-dark">
                    <div class="p-2" >
                      <img src="../img/profile pics/profile3.jpg" alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover"/>
                    </div>
                    <div class="d-flex align-items-center justify-content-evenly">
                    
                      <div>
                        <h5>Izuku Midoriya</h5>
                        <p class="fs-7 m-0">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        
                        </p>
                        <span class="fs-7 text-primary">about an hour ago</span>
                      </div>
                    </div>
                    <i class="fas fa-circle fs-7 text-primary"></i>
                  </a>
                </li>
                <!-- news 3 -->
                <li class="my-2 p-1">
                  <a href="#" class="d-flex align-items-center= justify-content-evenly text-decoration-none text-dark">
                    <div class="p-2" >
                      <img src="../img/profile pics/profile4.jpg" alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover"/>
                    </div>
                    <div class="d-flex align-items-center justify-content-evenly">
                    
                      <div>
                        <h5>Izuku Midoriya</h5>
                        <p class="fs-7 m-0">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        
                        </p>
                        <span class="fs-7 text-primary">about an hour ago</span>
                      </div>
                    </div>
                    <i class="fas fa-circle fs-7 text-primary"></i>
                  </a>
                </li>
                
              </ul>
  
              <!-- secondary menu -->
              <div class=" rounded-circle p-1 d-flex  align-items-center  justify-content-center mx-2 " type="button" id="chatMenu"data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <img <?php echo '"'.$profile.'"'?> class="rounded-circle me-2" alt="avatar" style="width: 40px; height: 40px; object-fit: cover"
                id = "profile_navbar_right"/>
                
              </div>
              <!-- secondary menu dd -->
              <ul
                class="dropdown-menu border-0 shadow p-3"
                aria-labelledby="secondMenu"
                style="width: 23em"
              >
                <!-- avatar -->
                <li class="dropdown-item p-1 rounded d-flex">
                 <img <?php echo $profile?> class="rounded-circle me-2" alt="avatar" style="width: 40px; height: 40px; object-fit: cover"
                 id = "dropdown_profile"/>
                  <!--  -->
                  <div>
                    <p class="m-0" id ="small_name"><?php echo $_SESSION['firstName']." ".$_SESSION['lastName']?></p>
                    <a href="profile.php">
                    <p class="m-0 text-muted">See your profile</p></a>
                  </div>
                </li>
           
              
                <li class="dropdown-item p-1 my-3 rounded" type="button">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a
                        href="../php_func/logout.php"
                        class="d-flex text-decoration-none text-dark"
                      >
                        <i class="fas fa-cog bg-gray p-2 rounded-circle"></i>
                        <div
                          class="
                            ms-3
                            d-flex
                            justify-content-between
                            align-items-center
                            w-100
                          "
                        >
                          <p class="m-0">Log Out</p>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
              <!-- end -->
            </div>
          </div>
        </div>
      </div>
      <!-- =============== New Chat Mobile =============== -->
      <div class="modal fade" id="newChat" tabindex="-1" aria-labelledby="newChatLabel" aria-hidden="true" data-bs-backdrop="false">
        <div class="  modal-dialog modal-sm position-absolute bottom-0 end-0  w-80 shadow " style="transform: translateX(-70px)">
          <div class="modal-content border-0 w-100">
            <!-- head -->
            <div class="modal-header align-items-start">
              <div>
                <h6 class="modal-title text-dark mb-2" id="newChat1Label">
                  New Message
                </h6>
                <label class="text-dark">To:</label>
                <input type="text" class="border-0" />
              </div>
              <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close" ></button>
            </div>
            <!-- body -->
           
            <!-- footer -->
            <div class="modal-footer border-0" style="min-height: 300px"></div>
          </div>
        </div>
      </div>
      <!-- ================= Chat Modal Mobile ================= -->
      <!-- chat 1 -->
      <div class="modal  fade mx-3 "   id="singleChat1" tabindex="-1" aria-labelledby="singleChat1Label" aria-hidden="true" data-bs-backdrop="false">
      <div
        class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17"
        style="transform: translateX(-70px)"
      >
        <div class="modal-content border-0 shadow w-100">
          <!-- head -->
          <div class="modal-header" style=" background-color:#FFDE59;">
            <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body"  data-bs-toggle="popover" data-bs-placement="left" data-bs-html="true">
              <!-- avatar -->
              <div class="position-relative">
                <img src="../img/profile pics/profile2.png"  alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover;"/>
                <span class=" position-absolute bottom-0 translate-middle  p-1 bg-success  border border-light rounded-circle" style="left: 75%;">
                  <span class="visually-hidden">New alerts</span>
                </span>
              </div>
              <!-- name -->
              <div>
                <p class="m-0">Izuku Midoriya</p>
                <span class="text-muted fs-7">Active Now</span>
              </div>
            </div>
            <!-- close -->
   
            <button type="button" class="btn-close"data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <!-- body -->
          <div class="modal-body p-0 overflow-auto" style="max-height: 300px; background-color: rgb(244, 244, 244);">
            <!-- message l -->
            <li class="list-group-item border-0 d-flex mt-2" style="margin-left: 20px;">
              <!-- avatar -->
              <div>
                <img src="../img/profile pics/profile2.png"alt="avatar" class="rounded-circle me-2"style="width: 30px; height: 30px; object-fit: cover"/>
              </div>
              <!-- message -->
              <p class="p-2 rounded" style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
            </li>
  
            <!-- message r -->
            <li class="list-group-item border-0 d-flex justify-content-end" style="margin-right: 20px;">
              <!-- message -->
              <p class="bg-gray p-2 rounded"  style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
              <!-- avatar -->
              <div>
                <img src="../img/profile pics/profile2.jpg" alt="avatar" class="rounded-circle ms-2" style="width: 30px; height: 30px; object-fit: cover"/>
              </div>
            </li>
           
        <!-- message l -->
        <li class="list-group-item border-0 d-flex mt-2" style="margin-left: 20px;">
          <!-- avatar -->
          <div>
            <img src="/img/profile pics/profile2.png"alt="avatar" class="rounded-circle me-2"style="width: 30px; height: 30px; object-fit: cover"/>
          </div>
          <!-- message -->
          <p class="p-2 rounded" style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
        </li>
  
        <!-- message r -->
        <li class="list-group-item border-0 d-flex justify-content-end" style="margin-right: 20px;">
          <!-- message -->
          <p class="bg-gray p-2 rounded"  style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
          <!-- avatar -->
          <div>
            <img src="../img/profile pics/profile.jpg" alt="avatar" class="rounded-circle ms-2" style="width: 30px; height: 30px; object-fit: cover"/>
          </div>
        </li>
  
        <!-- message l -->
        <li class="list-group-item border-0 d-flex mt-2" style="margin-left: 20px;">
          <!-- avatar -->
          <div>
            <img src="../img/profile pics/profile2.png"alt="avatar" class="rounded-circle me-2"style="width: 30px; height: 30px; object-fit: cover"/>
          </div>
          <!-- message -->
          <p class="p-2 rounded" style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
        </li>
  
        <!-- message r -->
        <li class="list-group-item border-0 d-flex justify-content-end" style="margin-right: 20px;">
          <!-- message -->
          <p class="bg-gray p-2 rounded"  style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
          <!-- avatar -->
          <div>
            <img src="../img/profile pics/profile.jpg" alt="avatar" class="rounded-circle ms-2" style="width: 30px; height: 30px; object-fit: cover"/>
          </div>
        </li>
         
            
          </div>
          <!-- message input -->
          <div class="modal-footer p-0 m-0 border-0 mb-2">
            <div class="d-flex">
              <div class="d-flex align-items-center mx-3" >
                <label for="send_img"><i class="fa-solid fa-image" style=" font-size: 20px;"></i></label>
                <input type="file" class="send_img" id="send_img" name="myfile" style="display: none; ">
        
                <!-- <i class="fa-solid fa-image mx-1 fs-5 text-muted pointer"></i> -->
              </div>
  
              <div>
                <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Aa"/>
              </div>
  
              <div class="d-flex align-items-center mx-2    ">
          
                <button type="submit" class="send_btn" > <i class="material-icons">send</i></button>
                 
              
           
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- chat 2 -->
    <div class="modal fade mx-3"  id="singleChat2" tabindex="-1" aria-labelledby="singleChat1Label" aria-hidden="true" data-bs-backdrop="false">
      <div
        class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17"
        style="transform: translateX(-70px)"
      >
        <div class="modal-content border-0 shadow w-100">
          <!-- head -->
          <div class="modal-header" style=" background-color:#FFDE59;">
            <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body"  data-bs-toggle="popover" data-bs-placement="left" data-bs-html="true">
              <!-- avatar -->
              <div class="position-relative">
                <img src="../img/profile pics/profile3.jpg"  alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover;"/>
                <span class=" position-absolute bottom-0 translate-middle  p-1 bg-success  border border-light rounded-circle" style="left: 75%;">
                  <span class="visually-hidden">New alerts</span>
                </span>
              </div>
              <!-- name -->
              <div>
                <p class="m-0">Izuku Midoriya</p>
                <span class="text-muted fs-7">Active Now</span>
              </div>
            </div>
            <!-- close -->
   
            <button type="button" class="btn-close"data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <!-- body -->
          <div class="modal-body p-0 overflow-auto" style="max-height: 300px; background-color: rgb(244, 244, 244);">
            <!-- message l -->
            <li class="list-group-item border-0 d-flex mt-2" style="margin-left: 20px;">
              <!-- avatar -->
              <div>
                <img src="../img/profile pics/profile3.jpg"alt="avatar" class="rounded-circle me-2"style="width: 30px; height: 30px; object-fit: cover"/>
              </div>
              <!-- message -->
              <p class="p-2 rounded" style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
            </li>
  
            <!-- message r -->
            <li class="list-group-item border-0 d-flex justify-content-end" style="margin-right: 20px;">
              <!-- message -->
              <p class="bg-gray p-2 rounded"  style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
              <!-- avatar -->
              <div>
                <img src="../img/profile pics/profile.jpg" alt="avatar" class="rounded-circle ms-2" style="width: 30px; height: 30px; object-fit: cover"/>
              </div>
            </li>
           
        <!-- message l -->
        <li class="list-group-item border-0 d-flex mt-2" style="margin-left: 20px;">
          <!-- avatar -->
          <div>
            <img src="../img/profile pics/profile3.jpg"alt="avatar" class="rounded-circle me-2"style="width: 30px; height: 30px; object-fit: cover"/>
          </div>
          <!-- message -->
          <p class="p-2 rounded" style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
        </li>
  
        <!-- message r -->
        <li class="list-group-item border-0 d-flex justify-content-end" style="margin-right: 20px;">
          <!-- message -->
          <p class="bg-gray p-2 rounded"  style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
          <!-- avatar -->
          <div>
            <img src="../img/profile pics/profile.jpg" alt="avatar" class="rounded-circle ms-2" style="width: 30px; height: 30px; object-fit: cover"/>
          </div>
        </li>
  
        <!-- message l -->
        <li class="list-group-item border-0 d-flex mt-2" style="margin-left: 20px;">
          <!-- avatar -->
          <div>
            <img src="../img/profile pics/profile3.jpg"alt="avatar" class="rounded-circle me-2"style="width: 30px; height: 30px; object-fit: cover"/>
          </div>
          <!-- message -->
          <p class="p-2 rounded" style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
        </li>
  
        <!-- message r -->
        <li class="list-group-item border-0 d-flex justify-content-end" style="margin-right: 20px;">
          <!-- message -->
          <p class="bg-gray p-2 rounded"  style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
          <!-- avatar -->
          <div>
            <img src="../img/profile pics/profile.jpg" alt="avatar" class="rounded-circle ms-2" style="width: 30px; height: 30px; object-fit: cover"/>
          </div>
        </li>
         
            
          </div>
          <!-- message input -->
          <div class="modal-footer p-0 m-0 border-0 mb-2">
            <div class="d-flex">
              <div class="d-flex align-items-center mx-3" >
                <label for="send_img"><i class="fa-solid fa-image" style=" font-size: 20px;"></i></label>
                <input type="file" class="send_img" id="send_img" name="myfile" style="display: none; ">
        
                <!-- <i class="fa-solid fa-image mx-1 fs-5 text-muted pointer"></i> -->
              </div>
  
              <div>
                <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Aa"/>
              </div>
  
              <div class="d-flex align-items-center mx-2    ">
            
                <button type="submit" class="send_btn" > <i class="material-icons">send</i></button>
       
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- chat 3 -->
      <div class="modal fade mx-3"  id="singleChat3" tabindex="-1" aria-labelledby="singleChat1Label" aria-hidden="true" data-bs-backdrop="false">
        <div
          class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17"
          style="transform: translateX(-70px)"
        >
          <div class="modal-content border-0 shadow w-100">
            <!-- head -->
            <div class="modal-header" style=" background-color:#FFDE59;">
              <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body"  data-bs-toggle="popover" data-bs-placement="left" data-bs-html="true">
                <!-- avatar -->
                <div class="position-relative">
                  <img src="../img/profile pics/profile4.jpg"  alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover;"/>
                  <span class=" position-absolute bottom-0 translate-middle  p-1 bg-success  border border-light rounded-circle" style="left: 75%;">
                    <span class="visually-hidden">New alerts</span>
                  </span>
                </div>
                <!-- name -->
                <div>
                  <p class="m-0">Izuku Midoriya</p>
                  <span class="text-muted fs-7">Active Now</span>
                </div>
              </div>
              <!-- close -->
     
              <button type="button" class="btn-close"data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- body -->
            <div class="modal-body p-0 overflow-auto" style="max-height: 300px; background-color: rgb(244, 244, 244);">
              <!-- message l -->
              <li class="list-group-item border-0 d-flex mt-2" style="margin-left: 20px;">
                <!-- avatar -->
                <div>
                  <img src="../img/profile pics/profile4.jpg"alt="avatar" class="rounded-circle me-2"style="width: 30px; height: 30px; object-fit: cover"/>
                </div>
                <!-- message -->
                <p class="p-2 rounded" style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
              </li>
    
              <!-- message r -->
              <li class="list-group-item border-0 d-flex justify-content-end" style="margin-right: 20px;">
                <!-- message -->
                <p class="bg-gray p-2 rounded"  style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
                <!-- avatar -->
                <div>
                  <img src="../img/profile pics/profile.jpg" alt="avatar" class="rounded-circle ms-2" style="width: 30px; height: 30px; object-fit: cover"/>
                </div>
              </li>
             
          <!-- message l -->
          <li class="list-group-item border-0 d-flex mt-2" style="margin-left: 20px;">
            <!-- avatar -->
            <div>
              <img src="../img/profile pics/profile4.jpg"alt="avatar" class="rounded-circle me-2"style="width: 30px; height: 30px; object-fit: cover"/>
            </div>
            <!-- message -->
            <p class="p-2 rounded" style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
          </li>
    
          <!-- message r -->
          <li class="list-group-item border-0 d-flex justify-content-end" style="margin-right: 20px;">
            <!-- message -->
            <p class="bg-gray p-2 rounded"  style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
            <!-- avatar -->
            <div>
              <img src="../img/profile pics/profile.jpg" alt="avatar" class="rounded-circle ms-2" style="width: 30px; height: 30px; object-fit: cover"/>
            </div>
          </li>
    
          <!-- message l -->
          <li class="list-group-item border-0 d-flex mt-2" style="margin-left: 20px;">
            <!-- avatar -->
            <div>
              <img src="../img/profile pics/profile4.jpg"alt="avatar" class="rounded-circle me-2"style="width: 30px; height: 30px; object-fit: cover"/>
            </div>
            <!-- message -->
            <p class="p-2 rounded" style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
          </li>
    
          <!-- message r -->
          <li class="list-group-item border-0 d-flex justify-content-end" style="margin-right: 20px;">
            <!-- message -->
            <p class="bg-gray p-2 rounded"  style="background-color: rgb(180, 174, 174);">Lorem, ipsum dolor</p>
            <!-- avatar -->
            <div>
              <img src="../img/profile pics/profile.jpg" alt="avatar" class="rounded-circle ms-2" style="width: 30px; height: 30px; object-fit: cover"/>
            </div>
          </li>
           
              
            </div>
            <!-- message input -->
            <div class="modal-footer p-0 m-0 border-0 mb-2">
              <div class="d-flex">
                <div class="d-flex align-items-center mx-3" >
                  <label for="send_img"><i class="fa-solid fa-image" style=" font-size: 20px;"></i></label>
                  <input type="file" class="send_img" id="send_img" name="myfile" style="display: none; ">
          
                  <!-- <i class="fa-solid fa-image mx-1 fs-5 text-muted pointer"></i> -->
                </div>
    
                <div>
                  <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Aa"/>
                </div>
    
                <div class="d-flex align-items-center mx-2    ">
              
                  <button type="submit" class="send_btn" > <i class="material-icons">send</i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- chat 4 -->
      <div
        class="modal fade"
        id="singleChat4"
        tabindex="-1"
        aria-labelledby="singleChat4Label"
        aria-hidden="true"
        data-bs-backdrop="false"
      >
        <div
          class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17"
          style="transform: translateX(-80px)"
        >
          <div class="modal-content border-0 shadow">
            <!-- head -->
            <div class="modal-header">
              <div
                class="dropdown-item d-flex rounded"
                type="button"
                data-bs-container="body"
                data-bs-toggle="popover"
                data-bs-placement="left"
                data-bs-content='
                        <div>
                          <div class="popover-body d-flex flex-column p-0">
                            <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                              <i class="far fa-comment me-3 fs-4"></i>
                              <p class="m-0">Open Messenger App</p>
                            </div>
                            <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                              <i class="far fa-user me-3 fs-4"></i>
                              <p class="m-0">Open Messenger App</p>
                            </div>
                            <hr>
                            <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                              <i class="fas fa-fill-drip me-3 fs-4"></i>
                              <p class="m-0">Color</p>
                            </div>
                            <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                              <i class="far fa-smile-beam me-3 fs-4"></i>
                              <p class="m-0">Emoji</p>
                            </div>
                            <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                              <i class="fas fa-pencil-alt me-3 fs-4"></i>
                              <p class="m-0">Nicknames</p>
                            </div>
                          </div>
                        </div>
                        '
                data-bs-html="true"
              >
                <!-- avatar -->
                <div class="position-relative">
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle me-2"
                    style="width: 38px; height: 38px; object-fit: cover"
                  />
                  <span
                    class="
                      position-absolute
                      bottom-0
                      translate-middle
                      p-1
                      bg-success
                      border border-light
                      rounded-circle
                    "
                    style="left: 75%"
                  >
                    <span class="visually-hidden">New alerts</span>
                  </span>
                </div>
                <!-- name -->
                <div>
                  <p class="m-0">Tony <i class="fas fa-angle-down"></i></p>
                  <span class="text-muted fs-7">Active Now</span>
                </div>
              </div>
              <!-- close -->
              <i class="fas fa-video mx-2 text-muted pointer"></i>
              <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <!-- body -->
            <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
              <!-- message l -->
              <li class="list-group-item border-0 d-flex">
                <!-- avatar -->
                <div>
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle me-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              </li>
              <!-- message r -->
              <li class="list-group-item border-0 d-flex justify-content-end">
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                <!-- avatar -->
                <div>
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle ms-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
              </li>
              <!-- message l -->
              <li class="list-group-item border-0 d-flex">
                <!-- avatar -->
                <div>
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle me-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              </li>
              <!-- message r -->
              <li class="list-group-item border-0 d-flex justify-content-end">
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                <!-- avatar -->
                <div>
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle ms-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
              </li>
              <!-- message l -->
              <li class="list-group-item border-0 d-flex">
                <!-- avatar -->
                <div>
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle me-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              </li>
              <!-- message r -->
              <li class="list-group-item border-0 d-flex justify-content-end">
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                <!-- avatar -->
                <div>
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle ms-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
              </li>
            </div>
            <!-- message input -->
            <div class="modal-footer p-0 m-0 border-0">
              <div class="d-flex">
                <div class="d-flex align-items-center">
                  <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
                  <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
                  <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
                  <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
                </div>
                <div>
                  <input
                    type="text"
                    class="form-control rounded-pill border-0 bg-gray"
                    placeholder="Aa"
                  />
                </div>
                <div class="d-flex align-items-center mx-2">
                  <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- chat 5 -->
      <div
        class="modal fade"
        id="singleChat5"
        tabindex="-1"
        aria-labelledby="singleChat5Label"
        aria-hidden="true"
        data-bs-backdrop="false"
      >
        <div
          class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17"
          style="transform: translateX(-80px)"
        >
          <div class="modal-content border-0 shadow">
            <!-- head -->
            <div class="modal-header">
              <div
                class="dropdown-item d-flex rounded"
                type="button"
                data-bs-container="body"
                data-bs-toggle="popover"
                data-bs-placement="left"
                data-bs-content='
                            <div>
                              <div class="popover-body d-flex flex-column p-0">
                                <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                  <i class="far fa-comment me-3 fs-4"></i>
                                  <p class="m-0">Open Messenger App</p>
                                </div>
                                <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                  <i class="far fa-user me-3 fs-4"></i>
                                  <p class="m-0">Open Messenger App</p>
                                </div>
                                <hr>
                                <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                  <i class="fas fa-fill-drip me-3 fs-4"></i>
                                  <p class="m-0">Color</p>
                                </div>
                                <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                  <i class="far fa-smile-beam me-3 fs-4"></i>
                                  <p class="m-0">Emoji</p>
                                </div>
                                <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                  <i class="fas fa-pencil-alt me-3 fs-4"></i>
                                  <p class="m-0">Nicknames</p>
                                </div>
                              </div>
                            </div>
                            '
                data-bs-html="true"
              >
                <!-- avatar -->
                <div class="position-relative">
                  <img
                    src="h../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle me-2"
                    style="width: 38px; height: 38px; object-fit: cover"
                  />
                  <span
                    class="
                      position-absolute
                      bottom-0
                      translate-middle
                      p-1
                      bg-success
                      border border-light
                      rounded-circle
                    "
                    style="left: 75%"
                  >
                    <span class="visually-hidden">New alerts</span>
                  </span>
                </div>
                <!-- name -->
                <div>
                  <p class="m-0">Phu <i class="fas fa-angle-down"></i></p>
                  <span class="text-muted fs-7">Active Now</span>
                </div>
              </div>
              <!-- close -->
              <i class="fas fa-video mx-2 text-muted pointer"></i>
              <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <!-- body -->
            <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
              <!-- message l -->
              <li class="list-group-item border-0 d-flex">
                <!-- avatar -->
                <div> 
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle me-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              </li>
              <!-- message r -->
              <li class="list-group-item border-0 d-flex justify-content-end">
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                <!-- avatar -->
                <div>
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle ms-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
              </li>
              <!-- message l -->
              <li class="list-group-item border-0 d-flex">
                <!-- avatar -->
                <div>
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle me-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              </li>
              <!-- message r -->
              <li class="list-group-item border-0 d-flex justify-content-end">
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                <!-- avatar -->
                <div>
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle ms-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
              </li>
              <!-- message l -->
              <li class="list-group-item border-0 d-flex">
                <!-- avatar -->
                <div>
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle me-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              </li>
              <!-- message r -->
              <li class="list-group-item border-0 d-flex justify-content-end">
                <!-- message -->
                <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                <!-- avatar -->
                <div>
                  <img
                    src="../img/profile pics/profile2.png"
                    alt="avatar"
                    class="rounded-circle ms-2"
                    style="width: 28px; height: 28px; object-fit: cover"
                  />
                </div>
              </li>
            </div>
            <!-- message input -->
            <div class="modal-footer p-0 m-0 border-0">
              <div class="d-flex">
                <div class="d-flex align-items-center">
                  <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
                  <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
                  <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
                  <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
                </div>
                <div>
                  <input
                    type="text"
                    class="form-control rounded-pill border-0 bg-gray"
                    placeholder="Aa"
                  />
                </div>
                <div class="d-flex align-items-center mx-2">
                  <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

   