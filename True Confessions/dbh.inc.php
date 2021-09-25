<?php

$conn = mysqli_connect('localhost','root','','data');

//$conn = mysqli_connect('host name','user','pswd','db-name');

if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}
 
