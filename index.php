<?php
      include "header.php";
      
      setcookie("name", "Eli", time() + 172800);
      
    ?>
      <!-- SLIDER -->
      <section id="main">
        <div id="Carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
            <li data-target="#Carousel" data-slide-to="1"></li>
            <li data-target="#Carousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active" style="background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.4)), url('https://drive.google.com/uc?export=view&id=1qV9qqm-Lu_d5LhS_899t4MLaEBs2fnru');
              background-size: cover;">
              <div class="container">
                <div class="carousel-caption d-none d-sm-block text-right mb-5">
                  <h1 class="display-3 h-color">Perfect for Winter</h1>
                  <p class="lead">Along with winter comes the cold weather and the snow! Our apparel and accessories are sure to keep you warm this winter.</p>
                  <a href="signup.php" class="btn btn-color slide-btn btn-lg">Sign Up Now!</a>
                </div>
              </div>
            </div>
    
            <div class="carousel-item" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.4)), url('https://drive.google.com/uc?export=view&id=10MWOQJXLUUpfloZnfQ2UGnrGrKK5QMo1');
              background-size: cover;">
              <div class="container">
                <div class="carousel-caption d-none d-sm-block mb-5">
                  <h1 class="display-3 h-color">WAIT!!</h1>
                  <p class="lead">Look at you! You found the hidden button to the switch.php file! You should be proud of yourself! You looked at the thing too long and here I am...
                    You know, there are sevral other hidden buttons around here... I <i>couuuld</i> make this fun....</p>
                  <a href="switch.php" class="btn btn-color slide-btn btn-lg">Hidden Switch</a>
                </div>
              </div>
            </div>
    
            <div class="carousel-item" style="background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.4)), url('https://drive.google.com/uc?export=view&id=17C-k1IsVjKEEbsf5KxnkzJ9C8xDPyJcf');
              background-size: cover;">
              <div class="container">
                <div class="carousel-caption d-none d-sm-block text-right mb-5">
                  <h1 class="display-3 h-color">Hidden Links?</h1>
                  <p class="lead">FYI, I could have totally hidden other secret little links to special little pages in this page. 
                    This isn't one of them at all don't click this thing please I'm warning you if you click this button there is no turning back you will be scarred beyond recovery, 
                    however you will grow as a person and your power will form  this is literally a red pill blue pill scenario please make the right choice.</p>
                  <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley" class="btn btn-color slide-btn btn-lg">Learn More</a>
                </div>
              </div>
            </div>
          </div>
    
          <a href="#Carousel" data-slide="prev" class="carousel-control-prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
    
          <a href="#Carousel" data-slide="next" class="carousel-control-next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </section>
      <!--End of slider-->
      <!--Service Section==========-->
      <section class="services py-5 text-center bg-lightblue">
          <div class="container">
              <div class="row">
                  <!--Single Service-->
                  <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                      <span class="service-icon">
                          <i class="fas fa-globe fa-2x"></i>                            
                      </span>
             <h5 class="font-weight-bold text-uppercase">Worldwide Shipping</h5>
             <p>Just Below Zero now supports worldwide shipping! People accross the globe now have the opportunity to have their favorite winter coat!</p>
                  </div>
                  <!--end of Service=-->
                  <!--Single Service-->
                  <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                    <span class="service-icon">
                        <i class="fas fa-stamp fa-2x"></i>                            
                    </span>
           <h5 class="font-weight-bold text-uppercase">Certified by Gurus</h5>
           <p>I'll be real, I have no clue what this means. here is the <a href="https://drive.google.com/uc?export=view&id=1vG1ztq4rgBep__xl_qB6heeCML0Wc-qw" style="color: #000"><b>EGG</b></a></p>
                </div>
                <!--end of Service=-->
                <!--Single Service-->
                <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                    <span class="service-icon">
                        <i class="fas fa-file-invoice-dollar fa-2x"></i>                            
                    </span>
           <h5 class="font-weight-bold text-uppercase">30 Days Money Back</h5>
           <p>If you aen't satisfied with your product, we will issue a full refund!</p>
                </div>
                <!--end of Service=-->
              </div>
          </div>
      </section>
      <!---End of Service Section=======-->
 <!-- Product section -->
 <section id="products" class="products py-5">
  <div class="container">
    <!-- section title -->
    <div class="row">
      <div class="col-10 mx-auto col-sm-6 text-center">
        <h1 class="text-capitalize product-title">Featured Products</h1>
      </div>
    </div>
    <!-- end section title -->
     <!-- Product items -->
    <div class="row product-items" id="product-items">
      <!-- single items -->
      <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
         <div class="card single-item">
          <div class="img-container">
            <img src="https://drive.google.com/uc?export=view&id=1Xas7xhcgFRQD7vRjsXRmhWv13fez0lM3" class="card-img-top product-img product-img-size" alt="">
            </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
              <h5 id="item-name"> Heavy Duty Hoodless</h5>
             <span><i class="fas fa-dollar-sign"></i>350</span>
            </div>
          </div>
        </div>
      </div>
      <!-- end of single item -->
      <!-- single items -->
      <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
        <div class="card single-item">
          <div class="img-container">
            <img src="https://drive.google.com/uc?export=view&id=1DSfepizqf3MwbPfYZDaxpTnbubpmj90C" class="card-img-top product-img product-img-size" alt="">
           </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
              <h5 id="item-name"> Puffer No Hood</h5>
              <span><i class="fas fa-dollar-sign"></i>120</span>
              </div>
          </div>
        </div>
      </div>
      <!-- end of single item -->
      <!-- single items -->
      <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
        <div class="card single-item">
          <div class="img-container">
            <img src="https://drive.google.com/uc?export=view&id=1xZ2bwRelAXloxn1L865hpNZi2Pb_xSOE" class="card-img-top product-img product-img-size" alt="">
            </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
              <h5 id="item-name"> Hooded Puffer</h5>
              <span><i class="fas fa-dollar-sign"></i>150</span>
            </div>
          </div>
        </div>
      </div>
      <!-- end of single item -->
      <!-- single items -->
      <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
        <div class="card single-item">
          <div class="img-container">
            <img src="https://drive.google.com/uc?export=view&id=1TyGxCwEGsq5JKhhaEJA82V0e6nuvNxA6" class="card-img-top product-img product-img-size" alt="">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
              <h5 id="item-name"> Fur-Hooded Waterproof</h5>
              <span><i class="fas fa-dollar-sign"></i>250</span>
            </div>
          </div>
        </div>
      </div>
      <!-- end of single item -->
      <!-- single items -->
      <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
        <div class="card single-item">
          <div class="img-container">
            <img src="https://drive.google.com/uc?export=view&id=1AGi9IuklwjOILm-TwdE__mve2gkczUUO" class="card-img-top product-img product-img-size" alt="">
           </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
              <h5 id="item-name">Hooded Latex Puffer </h5>
              <span><i class="fas fa-dollar-sign"></i>135</span>
            </div>
          </div>
        </div>
      </div>
      <!-- end of single item -->
      <!-- single items -->
      <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
        <div class="card single-item">
          <div class="img-container">
            <img src="https://drive.google.com/uc?export=view&id=1-5wfisCEjQty3d-HVnd1Cw6sGQn2TZeh" class="card-img-top product-img product-img-size" alt="">
           </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
              <h5 id="item-name"> Layered Jacket</h5>
              <span><i class="fas fa-dollar-sign"></i>300</span>
            </div>
          </div>
        </div>
      </div>
      <!-- end of single item -->
      <!-- single items -->
      <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
        <div class="card single-item">
          <div class="img-container">
            <img src="https://drive.google.com/uc?export=view&id=11rkH-tyKEuSOcw_SL2Qti41_VhoS4qFX" class="card-img-top product-img product-img-size" alt="">
            </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
              <h5 id="item-name"> Fur-Hooded Puffer</h5>
              <span><i class="fas fa-dollar-sign"></i>175</span>
            </div>
          </div>
        </div>
      </div>
      <!-- end of single item -->
      <!-- single items -->
      <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
        <div class="card single-item">
          <div class="img-container">
            <img src="https://drive.google.com/uc?export=view&id=1m30SGD1oDXo1zLfgxh7KJJkpbiqnxTXR" class="card-img-top product-img product-img-size" alt="">
            </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
              <h5 id="store-item-name">Cat Coat</h5>
              <span><i class="fas fa-dollar-sign"></i>150</span>
            </div>
          </div>
        </div>
      </div>
      <!-- end of single item -->
      <!-- single items -->
      <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
        <div class="card single-item">
          <div class="img-container">
            <img src="https://drive.google.com/uc?export=view&id=169YlSCDUmnSHtUpIIJ_UoYoWS6r1V4XH" class="card-img-top product-img product-img-size" alt="">
        </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
              <h5 id="item-name"> Fleece Letterman No Hood</h5>
              <span><i class="fas fa-dollar-sign"></i>80</span>
            </div>
          </div>
        </div>
      </div>
      <!-- end of single item -->
      <!-- single items -->
      <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
        <div class="card single-item">
          <div class="img-container">
            <img src="https://drive.google.com/uc?export=view&id=1NOto3FRRGUvtEntAJsOYg4kowKps1DIq" class="card-img-top product-img product-img-size" alt="">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
              <h5 id="item-name">Hooded Generic</h5>
              <span><i class="fas fa-dollar-sign"></i>50</span>
           </div>
          </div>
        </div>
      </div>
      <!-- end of single item -->
      <!-- single items -->
      <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
        <div class="card single-item">
          <div class="img-container">
            <img src="https://drive.google.com/uc?export=view&id=1H2xuUPqMMm2avrDg9__ZWFZKhe8CekHB" class="card-img-top product-img product-img-size" alt="">
                      </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
              <h5 id="item-name">Reflective Waterproof</h5>
              <span><i class="fas fa-dollar-sign"></i>95</span>
    
            </div>
          </div>
        </div>
      </div>
      <!-- end of single item -->
      <!-- single items -->
      <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
        <div class="card single-item">
          <div class="img-container">
            <img src="https://drive.google.com/uc?export=view&id=1Jo7XJQLOgjcKtV5F5mbPqu3h3XQUQLJZ" class="card-img-top product-img product-img-size" alt="">
        </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
              <h5 id="item-name"> Hooded Heavy Duty</h5>
              <span><i class="fas fa-dollar-sign"></i>450</span>
            </div>
          </div>
        </div>
      </div>
      <!-- end of single item -->
    </div>
    <!-- end of store items -->
  </div>
</section>
<!-- end of store section -->
  <!---End of Product Section===-->
  <!---About Section=====-->
  <section id="about-sec">
     <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 text-center">
          <img src="https://drive.google.com/uc?export=view&id=1qqLxIM0aYW4_52Lb3eMNQpkytMpDzA-U" width="450" height="150" 
          class="img-fluid watch-img">
        </div>
        <div class="col-lg-7 text-lg-right  text-center text-color about-text">
          <h1 >About Us</h1>
          <p class="text">We have been making winter apparel for over 10 years and we don't intend on stopping soon! 
                          We want the people of the world to have something to wear when the cold temperatures come around!
                          Hopefully we will be in business for a long time to come, and we can continue supplying you all with style and warmth all winter long!</p>
        </div>
      </div>
      </div>
      </section>
      <!---End of About Section---->
      <!--Best Seller Products-->
      <section class="seller py-5">
        <div class="container">
          <!--Section title-->
          <div class="row mb-5">
            <div class="col d-flex flex-wrap text-uppercase justify-content-center">
              <h1 class="font-weight-bold align-self-center mx-1">
                Best Seller Products
              </h1>
            </div>
          </div>
          <!---End of Title-->
          <div class="row">
           <div class="col-sm-6 ">
              <div class="seller-item">
                <img src="https://drive.google.com/uc?export=view&id=1Pm5TfIzMYa64ZPg3QcBYh6X63UB_AnjG" alt="" class="img-fluid photo" style="height: 575px; width: 100%;">

                <p style="color:black;"> Fringed Scarf <span><i class="fas fa-dollar-sign"></i>45</span></p>
               </div>
            </div>
            <!--End of first column-->
            <div class="col-sm-6 d-flex flex-column justify-content-between">
              <div class="row">
                <!--first item-->
                <div class="col-sm-6">
                  <div class="seller-item">
                    <img src="https://drive.google.com/uc?export=view&id=1ZW1PIpZkgWHFmsPKRtnr8SQkhQPCNfsL" alt="" class="img-fluid seller-img">
                    
                    <p class="bestseller-title">Heavy Duty Thermal Gloves <span><i class="fas fa-dollar-sign"></i>35</span></p>
                  </div>
                </div>
                <!--End of 1st item-->
                 <!--first item-->
                 <div class="col-sm-6">
                  <div class="seller-item">
                    <img src="https://drive.google.com/uc?export=view&id=1U_ypMtjaAf6T_xP4pcOQHW2cKBagi8yl" alt="" class="img-fluid seller-img">
                    
                    <p class="bestseller-title">Fur Bomber Hat <span><i class="fas fa-dollar-sign"></i>65</span></p>
                  </div>
                </div>
                <!--End of 1st item-->       
              </div>
              <!--end of row-->
              <div class="row">
                <!--first item-->
                <div class="col-sm-6">
                  <div class="seller-item bestseller-title">
                    <img src="https://drive.google.com/uc?export=view&id=1qbUIDM7-_YmkkorxpNQxuzY6py4ojehV" alt="" class="img-fluid seller-img
                    img-top">
                    
                    <p class="bestseller-title">Puff Beanie <span><i class="fas fa-dollar-sign"></i>25</span></p>
                  </div>
                </div>
                <!--End of 1st item-->
                 <!--first item-->
                 <div class="col-sm-6">
                  <div class="seller-item">
                    <img src="https://drive.google.com/uc?export=view&id=18WcAUYxtZCD7L-FHJ4QHvEc6srk3wtw7" alt="" class="img-fluid seller-img
                    img-top">
                    
                    <p class="bestseller-title">Beanie-Scarf Set <span><i class="fas fa-dollar-sign"></i>75</span></p>
                  </div>
                </div>
                <!--End of 1st item-->       
              </div>
            </div>
          </div>
         </div> 
      </section>
      <!---End of Best Seller-->
      <!--Contact us Section-->
       <!--Contact US-->
    <section class="contact py-5 bg-lightblue">
      <div class="container">
          <h2 class="section-heading">Contact Us</h2>
          <form class="col-lg-6 offset-lg-3">
              <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" id="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control" placeholder="Enter name">
              </div>
              <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" id="message" placeholder="Type your message" row="5">
                  
              </textarea>
              </div>
              <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="check">
                  <label class="form-check-label" for="check">Subscribe to newsletter</label>
              </div>
              <div class="text-center">
                  <button class="btn btn-lg btn-color cont-btn">Submit</button>
              </div>
          </form>
      </div>
  </section>
  <!--End of Contact Section-->

  <?php

  include "footer.php";
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>