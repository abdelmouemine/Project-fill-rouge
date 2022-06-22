<?php
session_start();
include 'config.php';
if(!isset($_SESSION['username'])){
    
header('location:Home.php');
}else{
 $user_id = $_SESSION['username']; 
 $movie_id = $_GET['movie_id'];

 $sql_Check = "SELECT * FROM wishlist where movie_id = $movie_id AND user_id = '$user_id'";
 $result_check = mysqli_query($conn, $sql_Check);

 if (mysqli_num_rows($result_check) == 1) { 
    echo 'product already exist in wishlist';
    header('location:wishlist.php');
    
 }else{

    $insertWishlist = "INSERT INTO wishlist (movie_id, user_id) VALUES ('$movie_id', '$user_id')";   
	if(mysqli_query($conn, $insertWishlist)){
        header('location:wishlist.php');

    }

 }
 

//  $total = $total +  ($row_cart['price'] * $value['quantity']);









}

?>