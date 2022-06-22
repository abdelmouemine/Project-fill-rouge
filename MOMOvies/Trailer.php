<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOMovies</title>
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link rel="stylesheet" href="Styles/Home-style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
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
            <li><a href="Sign-in.php" class="home-active">HOME</a></li>
            <li><a href="Sign-in.php">MOVIES</a></li>
            <li><a href="Sign-in.php">ACTORS</a></li>
            <li><a href="Sign-in.php">CONTACT</a></li>
            <li><a href="Sign-in.php">ABOUT</a></li>
            
        </ul>
        <a href="Sign-in.php" class="btn">LOGIN</a>
        <!-- <input type="text" placeholder="Search.."> -->
    </header>
    <!-- Home -->
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <!-- box 1 -->
            <div class="swiper-slide container">
                <img src="img/5.jpg" alt="">
                <div class="home-text">
                    <span></span>
                    <h1>The Avengers :<br>Infinity War</h1>
                    <a href="Sign-in.php" class="btn">CHECK STORY</a>
                    <a href="Sign-in.php" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>
            <!-- box 2 -->
            <div class="swiper-slide container">
                <img src="img/7.jpg" alt="">
                <div class="home-text">
                    <span></span>
                    <h1>Star Wars:<br>The Rise of Skywalker</h1>
                    <a href="Sign-in.php" class="btn">CHECK STORY</a>
                    <a href="Sign-in.php" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>
            <!-- box 3 -->
            <div class="swiper-slide container">
                <img src="img/3.jpg" alt="">
                <div class="home-text">
                    <span></span>
                    <h1>Assassin's Creed:<br>The movie</h1>
                    <a href="Sign-in.php" class="btn">CHECK STORY</a>
                    <a href="Sign-in.php" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>
            <!-- box 4 -->
            <div class="swiper-slide container">
                <img src="img/8.jpg" alt="">
                <div class="home-text">
                    <span></span>
                    <h1>Warcraft: <br>The movie</h1>
                    <a href="Sign-in.php" class="btn">CHECK STORY</a>
                    <a href="Sign-in.php" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>
            <!-- box 5 -->
            <div class="swiper-slide container">
                <img src="img/2.jpg" alt="">
                <div class="home-text">
                    <span></span>
                    <h1>Alien:<br>The movie</h1>
                    <a href="Sign-in.php" class="btn">CHECK STORY</a>
                    <a href="Sign-in.php" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
    </section>
    <!-- Movies -->
    <section class="movies" >
        <h2 class="heading">Opening This Week</h2>
        <!-- Movies container -->
        <div class="movies-container">
            <!-- Box 1 -->
            <div class="box">
            <div class="box-img">
                <img src="img/hobbit.jpg" alt="">
                <div class="overlay">
                    <a href="Sign-in.php" class="btn1">PLAY</a>
                    <a href="Sign-in.php" class="btn2">MORE INFO</a>
                    <a href="Sign-in.php" class="btn3">ADD TO WISHLIST</a>
                  </div>
            </div>
            <h3>The Hobbit</h3>
            <span>120 min | Fantasy</span>
        </div>
        <!-- Box 2 -->
        <div class="box">
            <div class="box-img">
                <img src="img/movie2.png" alt="">
                <div class="overlay">
                    <a href="Sign-in.php" class="btn1">PLAY</a>
                    <a href="Sign-in.php" class="btn2">MORE INFO</a>
                    <a href="Sign-in.php" class="btn3">ADD TO WISHLIST</a>
                  </div>
            </div>
            <h3>Inception</h3>
            <span>120 min | Action</span>
        </div>
        <!-- Box 3 -->
        <div class="box">
            <div class="box-img">
                <img src="img/movie3.png" alt="">
                <div class="overlay">
                    <a href="Sign-in.php" class="btn1">PLAY</a>
                    <a href="Sign-in.php" class="btn2">MORE INFO</a>
                    <a href="Sign-in.php" class="btn3">ADD TO WISHLIST</a>
                  </div>
            </div>
            <h3>Avengers Endgame</h3>
            <span>120 min | Fantasy</span>
        </div>
        <!-- Box 4 -->
        <div class="box">
            <div class="box-img">
                <img src="img/movie4.png" alt="">
                <div class="overlay">
                    <a href="Sign-in.php" class="btn1">PLAY</a>
                    <a href="Sign-in.php" class="btn2">MORE INFO</a>
                    <a href="Sign-in.php" class="btn3">ADD TO WISHLIST</a>
                  </div>
            </div>
            <h3>The Meg</h3>
            <span>120 min | Action</span>
        </div>
        <!-- Box 5 -->
        <div class="box">
            <div class="box-img">
                <img src="img/movie5.png" alt="">
                <div class="overlay">
                    <a href="Sign-in.php" class="btn1">PLAY</a>
                    <a href="Sign-in.php" class="btn2">MORE INFO</a>
                    <a href="Sign-in.php" class="btn3">ADD TO WISHLIST</a>
                  </div>
            </div>
            <h3>City of God</h3>
            <span>120 min | Adventure</span>
        </div>
        </div>
    </section>
    <!-- Coming -->
    <section class="coming" id="coming">
        <h2 class="heading">Coming Soon</h2>
        <!-- Coming container -->
        <div class="coming-container swiper">
            <div class="swiper-wrapper">
                <!-- Box 1 -->
            <div class="swiper-slide box">
                <div class="box-img">
                    <img src="img/movie6.png" alt="">
                </div>
                <h3>Joker</h3>
                <span>120 min | Action</span>
            </div>
            <!-- Box 2 -->
            <div class="swiper-slide box">
            <div class="box-img">
                <img src="img/movie7.png" alt="">
            </div>
            <h3>Spider Man</h3>
            <span>120 min | Fantasy</span>
        </div>
                <!-- Box 3 -->
                <div class="swiper-slide box">
                <div class="box-img">
                    <img src="img/movie8.png" alt="">
                </div>
                <h3>V For Vendetta</h3>
                <span>120 min | Action</span>
            </div>
            
                <!-- Box 4 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/movie9.png" alt="">
                    </div>
                    <h3>John Wick</h3>
                    <span>120 min | Action</span>
                </div>
                
                <!-- Box 5 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/movie10.png" alt="">
                    </div>
                    <h3>Fast and Fuirious 9</h3>
                    <span>120 min | Race</span>
                </div>
                <!-- Box 1 -->
            <div class="swiper-slide box">
                <div class="box-img">
                    <img src="img/movie11.png" alt="">
                </div>
                <h3>Lightyear</h3>
                <span>120 min | Animation</span>
            </div>
            <!-- Box 2 -->
            <div class="swiper-slide box">
            <div class="box-img">
                <img src="img/movie12.png" alt="">
            </div>
            <h3>Chip 'n Dale: Rescue Rangers</h3>
            <span>120 min | Animation</span>
        </div>
                <!-- Box 3 -->
                <div class="swiper-slide box">
                <div class="box-img">
                    <img src="img/movie13.png" alt="">
                </div>
                <h3>Strange World</h3>
                <span>120 min | Animation</span>
            </div>
            
                <!-- Box 4 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/movie14.png" alt="">
                    </div>
                    <h3>The Bad Guys</h3>
                    <span>120 min | Animation</span>
                </div>
                
                <!-- Box 5 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/movie15.png" alt="">
                    </div>
                    <h3>Sing 2</h3>
                    <span>120 min | Animation</span>
                </div>
            </div>
        </div>
    </section>
    
    <section class="newsletter" id="newsletter">
        <h2>SUBSCRIBE TO GET <br>NEWSLETTER</h2>
        <form action="">
            <input type="email" class="email" placeholder="Enter Email..." required>
            <input type="submit" value="Subscribe" class="btn">
        </form>
    </section>
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
    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; MOMovies All Right Reserved.</p>
    </div>










    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="Script/script.js"></script>

</body>
</html>