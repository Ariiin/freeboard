<?php
    include "db.php";
    $sql = "SELECT * FROM board WHERE idx = '{$_GET['idx']}'";
    $query = mysqli_query($con,$sql);
    $rows=mysqli_fetch_object($query);

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="./update_ok.php?idx=<?php echo $_GET['idx'] ?>" method="post">
        <fieldset>
        <legend>글수정</legend>
        <ul>
            <li>
        <label>글제목: <input type="text" name="subject" value="<?php echo $rows->subject?>"></label>
        </li>
        <li>
        <label>작성자: <input type="text" name="writer" value="<?php echo $rows->writer?>"></label>
        </li>
        <li>
        <label>내용: <input type="text" name="content" value="<?php echo $rows->content?>"></label>
        </li>
        </ul>
        <p>
            <button type="button" onclick="history.back();">취소</button>
            <button type="submit">완료</button>
        </p>
    </fieldset>
    </form>
    
</body>
</html>