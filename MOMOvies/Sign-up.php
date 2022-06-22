<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: Sign-in.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM usertable WHERE username='$username'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO usertable (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Username Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link rel="stylesheet" href="Styles/Sign-up-style.css">
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
        <a href="Sign-in.php" class="btn">LOGIN</a>
        <!-- <input type="text" placeholder="Search.."> -->
    </header>

  <div class="main">
    <p class="sign" align="center">Sign up</p>
    <form class="form1" action="" method="post">
        <input class="un " type="text" align="center" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
        <input class="un " type="email" align="center" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
        <input class="pass" type="password" align="center" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
        <input class="pass" type="password" align="center" placeholder="Repeat Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
        <button class="submit" value="Submit" name="submit" type="submit" align="center">Sign up</button>

        <p class="forgot" align="center"><a href="#">Forgot Password?</p>
            <br>
        <p class="signup" align="center"><a href="Sign-in.php">You have an account ? <span> login </span></p>
        </form>

        
            
                
    </div>
</section>

    <script src="Script/script.js"></script>
</body>

</html>