<?php
    try {
        $dsn = 'mysql:host=mysql;dbname=mysql;charset=utf8;port=3306';
        $pdo = new PDO($dsn, 'root', 'root');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>
