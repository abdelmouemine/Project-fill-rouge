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
    <title>Actor</title>
    <link rel="stylesheet" href="./Styles/Actor-style.css">
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
    <section>
        <div class="container">
            <div id="content2">
                <h1>Jason Statham</h1>
                
                <p>Jason Statham was born in Shirebrook, Derbyshire, to Eileen (Yates), a dancer, and Barry Statham, a street merchant and lounge singer. He was a Diver on the British National Diving Team and finished twelfth in the World Championships in 1992. He has also been a fashion model, black market salesman and finally of course, actor.</p>
            
                <p>Born: July 26, 1967 in Shirebrook, Derbyshire, England, UK</p>
            </div>
            <div id="sidebar">
                <img src="img/actor1111.png" alt="">
            </div>
            <div id="content1">
                <h1>About</h1>
                <p>He received the audition for his debut role as Bacon in Lock, Stock and Two Smoking Barrels (1998) through French Connection, for whom he was modeling. They became a major investor in the film and introduced Jason to Guy Ritchie, who invited him to audition for a part in the film by challenging him to impersonate an illegal street vendor and convince him to purchase fake jewelry. Jason must have been doing something right because after the success of Lock, Stock and Two Smoking Barrels (1998) he teamed up again with Guy Ritchie for Snatch (2000), with co-stars including Brad Pitt, Dennis Farina and Benicio Del Toro. After Snatch (2000) came Turn It Up (2000) with US music star Ja Rule, followed by a supporting actor role in the sci-fi film Ghosts of Mars (2001), Jet Li's The One (2001) and another screen partnership with Vinnie Jones in Mean Machine (2001) under Guy Ritchie's and Matthew Vaughn's SKA Films. Finally in 2002 he was cast as the lead role of Frank Martin in The Transporter (2002). Jason was also in the summer 2003 blockbuster remake of The Italian Job (1969), The Italian Job (2003), playing Handsome Rob.
                </p>
            </div>
            <footer>
                <h1>Credits</h1>
                <div class="movies-carts">
                    <a href=""><img src="Jason statham movies/1.png" alt=""></a>
                    <a href=""><img src="Jason statham movies/2.png" alt=""></a>
                    <a href=""><img src="Jason statham movies/3.png" alt=""></a>
                    <a href=""><img src="Jason statham movies/4.png" alt=""></a>
                    <a href=""><img src="Jason statham movies/5.png" alt=""></a>
                    <a href=""><img src="Jason statham movies/6.png" alt=""></a>
                    <a href=""><img src="Jason statham movies/7.png" alt=""></a>
                    <a href=""><img src="Jason statham movies/8.png" alt=""></a>
                    <a href=""><img src="Jason statham movies/9.png" alt=""></a>
                    <a href=""><img src="Jason statham movies/10.png" alt=""></a>
                </div>
            </footer>
          </div>
          
    </section>
    <!-- End Section -->

    <script src="Script/script.js"></script>
    
</body>
</html>