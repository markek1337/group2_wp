<?php 

$con = new mysqli('db', 'root', 'password', 'project_db');


if(!$con){
    die(mysqli_error($con));
    
}


?>