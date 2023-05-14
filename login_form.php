<?php

@include 'config.php';
session_start();

if(isset($_POST['submit'])){
   $fname = mysqli_real_escape_string($conn, $_POST['fname']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];
  
   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);
   if(mysqli_num_rows($result) > 0){

    $row = mysqli_fetch_array($result);

    if($row['user_type'] == 'admin'){

       $_SESSION['admin_name'] = $row['fname'];
       header('location:admin.php');

    }elseif($row['user_type'] == 'user'){

       $_SESSION['user_name'] = $row['fname'];
       header('location:index.php');

    }

 }else{
    $error[] = 'incorrect email or password!';
 }


};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>

   <!-- custom css file link  -->
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

<div class="form-container">
   <form action="" method="post">
      <h3>LOG-IN NOW</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Enter Your Email">
      <input type="password" name="password" required placeholder="Enter Your Password">
      <input type="submit" name="submit" value="Log-in now" class="form-btn">
      <p>Don't have an account? <a href="register_form.php">Sign Up</a></p>
   </form>
</div>
</body>
</html>