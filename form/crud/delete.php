<?php include 'header.php'; ?>
<?php
    if(isset($_POST['deletebtn'])){
        $conn = mysqli_connect("localhost","root","","crud") or die("Connection failed");
        $id = $_POST['sid'];
        $sql = "delete from student where sid = {$id}";
        $result = mysqli_query($conn,$sql) or die("Query Unsuccessful");
        header("Location:http://localhost/php/form/crud/index.php");
        mysqli_close($conn);
    }

?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?=$_SERVER["PHP_SELF"]; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>

</html>