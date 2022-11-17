<?php

require_once __DIR__ . '\composer\vendor\autoload.php';

$con = new MongoDB\Client("mongodb://localhost:27017");

$db = $con->guvi;

$c = $db->collection;

$cursor = $c->find();


 foreach ($cursor as $document) {
     echo '<tr>$document["_id"] . "  "</tr>
          ';
 }
 ?>

<!-- <?php while($data = $cursor->fetch_assoc()) : ?>
    <tr>
        <td> <?php echo $data['Name']; ?> </td>
        <td> <?php echo $data['email']; ?> </td>
        <td> <?php echo $data['Age']; ?> </td>
        <td> <?php echo $data['DOB']; ?> </td>
        <td> <?php echo $data['Name']; ?> </td>

    </tr>
<?php endwhile; ?> -->
