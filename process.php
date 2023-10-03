<?php

// Connect to the database
$conn = mysqli_connect('localhost', 'root', 'MohamedNasr2002@', 'ajax', 3307);

echo nl2br('processing ... ');

// Get variables
if (isset($_GET['name'])) {
    echo 'GET : your name is ' . $_GET['name'];
}

// POST variables
if (isset($_POST['name'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);

    echo 'POST : your name is ' . $_POST['name'];

    $query = "INSERT INTO users(name) VALUES('$name')";

    if (mysqli_query($conn, $query)) {
        echo ' Sound it works...';
    } else {
        echo ' Error: ' . mysqli_error($conn);
    }
}