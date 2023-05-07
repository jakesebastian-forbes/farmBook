            
    <?php 
    
    
function content($query){

    $conn = new mysqli('localhost','root','','farmbook_db');
    
    if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
    }else{
    
    // $query = 'SELECT `id`, `accOwner_id`, `productName`, `category`, `product_img`, `description`, `transactionType`, `price` FROM `products` ';
    
    $result = mysqli_query($conn,$query);
    
    while($rows = mysqli_fetch_assoc($result))
        {
        $product_img = 'src=data:image/jpeg;base64,'.base64_encode( $rows['product_img']) ;
    
        ?>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 ">
                            
                    <div class="products-single fix px-4 py-4" id="product_<?php $rows['id']?>">
                        <a href="/pages/single-product.html">
                        <div class="box-img-hover">
                            <!-- <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div> -->
                            <img <?php echo $product_img?> class="img-fluid prod-img" alt="Image">
                            
                        </div>
                        <div class="why-text">
                            <h4><?php echo $rows['productName']?></h4>
                            <h5><?php echo "₱".$rows['price'].".00"?></h5>
                        </div>
                        </a>
                        <div class="mask-icon justify-content-end d-flex gap-2">
                                        
                        <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-bookmark"></i> </button>
                        <button class="btn add-to-cart-btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                    </div>
                    </div>
                    
                    </div>
                    <?php
                    
                }
            }

        }
            ?>

