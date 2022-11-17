<?php
session_start();
$email= $_SESSION['email'];

require_once __DIR__ . '\composer\vendor\autoload.php';

$con = new MongoDB\Client("mongodb://localhost:27017");

$db = $con->guvi;

$c = $db->collection;

// echo $email;

$cursor = $c->find();


 foreach ($cursor as $document) {
    if($email == $document["email"])
    {

      echo '
      <tr><th>'. $document["Name"] .'</td><td>'.$document["email"].'</td><td>'.$document["Age"].'</td><td>'.$document["DOB"].'</td> <td>'.$document["Phone_number"].'</td></tr>
   ';

         // echo $document["_id"];
         // echo $document["Name"] ;
         //  <tr>$document["email"] . "  " ,
         //  $document["Age"] . "  ",
         //  $document["DOB"] . "  ",
         //  $document["Phone_number"]." ";
    }

 }
 ?>



 