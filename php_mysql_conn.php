<?php
//database connection
include('../dbconn.php');

//MySQL PDO Connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $err_msg)
    {
    echo "Connection failed: " . $err_msg->getMessage();
    }
//Close database connect
$conn = null;
?>
