<?php 
include "config.php";
$_SESSION["username"]=$_GET['movie_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/8ad36ff707.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/84697556e3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
  <title>Wishlist</title>
</head>
<body>
    <div class="container">
      <div class="table-app" id="product-table-app">
      <?php echo $_SESSION["username"];?>
        <!-- /.table-handler -->_id
        <div class="table-wrapper">
          <table class="table" id="table">
            <thead>
              <tr class="table-head">
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
               	<td style="vertical-align: -webkit-baseline-middle;width:140px;text-align:center;" ><?php echo '<img class="Pictures" src=img/'. $row['picture'] .'>';?>"style="width:63px;" ></td>
                <td style="vertical-align: -webkit-baseline-middle;width: 135px;text-align:center;"><?php echo $row["Name"] ?></td>
                <td style="vertical-align: -webkit-baseline-middle;width:140px;text-align:center;"><?php echo $row['lenght'] ?></td>
				<td style="vertical-align: -webkit-baseline-middle;width:140px;text-align:center;">
				<a href="delete-wishlist.php?pid=<?php echo $row["movie_id"] ?>&user_id=<?php echo $_SESSION['username'] ?>">Delete</a> 
				</td>
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
              No results found.
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