
<?php
$id = $_POST['sid'];
$name = $_POST['sname'];
$address = $_POST['saddress'];
$class = $_POST['sclass'];
$phone = $_POST['sphone'];

$conn = mysqli_connect('localhost', "root", "", "crud") or die("connection failed");
$sql = "update student set sname = '{$name}', saddress = '{$address}', sclass = '{$class}',sphone = '{$phone}' where sid = '{$id}'";
$result = mysqli_query($conn, $sql);
header("Location:http://localhost/php/form/crud/index.php");
mysqli_close($conn);
?>