<?php

require_once __DIR__ . '\composer\vendor\autoload.php';

$con = new MongoDB\Client("mongodb://localhost:27017");

$db = $con->guvi;

$c = $db->collection;

$cursor = $c->find();

foreach ($cursor as $document) {
    echo $document["Name"] . "  ",
         $document["email"] . "  " ,
         $document["Age"] . "  ",
         $document["DOB"] . "  ",
         $document["Phone_number"]."<br>";
 }

// $m = new MongoDB\Driver\Manager("mongodb://localhost:27017");
	
// $db = $m->guvi;

// $collection = $db->createCollection("mycol");

?>