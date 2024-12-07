<?php
$con=new mysqli('localhost','root','','users-app');
if(!$con){
    die(mysqli_error($con));
}