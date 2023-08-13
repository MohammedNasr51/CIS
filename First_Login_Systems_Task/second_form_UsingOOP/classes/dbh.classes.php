<?php

class Dbh
{
    protected function connect()
    {
        //         $hostname = "localhost";

        //         $DBuser = 'root';

        //         $DBpassword = "
// ";

        //         $DBname = "users";

        //         $port = 3307;

        //         $conn = mysqli_connect($hostname, $DBuser, $DBpassword, $DBname, $port);

        //         if (!$conn) {
//             die("Connection failed: " . mysqli_connect_error());
//         }
//         return $conn;
        try {
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=ooplogin;port=3307', $username, $password);
            return $dbh;
        } catch (PDOException $e) {
            print "Error: " . $e->getMessage() . "</br>";
            die();
        }
    }
}