<?php

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
    <?php
     include 'connect.php';
      $sql =" SELECT `id`, `firstName`, `content` FROM `student`";
      $result = mysqli_query($con, $sql);
      if($result){
      while($row=mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $firstname = $row['firstName'];
        $content = $row['content'];
        echo"
        <div class='card' style='width: 18rem;'>
        <img src='https://www.w3schools.com/bootstrap4/img_avatar3.png' class='card-img-top' alt='images'>
        <div class='card-body'>
          <h5 class='card-title'>$firstname</h5>
          <p class='card-text'>$content</p>
          <a href='home.php?ids=$id 'class='btn btn-primary'>Go somewhere</a>
        </div>
      </div>";
      }
      }
?>
      
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
  </body>
</html>