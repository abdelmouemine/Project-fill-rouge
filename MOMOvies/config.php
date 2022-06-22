<?php 

// header('location:sign-in.php');
$conn = mysqli_connect('localhost','root','','momovie' );
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
?>