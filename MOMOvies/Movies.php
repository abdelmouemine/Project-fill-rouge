<?php 
session_start();
 include 'config.php';


if (!isset($_SESSION['username'])) {
    header("Location: Sign-in.php");
}
if(isset($_GET['movie_id'])){
    $movie_id = $_GET['movie_id'];
   $sql = "SELECT * FROM movie  WHERE movie_id='$movie_id'";
   $result = mysqli_query($conn, $sql);
 
$row = mysqli_fetch_assoc($result);

$movie_name  = $row['name'];
$length  = $row['length'];
$movie_description  = $row['description'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link rel="stylesheet" href="Styles/Home-style.css">
    <link rel="stylesheet" href="Styles/Movies-style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<style>
    .Pictures {
      width: 187px;
      height: 282px;
    }
  </style>

    <!-- Navbar -->
    <header>
        <a href="#" class="logo">
            <img src="LOGO/Logo.png" alt="">
        </a>
        <div class='bx bx-menu' id="menu-icon"  ></div>

        <!-- Menu -->
        <ul class="navbar">
            <li><a href="Home.php">HOME</a></li>
            <li><a href="Movies.php" class="home-active">MOVIES</a></li>
            <li><a href="Actors.php">ACTORS</a></li>
            <li><a href="Contact.php">CONTACT</a></li>
            <li><a href="About.php">ABOUT</a></li>
        </ul>
        <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
        <a href="wishlist.php"><i class="fa fa-heart-o"></i></a>
        <a href="logout.php" class="btn" >Logout</a>
        <!-- <input type="text" placeholder="Search.."> -->
    </header>
    <section class="question" id="movies">
            <div class="search">
                <h1>CHECK OUT YOUR BEST MOVIE</h1>
                <form action="" method="POST">
                    <input type="text" class="text" placeholder="Search..." name="search">
                    <input type="submit" value="Search" class="btn">
                </form>
        </div>

        
         

    </section>
    <!-- Movies -->
    <section class="movies" >
        <h2 class="heading">All Movies</h2>
        <!-- Movies container -->
        <div class="movies-container">
        <?php
       

       if(isset($_POST['search'])){
       $search = $_POST['search'];
       $sql = "SELECT * FROM movie WHERE name LIKE '%$search%';";
       }
       else{
       $sql = "SELECT * FROM movie";
       }
       $result = mysqli_query($conn, $sql);
       $resultCheck = mysqli_num_rows($result);
   
       if ($resultCheck > 0){
           while ($row = mysqli_fetch_assoc($result)){
               ?>
            <!-- Box 1 -->
        <div class="box">
            
        <div class="box-img">
             <a href="Movie-landing.php?movie_id=<?php echo$row['movie_id']; ?>"><?php echo '<img class="Pictures" src=img/'. $row['picture'] .'>';?></a>
        </div>
        <h3><?php echo $row['name'];?></h3>
        <span><?php echo $row['length'];?></span>
        
    </div>
    <?php
                    }
                }
            ?>
        </div>
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






    <script src="Script/script.js"></script>
</body>
</html>