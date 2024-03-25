<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title> Register </title>
</head>
   <body>
      <div>
        <header>
            <nav>
                  <img src="" class="logo" alt="">
                  <div class="menu">
                  <img src="img/car-logo.png" class="logo" alt="">
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
      </div>

      <div class="login">

         <form action="register.php" method="post">

         <form action="" method="post" enctype="multipart/form-data">
            <h3>register now</h3>


            <?php
               if(isset($message)){
                  foreach($message as $message){
                     echo '<div class="message">'.$message.'</div>';
                  }
               }
            ?>
               <input type="text" name="name" placeholder="enter name" class="box" required>
               <input type="text" username="username" placeholder="enter username" class="box" required>
               <input type="email" name="email" placeholder="enter email" class="box" required>
               <input type="password" name="password" placeholder="enter password" class="box" required>
               <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
               <input type="phone_number" name="phone_number" placeholder="enter phone number" class="box" required>
               <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
               <input type="submit" name="submit" value="register now" class="btn">
               <p>already have an account? <a href="login.php">login now</a></p>
         </form>
            
        </form>


<script>
      const form = document.querySelector('form');
      const passwordInput = document.querySelector('#password');
      const confirmPasswordInput = document.querySelector('#confirm_password');
      const passwordError = document.querySelector('#password-error');

      form.addEventListener('submit', (event) => {
         if (passwordInput.value !== confirmPasswordInput.value) {
            event.preventDefault();
            passwordError.textContent = 'Passwords do not match.';
         } else {
            passwordError.textContent = '';
         }
      });
</script>


    </div>

<?php
   include 'connect.php';

   if(isset($_POST['submit'])){
   

      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
      $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
      $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
      $image = $_FILES['image']['name'];
      $image_size = $_FILES['image']['size'];
      $image_tmp_name = $_FILES['image']['tmp_name'];
      $image_folder = 'uploaded_img/'.$image;
   

      $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');
   

      if(mysqli_num_rows($select) > 0){
         $message[] = 'user already exist'; 
      }else{

            if($pass != $cpass){
               $message[] = 'confirm password not matched!';

            }elseif($image_size > 10000000){
               $message[] = 'image size is too large!';

            }else{
               $insert = mysqli_query($conn, "INSERT INTO `user_form`(name,username, email, password,phone_number, image) 
               VALUES('$name','$username', '$email', '$pass','$phone_number', '$image')") or die('query failed');
               
      
               if($insert){
                  move_uploaded_file($image_tmp_name, $image_folder);
                  $message[] = 'registered successfully!';
                  header('location:login.php');
               }else{
                  $message[] = 'registeration failed!';
               }
            }
         }
      
      }
      
?>

</body>
</html>