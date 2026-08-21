<?php
$myConnection = mysqli_connect("localhost","root","","blog");

//check if connection is good
if(!$myConnection){
    die('Connection failed');
}

?>