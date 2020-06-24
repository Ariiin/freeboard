<?php
include "db.php";

$sql = "UPDATE board SET 
subject = '{$_POST['subject']}',writer = '{$_POST['writer']}',content = '{$_POST['content']}'
WHERE idx ='{$_GET['idx']}'";
if($query = mysqli_query($con,$sql)){
    header("location:./view.php?idx={$_GET['idx']}");
}else{
    echo("<p>{$sql}</p>");
    print_r($con->error_list);

}
?>