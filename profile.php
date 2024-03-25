<?php

include 'connect.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/profile.css">

</head>
<body>
<header>
        <nav>
            <img src="img/car-logo.png" class="logo" alt="">
            <div class="menu">
                <a href="home.php">Home</a>
                <a href="#featured-car" class="navbar-link" data-nav-link>Explore cars</a>
                <a href="service.php">service</a>
                <a href="profile.php">profile</a>
                <a href="contact_us.php">Contact Us</a>
                <a href="about.php">About</a>
            </div>

            <div class="social">
                <a href="https://www.facebook.com/yourpage"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://twitter.com/yourpage"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.instagram.com/yourpage"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </nav>
    </header>
   
<div class="container">

   <div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
      <h3><?php echo $fetch['name']; ?></h3>
      <a href="update_profile.php" class="btn">update profile</a>
      <a href="login.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a>
      <p>new <a href="login.php">login</a> or <a href="register.php">register</a></p>
   </div>

</div>

</body>
</html>