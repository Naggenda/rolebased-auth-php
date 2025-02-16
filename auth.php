<?php
$host = "localhost";
$user = "root";
$password = 'Joshua2@3';
$db_name = "contentmgt";

$con = mysqli_connect($host, $user, $password, $db_name);
if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}

$email = $_POST['user'];
$password = $_POST['pass'];

//to prevent from mysqli injection  
$email = stripcslashes($email);
$password = stripcslashes($password);
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);

$sql = "select *from user where email = '$email' and password = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    session_start();
    $username = $row['username'];
    if ($row['role'] == 'admin') {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['id'] = $id;
        header("location:Admin");
    } else {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['id'] = $id;
        header("location:User");
    }
} else {
    echo "<h1> Login failed. Invalid email or password.</h1>";
    header("location:index.php");
}
?>