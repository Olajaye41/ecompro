<?php
  include 'nav.php' ;
?>

        <div class="slider-area">
            <div class="slider">
                 <div><a href="#"> <img src="images/stream5.png" alt=""></a>
                 <div class="slide-content">
                 <h3 class="text-white text-capitalize"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, corrupti! </h3>
                <a href="#"><button class="btn btn-primary">buy now</button></a>
                <a href="#"><button class="btn btn-outline-danger">REad more</button></a>
                 </div>
               
                </div>
                 <div><a href="#"> <img src="images/stream6.png" alt=""></a></div>
                 <div><a href="#"> <img src="images/stream7.png" alt=""></a></div>
            </div>
        </div>
        <!--product area -->
        <div class="container-fluid"> 
            <!-- product section -->
            <section class="product-section">
                <div class="section-heading">
                    <h3 class="heading">latest products</h3>
                </div>
                <div class="section-product-cards">           
                    <div class="owl-carousel">
                    <?php
                    include 'db.php';
                    
                   
                    $i=0;
                    $product_id = array();
                    $product_quantity = array();
                    $result = $mysqli->query('SELECT * FROM products ');
                    if($result === FALSE){
                      die(mysql_error());
                    }
          
                    if($result){
                       
                      while($obj = $result->fetch_object()) {
                        echo '<div class="product-card">
                        <div class="product-image">
                            <img src="images/'.$obj->product_img.'" alt="">
                        </div>
                        <!-- product hover content -->';
                        if($obj->qty > 0) {
                        echo '<div class="card-contents">
                           <a href="update-cart.php?action=add&id='.$obj->id.'"> <button type="button" class="btn btn-warning cart-btn"  > <i class="fas fa-cart-plus"></i></button></a>
                               </div>'; }
                        else {
                          echo 'Out Of Stock!';
                        }
                        echo '<div class="product-details">
                            <h5 class="product-name">'.$obj->product_name.'</h5>
                            <p class="product-price">
                                <small class="text-danger"><s>'.$currency.$obj->priceprev.'</s></small>
                                <span class="text-success">'.$currency.$obj->price.'</span>
                                <a href="details.php?action=add&id='.$obj->id.'"> <button type="button" class="btn btn-danger cart-btn1"  >details</i></button></a>
                   
                            </p>
                        </div>
                    </div>';
          
                      
          
          
          
                        
          
                        $i++;
                      } 

                    
          
                    }
          
                  ?>
                    
                    </div>
                </div>
            </section>
        </div>
        <div class="container product-pane">
            <h3 class="heading">All Products</h3>
            <br>
            <!-- nav bar -->
            <ul class="nav nav-tabs" role="tabblist">
                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#top">Top products</a></li>
                <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab" href="#men">Men</a></li>
                <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab" href="#women">Women</a></li>
                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#children">Children</a></li>
            </ul>
            <!-- tab panes -->
            <div class="tab-content">
                <div id="top" class="container tab-pane active"><br>
                <?php
                

          $result = $mysqli->query('SELECT * FROM products where rate="5"');
          if($result === FALSE){
            die(mysql_error());
          }

          if($result){

            while($obj = $result->fetch_object()) {
              echo '<div class="product-card">
              <div class="product-image">
                  <img src="images/'.$obj->product_img.'" alt="">
              </div>
              <!-- product hover content -->';
              if($obj->qty > 0) {
              echo '<div class="card-contents">
              <a href="update-cart.php?action=add&id='.$obj->id.'"> <button type="button" class="btn btn-warning cart-btn"  > <i class="fas fa-cart-plus"></i></button></a>
               </div>'; }
              else {
                echo 'Out Of Stock!';
              }
              echo '<div class="product-details">
                  <h5 class="product-name">'.$obj->product_name.'</h5>
                  <p class="product-price">
                      <small class="text-danger"><s>'.$currency.$obj->priceprev.'</s></small>
                      <span class="text-success">'.$currency.$obj->price.'</span>
                      <a href="details.php?action=add&id='.$obj->id.'"> <button type="button" class="btn btn-danger cart-btn1"  >details</i></button></a>
                   
                  </p>
              </div>
          </div>';

            



              

              $i++;
            }

          }

          $_SESSION['product_id'] = $product_id;


         
          ?>

                 
                </div>
                <div id="men" class="container tab-pane"><br>
                  <?php
                    $result = $mysqli->query('SELECT * FROM products where product_type="men"');
                    if($result === FALSE){
                      die(mysql_error());
                    }
          
                    if($result){
          
                      while($obj = $result->fetch_object()) {
                        echo '<div class="product-card">
                        <div class="product-image">
                            <img src="images/'.$obj->product_img.'" alt="">
                        </div>
                        <!-- product hover content -->';
                        if($obj->qty > 0) {
                        echo '<div class="card-contents">
                        <a href="update-cart.php?action=add&id='.$obj->id.'"> <button type="button" class="btn btn-warning cart-btn"  > <i class="fas fa-cart-plus"></i></button></a>
                         </div>'; }
                        else {
                          echo 'Out Of Stock!';
                        }
                        echo '<div class="product-details">
                            <h5 class="product-name">'.$obj->product_name.'</h5>
                            <p class="product-price">
                                <small class="text-danger"><s>'.$currency.$obj->priceprev.'</s></small>
                                <span class="text-success">'.$currency.$obj->price.'</span>
                                <a href="details.php?action=add&id='.$obj->id.'"> <button type="button" class="btn btn-danger cart-btn1"  >details</i></button></a>
                   
                            </p>
                        </div>
                    </div>';
          
                      
          
          
          
                        
          
                        $i++;
                      }
          
                    }
          
                  ?>
                </div>
                <div id="women" class="container tab-pane"><br>
                <?php
                    $result = $mysqli->query('SELECT * FROM products where product_type="women"');
                    if($result === FALSE){
                      die(mysql_error());
                    }
          
                    if($result){
          
                      while($obj = $result->fetch_object()) {
                        echo '<div class="product-card">
                        <div class="product-image">
                            <img src="images/'.$obj->product_img.'" alt="">
                        </div>
                        <!-- product hover content -->';
                        if($obj->qty > 0) {
                        echo '<div class="card-contents">
                        <a href="update-cart.php?action=add&id='.$obj->id.'"> <button type="button" class="btn btn-warning cart-btn"  > <i class="fas fa-cart-plus"></i></button></a>
                         </div>'; }
                        else {
                          echo 'Out Of Stock!';
                        }
                        echo '<div class="product-details">
                            <h5 class="product-name">'.$obj->product_name.'</h5>
                            <p class="product-price">
                                <small class="text-danger"><s>'.$currency.$obj->priceprev.'</s></small>
                                <span class="text-success">'.$currency.$obj->price.'</span>
                                <a href="details.php?action=add&id='.$obj->id.'"> <button type="button" class="btn btn-danger cart-btn1"  >details</i></button></a>
                   
                            </p>
                        </div>
                    </div>';
          
                      
          
          
          
                        
          
                        $i++;
                      }
          
                    }
          
                  ?>
                </div>
                <div id="children" class="container tab-pane"><br>
                <?php
                    $result = $mysqli->query('SELECT * FROM products where product_type="children"');
                    if($result === FALSE){
                      die(mysql_error());
                    }
          
                    if($result){
          
                      while($obj = $result->fetch_object()) {
                        echo '<div class="product-card">
                        <div class="product-image">
                            <img src="images/'.$obj->product_img.'" alt="">
                        </div>
                        <!-- product hover content -->';
                        if($obj->qty > 0) {
                        echo '<div class="card-contents">
                        <a href="update-cart.php?action=add&id='.$obj->id.'"> <button type="button" class="btn btn-warning cart-btn"  > <i class="fas fa-cart-plus"></i></button></a>
                       
                        </div>'; }
                        else {
                          echo 'Out Of Stock!';
                        }
                        echo '<div class="product-details">
                            <h5 class="product-name">'.$obj->product_name.'</h5>
                            <p class="product-price">
                                <small class="text-danger"><s>'.$currency.$obj->priceprev.'</s></small>
                                <span class="text-success">'.$currency.$obj->price.'</span>
                                <a href="details.php?action=add&id='.$obj->id.'"> <button type="button" class="btn btn-danger cart-btn1"  >details</i></button></a>
                            </p>
                       

                        </div>
                    </div>';
          
                      
          
          
          
                        
          
                        $i++;
                      }
          
                    }
          
                  ?>
                </div>
            </div>
        </div>
    </div>
    

     <script src="js/jquery.js"></script>
     <script src="js/jquery.bxslider.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/bootstrap.bundle.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="fa/js/all.js"></script>
     <script>$(document).ready(function(){
    $('.slider').bxSlider(
        {auto:true,}
    );
    
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        },
        1300:{
            items:5,
            nav:true,
            loop:false
        }
    }
})
});</script>
     <script src="js/main.js"></script>
</body>
</html>