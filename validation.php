<?php

session_start();
// header("location: index.html");

$con = mysqli_connect('localhost:3306', 'root', '', 'login');

//check connection
if ($con) {
    // do nothing
} else {
    echo "connection failed";
}

// get values from form
$username = $_POST["user"];
$password = $_POST["pass"];


//prevent sql injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysqli_real_escape_string($password);

$query = "select * from users where username = '$username' && password = '$password' ";

$result = mysqli_query($con, $query);

$num = mysqli_num_rows($result);

if ($num == 1) {
    $_SESSION['username'] = $username;
    header('location:home.php');
} else {
    echo "error";
    // header('location: login.html');
}