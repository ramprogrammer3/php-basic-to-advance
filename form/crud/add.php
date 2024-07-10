<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <?php
            $conn = mysqli_connect('localhost', 'root', "", "crud") or die("connection failed");
            $sql = "select * from studentclass";
            $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

            if (mysqli_num_rows($result) > 0) {
            ?>
                <label>Class</label>
                <select name="class">
                    <option selected> Select class </option>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <option value="<?= $row['cid']; ?>"> <?= $row['cname']; ?> </option>
                    <?php } ?>
                </select>
            <?php  } else {
                echo "<h3> No class found </h3>";
            }
            mysqli_close($conn);
            ?>

        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save" />
    </form>
</div>
</div>
</body>

</html>