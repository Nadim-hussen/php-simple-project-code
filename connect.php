<?php

$con = new mysqli('localhost', 'root', '', 'nadim') ;

if($con){
    echo 'yes connection successful';
}else{
    die('connection failed :') ;
}

?>