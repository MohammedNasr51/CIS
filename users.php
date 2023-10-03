<?php

$conn = mysqli_connect('localhost', 'root', 'MohamedNasr2002@', 'ajax', 3307);

$query = "SELECT * FROM users";

$result = mysqli_query($conn, $query);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);