<?php

echo 'hello this is user';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User | Dashboard</title>
</head>

<body>
    <?php
       echo $_SESSION['username'];
    ?>
    <a href="../logout.php">Logout</a>
</body>

</html>