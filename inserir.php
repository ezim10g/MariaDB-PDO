<?php

include_once("config.php");

$name = 'ezionew';
$age = 30;
$email = 'new-ao@ezio.com.br';

$stmt = $pdo->prepare("INSERT INTO contacts (name,age,email) VALUES(?, ?, ?)");
$stmt->execute([$name, $age, $email]);

?>