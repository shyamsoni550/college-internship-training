<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "feedback";
$_CONN = false;

$conn = mysqli_connect($servername, $username, $password,$databasename);
if($conn -> connect_error)
{
   
    die($conn -> connect_error);
}
else
{
    $_CONN=true;
}
