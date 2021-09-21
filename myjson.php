<?php
include 'connect.php';
$sql = "select * from `student`";
$result = mysqli_query($con,$sql)or die('sql failed achive data');
$output = mysqli_fetch_all($result,MYSQLI_ASSOC);
$showdata = json_encode($output,JSON_PRETTY_PRINT);
echo '<pre>';
print_r($showdata);
echo '</pre>';



?>