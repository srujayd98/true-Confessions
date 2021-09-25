<?php

$conn = mysqli_connect('localhost','root','','data');

//$conn = mysqli_connect('sql206.epizy.com','epiz_29762768','zPBFOQG6FmOw','epiz_29762768_XXX');

if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}
 