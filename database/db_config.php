<?php

DEFINE('DB_USER', 'gdt'); 
DEFINE('DB_PASS', 'gdt13'); 
DEFINE('DSN', 'mysql:host=localhost;dbname=gdt;port=3306;charset=utf8'); 

$pdo_options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
$db = new PDO(DSN, DB_USER, DB_PASS, $pdo_options);


?>