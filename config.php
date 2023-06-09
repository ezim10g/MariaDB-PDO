﻿<?php

$dsn = "mysql:host=127.0.0.1;dbname=rolodex;charset=utf8mb4";

$options = [
  PDO::ATTR_EMULATE_PREPARES   => false, // Disable emulation mode for "real" prepared statements
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Disable errors in the form of exceptions
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Make the default fetch be an associative array
];

try {
  $pdo = new PDO($dsn, "ezio", "26112008", $options);
} 
catch (Exception $e) {
  error_log($e->getMessage());
  exit('Something bad happened'); 
}

?>