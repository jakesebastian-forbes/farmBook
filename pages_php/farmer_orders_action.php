<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css.css"> -->
    <title>ORDERS | MARKETPLACE | FARMER</title>
</head>
<style>
  tr:nth-child(even) {
    background-color: #E5F4E7;
  }
  .myCard {
    /* background-color: red; */
    background: linear-gradient(to bottom, #B0EACD 0%, #F7F7F7 100%);
  }
  /* #tr-color:nth-child(even) {
    background-color: #f2f2f2;
  } */

  .styleBtn:hover {
    background-color: #60EFB8;
  }
</style>

<body>
<?php 
$page_title="action_farmer";
include "../components/nav_bar.php";
?>
        <div class="container my-5" >
          <div class="my-3
           text-end ">
            <select name="" id="selectDate" class="btn-success btn-sm my-5">
              <option value="default">Select Date</option>
              <option value="date1">03/25/23</option>
            </select>
            <select name="" id="selectAction" class="btn-success btn-sm">
              <option value="default">Pending</option>
              <option value="option1">Order Placed</option>
              <option value="option2">Order in Process</option>
              <option value="option3">Order Packed</option>
              <option value="option3">Order Shipped Out</option>
              <option value="option3">Order Delivered</option>
            </select>
          </div>
            <div class="card-group gap-3 my-3">
                <div class="card text-start" >
                  <div class="card-body myCard">
                    <h5 class="card-title">TODAY'S SALE</h5>
                    <div class="d-flex gap-2 my-5 justify-content-md-center">
                      <p class="h1">₱</p>
                      <p class="h1">20,000</p>
                    </div>  
                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                  </div>
                </div>
                <div class="card">
                  <div class="card-body myCard">
                    <h5 class="card-title text-start">PENDING ORDERS</h5>
                    <div class="d-flex gap-2 my-5 justify-content-md-center">
                      <p class="h1">89</p>
                    </div>  
                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                  </div>
                </div>
                <div class="card" style="background-color: #C6EBC5;">
                  <div class="card-body myCard">
                    <h5 class="card-title">TOTAL DELIVERED ORDERS</h5>
                    <div class="d-flex gap-2 my-5 justify-content-md-center">
                      <p class="h1">100</p>
                    </div> 
                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                  </div>
                </div>
            </div>
        </div>
           
        
       <!-- </div> -->
      
        
      
       <div class="container">
        <table class="table table-responsive">
          <thead class="thead-default" style="background-color: #99CDA9;">
            <tr>
              <th>ORDER#</th>
              <th>USERNAME</th>
              <th>DATETIME</th>
              <th>DETAILS</th>
              <th>STATUS</th>
              
            </tr>
          </thead>
          <tbody>
            <tr id="tr-color">
              <th scope="row">1</th>
              <td>Mark</td>
              <td>03/24/23 2:07PM</td>
              <td>
                <button type="button" class="btn btn-success btn-sm styleBtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  View Details
                </button>
              </td>
              <td>
                
                  <select id="myDropdown" onchange="changeDropdownName()" class="selectBtn btn-danger rounded">
                    <option value="default">Pending</option>
                    <option value="option1" id="green">Order Placed</option>
                    <option value="option2" id="yellow">Order in Process</option>
                    <option value="option3" id="blue">Order Packed</option>
                    <option value="option3" id="pink">Order Shipped Out</option>
                    <option value="option3" id="orange">Order Delivered</option>
                  </select>
               
              </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Mark</td>
                <td>03/24/23 2:07PM</td>
                <td>
                  <button type="button" class="btn btn-success btn-sm styleBtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    View Details
                  </button>
                </td>
                <td>
                
                  <select id="myDropdown" onchange="changeDropdownName()" class="selectBtn btn-danger rounded">
                    <option value="default">Pending</option>
                    <option value="option1">Order Placed</option>
                    <option value="option2">Order in Process</option>
                    <option value="option3">Order Packed</option>
                    <option value="option3">Order Shipped Out</option>
                    <option value="option3">Order Delivered</option>
                  </select>
               
              </td>
                
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Mark</td>
                <td>03/24/23 2:07PM</td>
                <td>
                  <button type="button" class="btn btn-success btn-sm styleBtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    View Details
                  </button>
                </td>
                <td>
                
                  <select id="myDropdown" onchange="changeDropdownName() " class="selectBtn btn-danger rounded">
                    <option value="default">Pending</option>
                    <option value="option1">Order Placed</option>
                    <option value="option2">Order in Process</option>
                    <option value="option3">Order Packed</option>
                    <option value="option3">Order Shipped Out</option>
                    <option value="option3">Order Delivered</option>
                  </select>
               
              </td>
                
              </tr>
          </tbody>
        </table>
              
      </div>
      
      <!-- MODAL FOR VIEW DETAILS -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">FULL DETAILS</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="">
                <div class="d-flex gap-3">
                  <label for="address" class="text-muted">Address:</label>
                  <label for="" class="h5">Brgy. Pantalan Nasugbu Batangas</label>
                </div>
                <div class="d-flex gap-3">
                  <label for="customerName" class="text-muted">Customer Name:</label>
                  <label for="" class="h5">Reignoel D. Rodriguez</label>
                </div>
                <div class="d-flex gap-3">
                  <label for="number" class="text-muted">Customer Number:</label>
                  <label for="" class="h5">09108439532</label>
                </div>
                <div class="d-flex gap-3">
                  <label for="paymentMethod" class="text-muted">Payment Method:</label>
                  <label for="" class="h5">Cash On Delivery</label>
                </div>
                <hr>
                <div class="d-flex gap-3 justify-content-md-end">
                  <label for="totalOrder" class="text-muted my-1">Order Total:</label>
                  <div class="d-flex gap-2 text-danger"> 
                    <p class="h5">₱</p>
                    <label for="" class="h4">20,056</label>
                  </div>
                  
                </div>
                

              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary bg-success text-white" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
         
      </div>
      
      
  
  <script>
    function changeDropdownName() {
      var dropdown = document.getElementById("myDropdown");
      var selectedOption = dropdown.options[dropdown.selectedIndex].value;
      if (selectedOption === "option1") {
        dropdown.setAttribute("name", "Dropdown 1");
      } else if (selectedOption === "option2") {
        dropdown.setAttribute("name", "Dropdown 2");
      } else if (selectedOption === "option3") {
        dropdown.setAttribute("name", "Dropdown 3");
      } else {
        dropdown.setAttribute("name", "Select an option");
      }
    }
   
  </script>



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
    <?php include "../components/footer.php"?>
</body>

</html>