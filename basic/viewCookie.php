<?php

    echo "Cookie value is " .$_COOKIE["user"];

    setcookie("user","",time() - (86400 * 30), "/");

?>