<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=testtask', 'root', 'root');
    echo "Connected successfully";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}