<?php
include "db.php";

$sql = "DELETE FROM board WHERE idx='{$_GET['idx']}'";
if($query = mysqli_query($con,$sql)){
    header("location:./");
}else{
    echo("<p>{$sql}</p>");
    print_r($con->error_list);

}
?>
