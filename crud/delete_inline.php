

<?php

    $stu_id = $_GET['id'];

    include 'config.php';

    $sql = "delete from student where sid = {$stu_id}";
    $result = mysqli_query($conn,$sql) or die("Query Unsuccessfull");

    header("Location: http://localhost/php/crud/index.php");
    mysqli_close($conn);
?>