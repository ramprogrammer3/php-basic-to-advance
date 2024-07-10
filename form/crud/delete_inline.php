
<?php
$conn = mysqli_connect('localhost', 'root', '', 'crud') or die("connection failed");
$id =  $_GET['id'];
$sql = "delete from student where sid = {$id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
header("Location:http://localhost/php/form/crud/index.php");
mysqli_close($conn);
?>