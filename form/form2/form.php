<?php

include 'header.php';

if (isset($_GET['name'], $_GET['email'], $_GET['password'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $password = $_GET['password'];

    echo "<p>Your name is <b> $name </b> </p>";
    echo "<p>Your email is <b> $email </b> </p>";
    echo "<p>Your password is <b> $password </b> </p>";
} else {
    echo "<h3>You need to provide your name and email address </h3>";
}

?>

<div class="container">
    <div class="col-md-6">
        <table class="table my-3">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $_GET['name'] ?> </td>
                    <td><?= $_GET['email'] ?> </td>
                    <td><?= $_GET['password'] ?> </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</body>

</html>