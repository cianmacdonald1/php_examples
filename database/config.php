<?php


$hn = "localhost";
$un = "cian_admin";
$pw = "e1T6()tE[/MvD5cB";
$db = "musiccm";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// else echo 'Connection Successful'; 


?>