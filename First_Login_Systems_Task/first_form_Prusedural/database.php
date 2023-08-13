<?php

$hostname = "localhost";

$DBuser = 'root';

$DBpassword = "
";

$DBname = "users";

$port = 3307;

$conn = mysqli_connect($hostname, $DBuser, $DBpassword, $DBname, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}