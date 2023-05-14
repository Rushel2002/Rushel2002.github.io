<?php

@include 'config.php';

if(isset($_POST['submit'])){
   $fname = mysqli_real_escape_string($conn, $_POST['fname']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $lname = mysqli_real_escape_string($conn, $_POST['lname']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];
   
   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist!';
   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(fname, email, password, lname, number, user_type) 
         VALUES('$fname','$email','$pass','$lname','$number','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
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
        <a href="admin_index.php"> <img src="./assets/img/LOGO.png" alt="logo" class="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="admin_prod.php">SHOP</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="admin.php"><span class="fa fa-fw fa-wrench"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_login.php"><span class="material-icons"> account_circle</span></a>
            </li></ul>
        </div></div></nav>

   <!-- reg form -->
   <div class="min">
      <div class="form-container">

         <form action="" method="post">
            <h3>Sign Up</h3>
            <?php
            if(isset($error)){
               foreach($error as $error){
                  echo '<span class="error-msg">'.$error.'</span>';
               };
            };
            ?>
            <div class="row">
               <div class="column">
                  <input type="text" name="fname" required placeholder="First Name">
                  <input type="text" name="lname" required placeholder="Last Name">
                  <input type="email" name="email" required placeholder="Email">
               </div>

               <div class="column">
                  <input type="text" name="number" required placeholder="Phone Number">
                  <input type="password" name="password" required placeholder="Password">
                  <input type="password" name="cpassword" required placeholder="Confirm your Password">
               </div>
            </div>
            <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
         </inputBox>
            <input type="submit" name="submit" value="Register Now" class="form-btn">
            <p>Already have an account? </br> <a href="login_form.php">Log-in here</a></p>
         </form>
      </div>
   </div>
   <!-- reg form end -->

</body>
</html>