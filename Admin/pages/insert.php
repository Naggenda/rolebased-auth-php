<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'Joshua2@3';
$DATABASE_NAME = 'contentmgt';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$id = $_REQUEST['id'];
$fullname = $_REQUEST['fullname'];
$telnumber = $_REQUEST['telnumber'];
$residence = $_REQUEST['residence'];
$date = $_REQUEST['date'];
$gender = $_REQUEST['gender'];

$sql = "INSERT INTO attendance (id, fullname, telnumber, residence, date,gender) VALUES (NULL, '$fullname', '$telnumber', '$residence', '$date', '$gender')";

if(mysqli_query($con, $sql)){
    echo "Success";
    header("Location: addattendance.php");
}
else{
    echo "ERROR: Hush! Sorry $sql. ". mysqli_error($con);
}

mysqli_close($con);
