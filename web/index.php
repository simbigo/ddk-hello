<?php

$dsn = 'mysql:host=mysql57.ddk';
$user = 'root';
$pass = 'password';
$pdo = new PDO($dsn, $user, $pass);
$mysqlVersion = $pdo->query('SELECT VERSION()')->fetchColumn();

echo '<h1>ddk works!</h1>';
echo '<h4>PHP: ' . PHP_VERSION . '</h4>';
echo '<h4>MySQL: ' . $mysqlVersion . '</h4>';