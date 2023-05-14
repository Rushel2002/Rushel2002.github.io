<?php

  require_once 'connection.php';
  
  $sql = "SELECT * FROM product";
  $all_product = $conn->query($sql);
  
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ITIAN CLOTHING</title>
    <!--icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="./assets/css/proj.css" />
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  </head>
  <body>
  <nav class="navbar navbar-expand-md fixed-top">
      <div class="container">
        <a href="index.php"> <img src="./assets/img/LOGO.png" alt="logo" class="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.php">SHOP</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="about.php">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact us.php">CONTACT US</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="Faqs.php">FAQs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="CART.php"><span class="material-icons"> shopping_cart</span></a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="login_form.php"><span class="material-icons"> account_circle</span></a>
            </li></ul>
        </div></div></nav>

  <!-- carousel part  -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./assets/img/photo1.png" class="d-block w-100 h-auto" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./assets/img/photo2.png" class="d-block w-100 h-auto" alt="...">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="carousel-item">
        <img src="./assets/img/photo3.png" class="d-block w-100 h-auto" alt="...">
      </div>
    </div>

    <!-- button for previous and next of carousel -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
           <!-- end of carousel part -->

    <!---------------- featured categories ---------------->
    <div class="categories">
      <div class="small-container">
        <div class="row">
          <div class="col-3">
            <img src="./assets/img/shop_banner.png" alt="cat1" />
          </div>    
        </div>
      </div>
    </div>

    <!---------------- featured products ---------------->
    <div class="small-container">
      <h2 class="title">Featured Products</h2>
      <div class="row">
        <div class="col-4">
          <img src="./assets/img/SHIRT2_b.png" alt="shirt2b"/>
          <h4>00X3-C BLACK</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p><strong>₱ 650.00</strong></p>
        </div>
        <div class="col-4">
          <img src="./assets/img/SHIRT5_a.png" alt="shirt5a"/>
          <h4>00X4-F WHITE</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p><strong>₱ 850.00</strong></p>
        </div>
        <div class="col-4">
          <img src="./assets/img/SHIRT1_a.png" alt="shoe1a"/>
          <h4>00X1-A PURPLE</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p><strong>₱ 600.00</strong></p>
        </div>
        <div class="col-4">
          <img src="./assets/img/SHIRT2_a.png" alt="shoe2a"/>
          <h4>00X2-B WHITE</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
          </div>
          <p><strong>₱ 750.00</strong></p>
        </div>
      </div>

      <h2 class="title">Recently Added Products</h2>
      <div class="row">
        <div class="col-4">
          <a href="shop.php"><img src="./assets/img/SHIRT6_a.png" alt="shirt6a"/></a>
          <h4>00X4-F BLACK</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
          </div>
          <p><strong>₱ 650.00</strong></p>
        </div>
        <div class="col-4">
          <a href="shop.php"><img src="./assets/img/SHIRT1_b.png" alt="shirt1b"/></a>
          <h4>00X1-A WHITE</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="far fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p><strong>₱ 600.00</strong></p>
        </div>
        <div class="col-4">
          <a href="shop.php"><img src="./assets/img/SHIRT7_aFRONT.png" alt="shirt7afront"/></a>
          <h4>00X5-G BNLACK</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p><strong>₱ 800.00</strong></p>
        </div>
        <div class="col-4">
          <a href="shop.php"><img src="./assets/img/SHIRT4_a.png" alt="shirt4a"/></a>
          <h4>00X4-D WHITE</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
          </div>
          <p><strong>₱ 700.00</strong></p>
        </div>
      </div>

      <div class="rowfordisplay">
        <div class="col-2">
          <a href="shop.php"><img src="./assets/img/itian.png" alt="prod5"/></a>
        </div>
        <div class="col-5">
          <a href="products.php"><img src="./assets/img/itian1.png" alt="prod3"/></a>
        </div>
        <div class="col-5">
          <a href="shop.php"><img src="./assets/img/itian3.png" alt="prod2"/></a>
        </div>
        <div class="col-2">
          <a href="shop.php"><img src="./assets/img/itian2.png" alt="prod7"/></a>
        </div>
      </div>
    </div>
    
    <!-- services section Starts -->
    <section class="services section-padding" id="services">
      <div class="containerforservices">
          <div class="row">
              <div class="col-md-12">
                  <div class="section-header text-center pb-5">
                      <h2>SERVICES</h2>
                  </div>
              </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2">
                    <div class="card-body">
                        <i class="bi bi-laptop"></i>
                        <h3 class="card-title">Best Quality</h3>
                        <p class="lead">The standard line has its natural fibres, always superior to synthetics. And certainly they have admirable qualities – cotton is naturally breathable; it’s warm in the winter and cool in the summer, highly insulating relative to its weight.</p>
                    </div>
                </div>
            </div>
              <div class="col-12 col-md-12 col-lg-4">
                  <div class="card text-white text-center bg-dark pb-2">
                      <div class="card-body">
                        <i class="bi bi-journal"></i>
                          <h3 class="card-title">Sustainability</h3>
                          <p class="lead">Invest in sustainable fashion brands. Buy less and buy better. Clothes that are created and consumed in a way that can be, quite literally, sustained, while protecting both the environment and those producing garments. </p>
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-12 col-lg-4">
                  <div class="card text-white text-center bg-dark pb-2">
                      <div class="card-body">
                        <i class="bi bi-intersect"></i>
                          <h3 class="card-title">Affordable</h3>
                          <p class="lead"> The craftsmanship of a well-made suit to one off the rack from your favourite fast fashion brands, you will be able to notice the difference straight away. You can start to appreciate your clothes and get more wear out of each garment.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- services section Ends -->

    <!-------------footer---------->
    <footer class="page-footer">
      <div class="container">     
        <div class="row">     
          <div class="col-lg-8 col-md-8 col-sm-12">      
          <p>ITIAN Clothing ™ is a homegrown shirt store. Proudrace started off as a brand that peddles deconstructed T-shirts. Today, it has all the means to make anyone stand out in a crowd.</p>     
          <p>A lifestyle and clothing brand that aims to change the mindset of people around the world with its on-point and straightforward message.</p>
          <a href="" class="fab fa-facebook-f"></a>
          <a href="" class="fab fa-youtube"></a>
          <a href="" class="fab fa-instagram"></a>
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h6 class="text-uppercase font-weight-bold">Contact</h6>     
          <p>1870 New york, Cubao, Philippines      
          <br/>itianclo.com      
          <br/>+ 01 234 567 88     
          <br/>+ 01 234 567 89</p>     
        </div>
      </div>
      <div class="footer-copyright">© 2022 Copyright, ITIAN Clothing</div></div>
    </footer>

    <!-- ---------------------Javascipt For Menu Toggle------------- -->
    <script>
      var MenuItems = document.getElementById("MenuItems");

      MenuItems.style.maxHeight = "0px";

      function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
          MenuItems.style.maxHeight = "200px";
        } else {
          MenuItems.style.maxHeight = "0px";
        }
      }
    </script>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/main.js"></script>
  </body>
</html>