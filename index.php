<?php
include "db.php";
//get all posts
$sql ="SELECT * FROM post";
$result = mysqli_query($myConnection, $sql);
?>
<!DOCTYPE html>
<html >
<head>
    <title>List of Posts</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Posts</h1>
        <!-- add a post -->
         <a href="add.php" class="btn">Add Post</a>
         <br> <br>
         <?php while($row = mysqli_fetch_assoc($result)) {?>
         <div class="post">
            <h3><?php echo $row["author"]?></h3>
            <p><?php echo $row["body"] ?></p>
            <a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
            <a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
         </div>
         <?php } ?>
    </div>
</body>
</html>