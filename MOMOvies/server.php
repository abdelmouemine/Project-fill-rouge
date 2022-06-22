<?php 
session_start();
include 'config.php';

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
    <title>server</title>
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link rel="stylesheet" href="Styles/server.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
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
            <li><a href="Home.php">HOME</a></li>
            <li><a href="Movies.php">MOVIES</a></li>
            <li><a href="Actors.php">ACTORS</a></li>
            <li><a href="Contact.php">CONTACT</a></li>
            <li><a href="About.php">ABOUT</a></li>
            
        </ul>
        <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
        <a href="wishlist.php"><i class="fa fa-heart-o"></i></a>
        <a href="logout.php" class="btn" >Logout</a>
        <!-- <input type="text" placeholder="Search.."> -->
    </header>
    <?php 

if (isset($_GET['movie_id'])) {
	$movie_id = $_GET['movie_id'];


$query = "SELECT * FROM movie where movie_id=$movie_id";
$run = mysqli_query($conn,$query);
if ($run) {
	while ($row=mysqli_fetch_assoc($run)) {
		?>

    <div class="movie-section">
        <div id="movie-title">
            <h1><?php echo $row['name'];?></h1>
        </div>
   
        <div id="movie-video">
            <iframe width="1000" height="480" src="<?php echo $row['server'];?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>


    <?php
	}
}

}


 ?>

<script src="Script/script.js"></script>
</body>
</html>