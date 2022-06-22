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
  <link rel="stylesheet" href="Styles/wishlist.css">
  <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

  <title>Wishlist</title>
</head>
<body>
	  <style>
    .Pictures {
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
    <div class="container">
      <div class="table-app" id="product-table-app">
        <div class="table-wrapper">
          <h1 class="wishlist">Wishlist</h1>
          <br>
          <br>
          <table class="table" id="table">
            <thead>
              <tr>
				<th>Image</th>
				<th>Name</th>
				<th>lenght</th>
				<th>Action</th>
                
              </tr>
            </thead>

            <tbody>
			<?php
				$user_id = $_SESSION['username']; 
  
				$sql = "SELECT * FROM wishlist JOIN movie on movie.movie_id=wishlist.movie_id";
				$result = mysqli_query($conn, $sql);
			  
				if (mysqli_num_rows($result) > 0) {
				 // output data of each row
				 while($row = mysqli_fetch_assoc($result)) {
 			?>
        <tr >
          <td ><?php echo '<img class="Pictures" src=img/'. $row['picture'] .'>';?></td>
          <td ><?php echo $row["name"] ?></td>
          <td ><?php echo $row['length'] ?></td>
				  <td ><a class="btn" href="delete-wishlist.php?movie_id=<?php echo $row["movie_id"] ?>&user_id=<?php echo $_SESSION['username'] ?>">Delete</a></td>
				</tr>
				 
			
			<?php
				}
			   } else {
				 echo "0 results";
			   }
			 
			 
			 ?>




				
				</tbody>
			</table>		


          
          <div class="no-results hidden" id="no-results">
            <p class="no-results-message">
            </p>
          </div>
          <!-- /#no-results -->
        </div>
        <!-- /.table-wrapper -->
      </div>
      <!-- /.table-app -->
    </div>
    <!-- /.container -->
  <script>

  </script>

</body>
</html>