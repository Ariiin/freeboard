<?php
include "db.php";

$sql = 
"INSERT INTO `board` (`idx`, `subject`, `writer`, `content`, `reg_date`) 
VALUES (NULL, '{$_POST['subject']}', '{$_POST['writer']}', '{$_POST['content']}',now());
";
if($query = mysqli_query($con,$sql)){
    header("location:./");
}else{
    echo("<p>{$sql}</p>");
    print_r($con->error_list);

}
?>
