<?php
namespace App\Core;

use PDO;
use PDOException;

class Database {
public static function connect() {
try {
return new PDO(
"mysql:host=localhost;dbname=user_management;charset=utf8",
"root",
"", 
[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
} catch (PDOException $e) {
die("DB connection failed: " . $e->getMessage()); } } }
?>
