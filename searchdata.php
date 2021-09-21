<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <form method='post' class="mb-3">
  <label class="form-label">Enter the search name</label>
  <input type="text" name='search' >

<button type='submit' name='submit' class="btn btn-dark my-3 btn-sm">show result</button>
</form>
<table class="table text-center">
    <?php
    if(isset($_POST['submit'])){
        $search = $_POST['search'];
        if($search == ''){
            echo '<h1 class="text-danger">cannot get empty data</h1>';
            die();
        }
        $sql = "select * from `student` where id like '%$search%' or firstName like '%$search%'";
        $result = mysqli_query($con,$sql);
        if($result){
            if(mysqli_num_rows($result)>0){
                echo '<thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">FirstName</th>
            <th scope="col">Email</th>
            <th scope="col">content</th>
          </tr>
        </thead>';
        while($row = mysqli_fetch_assoc($result)){
            echo'
            <tbody>
    <tr>
      <td>'.$row['id'].'</td>
      <td>'.$row['firstName'].'</td>
      <td>'.$row['Email'].'</td>
      <td>'.$row['content'].'</td>
    </tr>
    
    
  </tbody>';
        }
            }
            else{
                echo'<h1 class="text-danger">Sorry data not found</h1>';
            }
        }
          
    }
    ?>
  
  
</table>
</div>
</body>
</html>