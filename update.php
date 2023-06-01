<?php
// Include the database connection file
include_once("config.php");

$name = 'novo nome';
$age = 36;
$email = 'novo@novo.com.br';
$id = 1;

//update
$stmt = $pdo->prepare("UPDATE contacts SET name = ?, age = ?, email = ? WHERE id = ?");
$stmt->execute([$name, $age, $email, $id]);


?>