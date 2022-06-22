<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: Home.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM usertable WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];
		header("Location: Home.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>


<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link rel="stylesheet" href="Styles/Sign-in-style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Sign in</title>
</head>

<body>
    <section class="background">
    <header>
        <a href="#" class="logo">
            <img src="LOGO/Logo.png" alt="">
        </a>
        <div class='bx bx-menu' id="menu-icon"  ></div>
    
        <!-- Menu -->
        <ul class="navbar">
            <li><a href="Trailer.php" >HOME</a></li>
            <li><a href="Movies.php">MOVIES</a></li>
            <li><a href="Actors.php">ACTORS</a></li>
            <li><a href="Contact.php">CONTACT</a></li>
            <li><a href="About.php">ABOUT</a></li>
        </ul>
        <a href="Sign-up.php" class="btn">SIGNUP</a>
        <!-- <input type="text" placeholder="Search.."> -->
    </header>

  <div class="main">
    <p class="sign" align="center">Login</p>
    <form class="form1" action="" method="post">
        <input class="un " type="text" align="center" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
        <input class="pass" type="password" align="center" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
        <button class="submit" align="center" name="submit">Sign in</button>
        <p class="forgot" align="center"><a href="#">Forgot Password?</p>
            <br>
        <p class="signup" align="center"><a href="Sign-up.php">You don't have account ? <span> Signup </span></p>
        </form>
        
            
                
    </div>
</section>

    <script src="Script/script.js"></script>
</body>

</html>