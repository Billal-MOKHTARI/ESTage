<?php
$pdo = new pdo('mysql:host=localhost;dbname=estage_db;charset=utf8', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);