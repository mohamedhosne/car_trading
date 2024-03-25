<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title> Login  </title> 
</head>
<body>
  <header> 
    <nav>
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
        <form action="" method="post" enctype="multipart/form-data">
        <h3>login now</h3>

          <?php
            if(isset($message)){
            foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
                  }
                }
            ?>

            <input type="email" name="email" placeholder="enter email" class="box" required>
            <input type="password" name="password" placeholder="enter password" class="box" required>
            <input type="submit" name="submit" value="login now" class="btn">
            <p>don't have an account? <a href="register.php">regiser now</a></p>
        </form>
      </div> 




<?php

      include 'connect.php';
      session_start();

      if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $pass = md5($_POST['password']);

        $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

        if(mysqli_num_rows($select) > 0){
            $row = mysqli_fetch_assoc($select);
            $_SESSION['user_id'] = $row['id'];
            header('location:home.php');
        }else{
            $message[] = 'incorrect email or password!';
        }

      }

?>
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
<script>
        let heroBg = document.querySelector('.hero');

        setInterval(() => {
            heroBg.style.backgroundImage = "url(img/bg-light.jpg)"
            
            setTimeout(() => {
                heroBg.style.backgroundImage = "url(img/bg.jpg)"
            }, 1000);
        }, 2200);
  </script>
    
</body>
</html>