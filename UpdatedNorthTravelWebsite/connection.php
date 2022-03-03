<?php 

$con = new mysqli('db', 'app1','barakamenchips', 'app1');


if(!$con){
    die(mysqli_error($con));
    
}


?>