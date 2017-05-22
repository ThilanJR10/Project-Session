<?php
$handler;
try {
    $handler = new PDO('mysql:host=localhost;dbname=db_coursework', 'root', '');
    $handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Sorry, Database connection failed!";
}
?>