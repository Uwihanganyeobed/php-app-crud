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

<!DOCTYPE html>
<html >
<head>
    <title>Add Posts</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Add Post</h1>
        <form action=""method="POST">
            <label>Author</label>
            <input type="text"
            name="author"
            required>
            <label>Body</label>
            <input type="text"
            name="body"
            required>
            <button type="submit">Add Post</button>
        </form>
        <a href="index.php">Back Home</a>
    </div>
</body>
</html>