
<?php

// Je déclare mes identifiants de la BDD
define('DSN','mysql:host=localhost;dbname=projet1');
define('USER','mathieu');
define('PASS','eden');

$pdo = new PDO(DSN, USER, PASS);
