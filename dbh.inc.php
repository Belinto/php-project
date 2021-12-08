<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "php project";

$conn = mysqli_connect($serverName, $dBUsername, $dBUsername, $dBName);

if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
} 