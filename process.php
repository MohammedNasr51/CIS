<?php
echo nl2br('processing ...<br>');
// Get variables
if (isset($_GET['name'])) {
    echo 'GET : your name is ' . $_GET['name'];
}

// POST variables
if (isset($_POST['name'])) {
    echo 'POST : your name is ' . $_POST['name'];
}