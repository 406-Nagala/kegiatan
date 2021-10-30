<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "pert4_pwd";
$con = @mysqli_connect($shot, $username, $password, $database);

if (!$con) {
    echo "Error:" . mysqli_connect_error();
    exit();
}