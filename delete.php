<?php
// Include the database connection file
include_once("config.php");

$id = 3;

$stmt = $pdo->prepare("DELETE FROM contacts WHERE id = ?");
$stmt->execute([$id]);

?>