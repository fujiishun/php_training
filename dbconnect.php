<?php
try {
    $db = new PDO ('phpMyAdmin:dbname=test;host=127.0.0.1; charset=utf8', 'root', '');
} catch (PDOException $e) {
    echo 'DB接続エラー' . $e->getMessage;
}
?>