
<?php
    $cookie_name = "user";
    $cookie_value = "ramkumar";


    setcookie($cookie_name,$cookie_value,time() + (86400 * 30), "/");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie in php </title>
</head>
<body>

    <?php
        if(!isset($_COOKIE[$cookie_name])){
            echo "Cookie is not set <br>";
        }else{
            echo $_COOKIE[$cookie_name];
        }
    ?>
    
</body>
</html>