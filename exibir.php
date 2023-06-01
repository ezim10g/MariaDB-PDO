<?php
// Include the database connection file
include_once("config.php");

// PHP class 
class Contact {
      public $id;
      public $name;
      public $age;
      public $email;
}

// Fetch contacts (in descending order)
$contacts = $pdo->query( "SELECT * FROM contacts ORDER BY id DESC")->fetchAll(PDO::FETCH_CLASS, 'Contact');

foreach($contacts as $contact) { 	
      echo $contact->id . " ";
      echo $contact->name . " ";
      echo $contact->age . " ";
      echo $contact->email . " ";
      echo "<br>";
}


?>