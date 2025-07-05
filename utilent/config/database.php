<?php

if (!defined('BASE_PATH')) {
    define('BASE_PATH', dirname(__DIR__));
}

function getConnection() {
    try {
        return new PDO(
            'mysql:host=localhost;dbname=fragcom_linking_people;charset=utf8mb4',
            'fragcom_develop',
            'S15t3ma5@Fr4g0l4N',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }
}
