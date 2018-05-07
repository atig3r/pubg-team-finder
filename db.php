<?php
$servername = "localhost";
$username = "Database Username";
$password = "Database Password";
$dbname = "Database Name";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // echo "Connected";
    }
catch(PDOException $e)
    {
    echo "Database connection failed: " . $e->getMessage();
    }
?>
