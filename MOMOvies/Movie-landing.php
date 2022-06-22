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
    <title>Movie Landing</title>
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link rel="stylesheet" href="Styles/Movie-landing-style.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body>
  <style>
    .cover {
      width: 187px;
      height: 282px;
    }
  </style>
    <header>
        <a href="#" class="logo">
            <img src="LOGO/Logo.png" alt="">
        </a>
        <div class='bx bx-menu' id="menu-icon"  ></div>
    
        <!-- Menu -->
        <ul class="navbar">
            <li><a href="Home.php" >HOME</a></li>
            <li><a href="Movies.php">MOVIES</a></li>
            <li><a href="Actors.php">ACTORS</a></li>
            <li><a href="Contact.php">CONTACT</a></li>
            <li><a href="About.php">ABOUT</a></li>
        </ul>
        <?php echo "<h1 class='username'>Welcome " . $_SESSION['username'] . "</h1>"; ?>
        <a href="wishlist.php"><i class="fa fa-heart-o"></i></a>
        <a href="logout.php" class="btn" >Logout</a>
        <!-- <input type="text" placeholder="Search.."> -->
    </header>

    <!-- Main -->
    <div class="movie-card">
    <?php 

if (isset($_GET['movie_id'])) {
	$movie_id = $_GET['movie_id'];
  $user_id = $_SESSION['username']; 



$query = "SELECT * FROM movie where movie_id=$movie_id";
$run = mysqli_query($conn,$query);
if ($run) {
	while ($row=mysqli_fetch_assoc($run)) {
		?>
  
        <div class="container">
          
          <a href="server.php?movie_id=<?php echo$row['movie_id']; ?>"><?php echo '<img alt="cover" class="cover" src=img/'. $row['picture'] .'>';?></a>
              
          <div class="hero">
                  
            <div class="details">
            
              <div class="title1"><?php echo $row['name'];?><span>PG-13</span></div>
      
              <div class="title2"><?php echo $row['length'];?></div>    
              
              <span class="likes">109 likes</span>
              <br>
              <br>
              <a href="wishlistcheck.php?movie_id=<?php echo $_GET['movie_id'] ?>" class="btn"><span>+ Add to Wish List</span></a>
              
            </div> <!-- end details -->
            
          </div> <!-- end hero -->
          
          <div class="description">
            
            <div class="column1">
              <span class="tag">action</span>
              <span class="tag">fantasy</span>
              <span class="tag">adventure</span>
            </div> <!-- end column1 -->
            
            <div class="column2">
              <h2>Summaries</h2>
              <br>
              <p><?php echo $row['description'];?></p>
                <br>
              
              <div class="avatars">
                <h2>Actors</h2>
              <br>
                <a href="#" data-tooltip="Person 1" data-placement="top">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/hobbit_avatar1.png" alt="avatar1" />
                </a>
                
                <a href="#" data-tooltip="Person 2" data-placement="top">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/hobbit_avatar2.png" alt="avatar2" />
                </a>
                
                
                <a href="#" data-tooltip="Person 3" data-placement="top">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/hobbit_avatar3.png" alt="avatar3" />
                </a>
                
              </div>
              <br>
               
              <div class="avatars">
                <h2>Director</h2>
                <br>
                <a href="#" data-tooltip="<?php echo $row['director'];?>" data-placement="top">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/hobbit_avatar1.png" alt="avatar1" />
                </a>
              </div>
              <br> <!-- end avatars -->
              
              <div>
                <h1>Trailer</h1>
                <?php echo $row['trailer'];?>
              </div>
              
              
            </div> <!-- end column2 -->
          </div> <!-- end description -->
          
         
        </div> <!-- end container -->
        <?php
	}
}

}


 ?>
      </div> <!-- end movie-card -->

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