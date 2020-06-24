<?php
    include "db.php";
    $sql = "SELECT * FROM board WHERE idx = '{$_GET['idx']}'";
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

   
        <?php
        while($rows=mysqli_fetch_object($query)){
             echo "<li>$rows->idx</li>";
             echo "<li>$rows->subject</li>";
             echo "<li>$rows->writer</li>";
             echo "<li>$rows->content</li>";
             echo "<li>$rows->reg_date</li>";
            }
             ?>

    </ul>
    <p>
        <a href="./index.php">글목록</a>
        <a href="./update.php?idx=<?php echo $_GET['idx']?>">글수정</a>
        <a href="./delete.php?idx=<?php echo $_GET['idx']?>">글삭제</a>
        <a href="./write.php">글작성</a>

    </p>
</body>
</html>