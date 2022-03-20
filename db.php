<?php
$host = "127.0.0.1";
$dbname = "interviews";
$username = "interviews";
$password = "interviews";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}