<?php
session_start();
include 'config.php';

if(isset($_POST['submit'])){
    $movie_id=$_POST['movie_id'];
    $name=$_POST['name'];
    $length=$_POST['length'];
    $description=$_POST['description'];
    $actors=$_POST['actors'];
    $director=$_POST['director'];
    $trailer=$_POST['trailer'];
    $server=$_POST['server'];
    $picture=$_FILES['picture']['name'];
    $fileLocation='img/' .$picture;
    $NameOfPicture=$_FILES['picture']['tmp_name'];
    


    $sql="insert into `movie` (movie_id,name,length,description,actors,director,trailer,server,picture)
    values('$movie_id','$name','$length','$description','$actors','$director','$trailer','$server','$picture')";
    $result=mysqli_query($conn,$sql);
    move_uploaded_file($NameOfPicture,$fileLocation);
    if($result){
        header('location:Movies.php');
    }
    else
    {
        die(mysqli_error($conn));
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Add Movie</title>
</head>
<style>
    #display_image{
        width: 120px;
        height: 120px;
        border : 1px solid black;
        background-position: center;
        background-size: cover;
    }
</style>
<body>
<!-- id,name,length,description,actors,director,trailer,server,picture -->
    <div class="container">
        <form method = "post" enctype="multipart/form-data">
            <div class="form-group">
                <label>id</label>
                <input type="text" class="form-control"  placeholder="Enter id" name="movie_id">
                <small id="idHelp" class="form-text text-muted">You have special id</small>
            </div>

            <div class="form-group">
                <label>name</label>
                <input type="text" class="form-control"  placeholder="Enter name" name="name">
            </div>

            <div class="form-group">
                <label>length</label>
                <input type="text" class="form-control"  placeholder="Enter length" name="length">        
            </div>

            <div class="form-group">
                <label>description</label>
                <input type="text" class="form-control"  placeholder="Enter description" name="description">
            </div>

            <div class="form-group">
                <label>actors</label>
                <input type="text" class="form-control"  placeholder="Enter actors" name="actors">
            </div>

            <div class="form-group">
                <label>director</label>
                <input type="text" class="form-control" placeholder="Enter director" name="director">
            </div>

            <div class="form-group">
                <label>trailer</label>
                <input type="text" class="form-control" placeholder="Enter trailer" name="trailer">
            </div>

            <div class="form-group">
                <label>server</label>
                <input type="text" class="form-control" placeholder="Enter server" name="server">
            </div>

            <div class="form-group">
                <label>Photo</label>
                <input type="file" id="image_input" class="form-control" placeholder="Enter picture" name="picture" >
                <div id="display_image"></div>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>

        </form>
    </div>

    <script>
        const image_input = document.querySelector("#image_input");
var uploaded_image;

image_input.addEventListener('change', function() {
  const reader = new FileReader();
  reader.addEventListener('load', () => {
    uploaded_image = reader.result;
    document.querySelector("#display_image").style.backgroundImage = `url(${uploaded_image})`;
  });
  reader.readAsDataURL(this.files[0]);
});
    </script>

    
</body>
</html>