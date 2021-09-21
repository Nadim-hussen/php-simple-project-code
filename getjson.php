<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>json data</title>
</head>
<body>
    <?php
    $file_name = 'my.json';
    $jsonData = file_get_contents($file_name);
    $arr = json_decode($jsonData,true);
   
   echo '<table border="1" cellpadding ="10px" width="100%">' ;
   foreach($arr as list( "id"=>$id,"firstName"=>$name, "content"=>$content,"Email"=>$email)){
       echo "<tr><td>{$id}</td><td>{$name}</td><td>{$content}</td><td>{$email}</td></tr>";
   }
   echo '</table>' ;
    ?>
</body>
</html>