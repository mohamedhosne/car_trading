<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="css/contactus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
<header>
        <nav>
            <img src="img/car-logo.png" class="logo" alt="">
            <div class="menu">
                <a href="home.php">Home</a>
                <a href="car.php">Car</a>
                <a href="service.php">service</a>
                <a href="profile.php">profile</a>
                <a href="contact_us.php">Contact Us</a>
                <a href="about.php">About</a>
            </div>

            <div class="social">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </nav>
    </header>
	<h1>Contact Us</h1>
	<p>Please use the following form to contact us, or you can find us on social media.</p>

	<!-- Contact Form -->
	<form action="/submit_form" method="post">
		<label for="name">Name:</label><br>
		<input type="text" id="name" name="name"><br>
		<label for="email">Email:</label><br>
	<input type="email" id="email" name="email"><br>
		<label for="message">Message:</label><br>
		<textarea id="message" name="message"></textarea><br>
		<input type="submit" value="Submit">
	</form>

	<!-- Social Media Links -->
	<h2>Find Us on Social Media</h2>
	<ul>
		<li><a href="https://www.facebook.com/yourpage">Facebook <i class="fab fa-facebook-f"></i></a></li>
		<li><a href="https://twitter.com/yourpage">Twitter <i class="fab fa-twitter"></i></a></li>
		<li><a href="https://www.instagram.com/yourpage">Instagram <i class="fab fa-instagram"></i></a></li>
	</ul>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3157.994884675781!2d33.67675599962611!3d27.32165215930841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1452650624737cf1%3A0xb515a00886782913!2z2KzYp9mF2LnYqSDYrNmG2YjYqCDYp9mE2YjYp9iv2Yog2YHYsdi5INin2YTYutix2K_Zgtip!5e0!3m2!1sar!2seg!4v1710871486290!5m2!1sar!2seg"width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</body>
</html>