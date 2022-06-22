<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: Sign-in.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <link rel="stylesheet" href="Styles/About-style.css">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <header>
        <a href="#" class="logo">
            <img src="LOGO/Logo.png" alt="">
        </a>
        <div class='bx bx-menu' id="menu-icon"  ></div>

        <!-- Menu -->
        <ul class="navbar">
            <li><a href="Home.php">HOME</a></li>
            <li><a href="Movies.php" >MOVIES</a></li>
            <li><a href="Actors.php">ACTORS</a></li>
            <li><a href="Contact.php">CONTACT</a></li>
            <li><a href="About.php" class="home-active">ABOUT</a></li>
        </ul>
        <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
        <a href="wishlist.php"><i class="fa fa-heart-o"></i></a>
        <a href="logout.php" class="btn" >Logout</a>
    </header>
    <!-- End Navbar -->

    <!-- Section -->
	<div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1>About Us</h1>
				</div>
				<div class="content">
                    
					<h3>What is <span>MOMovie</span> Exactly ?</h3>
                    <br>
					<p>Our Webesite about watching movies 
                        if you have been searching for a long time for a site web that's makes you watching comfortable without any ads and is completely free <br> <span>YOU ARE IN THE RIGHT WEBSITE</span><br>
                        Now !! know who is the director of the movie and the actors and look for an overview description of the movie before start watching 
                        that's will makes the things clear and more professional
                        movie site that has a lot of informations about the movie and let you watch with full quality and free
                        I hope that's will resolve your problems you had
                        <br> 
                        ENJOY GUYS </p>
                        <br>
					<div class="button">
						<a href="Contact.php">Contact Us</a>
					</div>
				</div>
				<div class="social">
					<a href=""><i class="fab fa-facebook-f"></i></a>
					<a href=""><i class="fab fa-twitter"></i></a>
					<a href=""><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</div>
	</div>
    <!-- End Section -->

    <!-- Footer -->
    <section class="footer">
        <a href="#" class="logo">
            <img src="LOGO/Logo.png" alt="">
        </a>
    <div class="social">
        <a href="https://web.facebook.com/MOMovies-102990989121932" target="_blank"><i class='bx bxl-facebook' ></i></a>
        <a href=""><i class='bx bxl-twitter' ></i></a>
        <a href="https://www.instagram.com/momovies1/" target="_blank"><i class='bx bxl-instagram' ></i></a>
        <a href=""><i class='bx bxl-tiktok' ></i></a>
    </div>
    </section>
    <!-- End Footer -->

    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; MOMovies All Right Reserved.</p>
    </div>
    <!-- End Copyright -->
    
    <script src="Script/script.js"></script>
     

</body>
</html>