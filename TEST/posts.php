<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php


$conn = new mysqli('localhost','root','','farmbook_db');

if($conn->connect_error){
  die('Connection failed : ' . $conn->connect_error);
 }else{
 $query = "SELECT CONCAT(accounts.firstName, ' ', accounts.lastName) AS `Account Owner`, caption, GROUP_CONCAT(posting_medias.media)
  AS `Medias`,hashtag,dateTime AS `Date and Time` FROM postings INNER JOIN accounts ON postings.acc_id = accounts.id LEFT JOIN posting_medias 
 ON postings.id = posting_medias.posting_id WHERE accounts.lastName = 'Luffy' GROUP BY postings.id;";

$result = mysqli_query($conn,$query);

while($rows = mysqli_fetch_assoc($result))
    {

    ?>
<div class="bg-white p-4 rounded shadow mt-3">
                <!-- author -->
                <div class="d-flex justify-content-between">
                  <!-- avatar -->
                  <div class="d-flex">
                    <img src="../img/profile pics/profile3.jpg" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover">
                    <div>
                      <p class="m-0 fw-bold"><?php echo $rows['Account Owner']?></p>
                      <span class="text-muted fs-7">July 16 at 2:25 pm</span>
                    </div>
                  </div>
               
                </div>
                <!-- post content -->
                <div class="mt-3">
                  <!-- content -->
                  <div>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                      Quae fuga incidunt consequatur tenetur doloremque officia
                      corrupti provident tempore vitae labore?
                    </p>
                    <div class="text-center d-flex gap-2"> 
                      <img src="../img/Vegetables/cabbage-3.jpg" id="myImg" alt="post image" class="img-fluid rounded " style="object-fit: none; object-position: center;   width: 50%;max-height: 230px;">
                      <img src="../img/Vegetables/onions-3.jpg" id="myImg" alt="post image" class="img-fluid rounded " style="object-fit: none; object-position: center;   width: 50%;max-height: 230px;">
                    </div>
               
                  </div>
                  
                    <!-- The Modal -->
                      <div id="myModal" class="modal myModal px-5">
                        <span class="close">×</span>
                        <img class="modal-content " id="img01">
                        <!-- <div id="caption"></div> -->
                    </div>
  
                  <!-- likes & comments -->
                  <div class="post__comment mt-3 position-relative">
   
                    <hr>
                    <!-- comments start-->
                    <div class="accordion" id="accordionExample">
                      <div class="accordion-item border-0">
                      
                        <!-- <hr /> -->
                        <!-- comment & like bar -->
                        <div class="d-flex justify-content-around">
                          <div class=" dropdown-item rounded d-flex justify-content-center align-items-center pointer p-1 ">
                            <button type="button" class="like-btn "> <span class="d-flex justify-content-center "><i class="fas fa-thumbs-up mt-1 mx-3" aria-hidden="true"></i><p class="m-0">Like</p></span></button>
                            
                            
                          </div>
                          <div class=" dropdown-item rounded d-flex justify-content-center align-items-center pointer p-1 ">
                          <button type="button" class="like-btn " data-bs-toggle="collapse" data-bs-target="#collapsePost2" aria-expanded="false" aria-controls="collapsePost2"> <span class="d-flex justify-content-center "><i class="fa-solid fa-comment mt-1 mx-3"></i><p class="m-0">Comment</p></span></button>
                            
                            
                          </div>
                        </div>
                        <!-- comment expand -->
                        <div id="collapsePost2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <hr>
                          <div class="accordion-body">
                            <!-- comment 1 -->
                            <div class="comment-1 d-flex align-items-center p-2">
                              <!-- avatar -->
                              <img src="../img/profile pics/profile5.jpg" alt="avatar" class="rounded-circle me-2" style="width: 40px;height: 40px;object-fit: cover;">
                              <!-- comment text -->
                              <div class="p-3 rounded comment__input w-100">
                                <!-- comment menu of author -->
                                <div class="d-flex justify-content-end">
                                  <!-- icon -->
                                  <i class="fas fa-ellipsis-h text-blue pointer" id="post1CommentMenuButton" data-bs-toggle="dropdown" aria-expanded="false" aria-hidden="true"></i>
                                  <!-- menu -->
                                  <ul class="dropdown-menu border-0 shadow" aria-labelledby="post1CommentMenuButton">
                                   
                                    <li class="d-flex align-items-center">
                                      <a class=" dropdown-item d-flex justify-content-around align-items-center fs-7 " href="#">
                                        Delete Comment
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                                <p class="fw-bold m-0">Paul Walker</p>
                                <p class="m-0 fs-7 bg-gray p-2 rounded">
                                  Lorem ipsum dolor sit amet, consectetur
                                  adipiscing elit.
                                </p>
                              </div>
                            </div>
                            <!-- comment 2 -->
                            <div class="comment-1 d-flex align-items-center p-2">
                              <!-- avatar -->
                              <img src="../img/profile pics/profile6.jpg" alt="avatar" class="rounded-circle me-2" style="width: 40px;height: 40px;object-fit: cover;">
                              <!-- comment text -->
                              <div class="p-3 rounded comment__input w-100">
                                <!-- comment menu of author -->
                                <div class="d-flex justify-content-end">
                                  <!-- icon -->
                                  <i class="fas fa-ellipsis-h text-blue pointer" id="post1CommentMenuButton" data-bs-toggle="dropdown" aria-expanded="false" aria-hidden="true"></i>
                                  <!-- menu -->
                                  <ul class="dropdown-menu border-0 shadow" aria-labelledby="post1CommentMenuButton">
                                   
                                    <li class="d-flex align-items-center">
                                      <a class=" dropdown-item d-flex justify-content-around align-items-center fs-7 " href="#">
                                        Delete Comment
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                                <p class="fw-bold m-0">Peter Parker</p>
                                <p class="m-0 fs-7 bg-gray p-2 rounded">
                                  Lorem ipsum dolor sit amet, consectetur
                                  adipiscing elit.
                                </p>
                              </div>
                             
                            </div>
                            <!-- create comment -->
                            <form class="d-flex my-1">
                              <!-- avatar -->
                              <div class="input-comment d-flex  align-items-center p-3" style="width: 100%;">
                              <div>
                                <img src="../img/profile pics/profile.jpg " alt=" avatar " class="rounded-circle me-2" style=" width: 38px;height: 38px;object-fit: cover;">
                              </div>
                              <!-- input -->
                              
                                <input type="text" class="form-control border-0 rounded-pill bg-gray" placeholder="Write a comment">
                              </div>
                          
                            </form>
                            <!-- end -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end -->
                  </div>
                </div>
              </div>
   
              <?php
            }
}

?>
</body>
</html>
