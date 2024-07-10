<?php
$name = $_POST['sname'];
$address = $_POST['saddress'];
$class = $_POST['class'];
$phone = $_POST['sphone'];

$conn = mysqli_connect('localhost', 'root', '', 'crud') or die("connection failed");
$sql = "insert into student(sname,saddress,sclass,sphone) values('{$name}','{$address}','{$class}','{$phone}')";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

header("Location:http://localhost/php/form/crud/index.php");
mysqli_close($conn);
