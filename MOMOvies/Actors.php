<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: Sign-in.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actors</title>
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link rel="stylesheet" href="Styles/Home-style.css">
    <link rel="stylesheet" href="Styles/Actors-style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
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
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">

            <!-- box 1 -->
            <div class="swiper-slide container">
                <img src="img/Johny-depp.jpg" alt="">
                <div class="home-text">
                    <h1>Johnny depp</h1>
                    <a href="#" class="btn">CHECK STORY</a>
                </div>
            </div>

            <!-- box 2 -->
            <div class="swiper-slide container">
                <img src="img/keanu-reeves.jpg" alt="">
                <div class="home-text">
                    <h1>Keanu Reeves</h1>
                    <a href="#" class="btn">CHECK STORY</a>
                </div>
            </div>

            <!-- box 3 -->
            <div class="swiper-slide container">
                <img src="img/jason-statham.jpg" alt="">
                <div class="home-text">
                    <h1>Jason Statham</h1>
                    <a href="#" class="btn">CHECK STORY</a>
                </div>
            </div>

            <!-- box 4 -->
            <div class="swiper-slide container">
                <img src="img/therock.jpg" alt="">
                <div class="home-text">
                    <h1>Dwayne Johnson</h1>
                    <a href="#" class="btn">CHECK STORY</a>
                </div>
            </div>

            <!-- box 5 -->
            <div class="swiper-slide container">
                <img src="img/jesse-pinckman.jpg" alt="">
                <div class="home-text">
                    <h1>Aaron Paul</h1>
                    <a href="#" class="btn">CHECK STORY</a>
                </div>
            </div>

          </div>
        <div class="swiper-pagination"></div>
    </section>
    <!-- End Section -->

    <!-- Search -->
    <section class="question" id="movies">
        <div class="search">
            <h1>Search for your best actor</h1>
            <form action="">
                <input type="text" class="text" placeholder="Search...">
                <input type="submit" value="Search"
                 class="btn">
            </form>
        </div>
    </section>
    <!-- End Search -->

    <!-- Actors -->
    <section class="movies" >
        <h2 class="heading1">ALL ACTORS</h2>
            <!-- Movies container -->
            <div class="movies1-container">
     <!-- Box 1 -->
    <div class="box1">
        <div class="box-img">
            <a href="Actor.php"><img src="img/actor1.png" alt=""></a>
        </div>
        <h3>Jason Statham</h3>
    </div>

    <!-- Box 2 -->
    <div class="box1">
        <div class="box-img">
            <img src="img/actor2.png" alt="">
        </div>
        <h3>Li Bingbing</h3>
    </div>

    <!-- Box 3 -->
    <div class="box1">
        <div class="box-img">
            <img src="img/actor3.png" alt="">
        </div>
        <h3>Ruby Rose</h3>
        </div>

    <!-- Box 4 -->
    <div class="box1">
        <div class="box-img">
            <img src="img/actor4.png" alt="">
        </div>
        <h3>Winston Chao</h3>
    </div>
    <!-- Box 5 -->

    <div class="box1">
        <div class="box-img">
            <img src="img/actor5.png" alt="">
        </div>
        <h3>Cliff Curtis</h3>
        </div>
    </div>
    </section>
    <!-- End Actors -->

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


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="Script/script.js"></script>

</body>
</html>