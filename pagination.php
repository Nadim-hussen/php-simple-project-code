<?php
 include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagination in php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
 <style>
     a{
         text-decoration:none;
     }
 </style>
</head>
<body>
    <div class="container my-5">
<table class="table table-striped">
<thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">firstName</th>
      <th scope="col">content</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "select * from `student`";
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    // echo $num;
    $numberofPages = 1;
    $totalPages = ceil($num/$numberofPages);
    for($btn=1;$btn<=$totalPages;$btn++){
        echo'<button type="button" class="btn btn-primary mx-3"><a href="pagination.php?pages='.$btn.'" class="text-light"> Primary </a></button>';
    }
    if(isset($_GET['pages'])){
        $pages = $_GET['pages'];
    }else{
        $pages = 1;
    }
    $staringlimit = ($pages - 1)*$numberofPages;
    // limit will and items according to starting and giving length .but important thing is it will not include the starting number instead of doing this 
    //it will exclude the starting number and start after the number which came into and will print the items of the given length
    $sql = "select * from `student` limit ".$staringlimit.','.$numberofPages;
    $result = mysqli_query($con, $sql);
    while($row=mysqli_fetch_assoc($result)){
        echo'<tr>
        <td scope="row">'.$row['id'].'</td>
        <td>'.$row['firstName'].'</td>
        <td>'.$row['content'].'</td>
        <td>'.$row['Email'].'</td>
      </tr>';
    }
    ?>
  
  
    
    
  </tbody>
</table>
</div>
<script>
    
</script>
</body>
</html>