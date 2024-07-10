

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form page</title>
</head>
<body>
    <h3>Ram Kumar </h3>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="">Name : </label>
        <input type="text" name="name"> <br><br>

        <label for="">Age : </label>
        <input type="text" name="age"><br><br>

        <input type="submit" name ="save">
    </form>

    <?php

        if(isset($_POST['save'])){
            echo $_POST['name'] . "<br>";
            echo $_POST['age']. "<br>";
        }

    ?>


</body>
</html>