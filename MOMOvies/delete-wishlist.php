<?php
session_start();
include('config.php');
if(!isset($_SESSION['username'])){
    
header('location:Sign-in.php');
}else{
$movie_id = $_GET['movie_id']; 
$user_id = $_GET['user_id'];
 

    $delWishlist = "DELETE FROM wishlist WHERE movie_id='$movie_id' AND user_id='$user_id'";   
	if(mysqli_query($conn, $delWishlist)){
        header('location:wishlist.php');

    }
 









}

?>