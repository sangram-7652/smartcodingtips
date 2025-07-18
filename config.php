<?php
$host = 'localhost';
$db   = 'smartcodingtips';
$user = 'root';
$pass = 'admin';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}



function base_url($path = '') {
    $host = $_SERVER['HTTP_HOST'];
    $base = ($host === 'localhost') ? '/smartcodingtips' : '';
    return $base . '/' . ltrim($path, '/');
}
