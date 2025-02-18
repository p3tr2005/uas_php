<?php
try {
    $db = new PDO("mysql:host=127.0.0.1;port=3306;dbname=uas", "root", "root", [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();

    die();
}
