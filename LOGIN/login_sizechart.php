<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ITIAN CLOTHING</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <!--icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="./assets/css/sizechart.css" />
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
              <a class="nav-link" href="sizechart.php">SIZE CHART</a>
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

        <main class="schart">
            <div class="SizeChart">
                <div class="ptitle">
                    <h4 class="text-center">SIZE CHART</h4>
                    <p class="text-center">*All Shirts of ITIAN Clothing have the same sizing.</p>
                </div>
            <div class="size">
                <img src="./assets/img/ITIAN_sizechart.png" class="mx-auto d-block" alt="" width="800px">
            </div>
            </div>

            <div class="caution"><center>
              <table>
                <tr>
                  <td class="heads"><span style="font-weight:bold">PLEASE USE THIS CHART AS A REFERENCE FOR YOUR SIZES ONLY.</span></td>
                </tr>
                <tr>
                  <td class="heads">We use Gildan, Bluprint, AIIZ and Winner shirts depending on availability.</td>
                </tr>
                <tr>
                  <td class="heads">Please be sure of your sizes as<span style="color:red"> WE STRICTLY DO NOT DO EXCHANGES DUE TO SIZES.</span></td>
                </tr>
                <tr>
                  <td class="heads">Actual sizes may have a slight difference from actual sizing as the chart is just an estimate.</td>
                </tr>
                <tr>
                  <td class="heads">Actual colors on mock ups may also vary due to different shirt brands.</td>
                </tr>
              </table></center>
            </div>
        </main>

        <!-------------footer---------->
    <footer class="page-footer">
      <div class="container">     
        <div class="row">     
          <div class="col-lg-8 col-md-8 col-sm-12">      
          <p>ITIAN Clothing ™ is a homegrown shirt store. Proudrace started off as a brand that peddles deconstructed T-shirts. Today, it has all the means to make anyone stand out in a crowd.</p>     
          <p>A lifestyle and clothing brand that aims to change the mindset of people around the world with its on-point and straightforward message.</p>
          <a href="" class="fab fa-facebook-f"></a> <!-----base on google should put a 'aria-label=""' on all of a href-->
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
      <div class="footer-copyright">© 2022 Copyright, ITIAN Clothing</div>
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