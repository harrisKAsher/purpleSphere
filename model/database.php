<?php
    $dsn = 'mysql:host=localhost;dbname=purplesp_purplesphere';
    $username = 'fake_user_name';
    $password = 'fake_password';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
