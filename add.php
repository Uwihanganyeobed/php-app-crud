<?php
include "db.php";
//get all posts
if($_SERVER["REQUEST_METHOD"]== "POST"){
    //get the author
    $author = $_POST["author"];
    $body = $_POST["body"];
    //insert into database
    $sql = "INSERT INTO post(author,body) VALUES ('$author','$body')";
    mysqli_query($myConnection,$sql);
    header("Location: index.php");
}
?>