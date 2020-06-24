<?php
    include "db.php";
    $sql = "SELECT * FROM board";
    $query = mysqli_query($con,$sql);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul> 

        <li>    
        <?php
        while($rows=mysqli_fetch_object($query)){
             echo "<p>$rows->idx</p>";
             echo "<p><a href='./view.php?idx={$rows->idx}'>$rows->subject</a></p>";
             echo "<p>$rows->writer</p>";
             echo "<p>$rows->content</p>";
             echo "<p>$rows->reg_date</p>";
            }
             ?>
    
    </li>

    </ul>
    <p>
        <a href="./write.php">글작성</a>
    </p>
</body>
</html>