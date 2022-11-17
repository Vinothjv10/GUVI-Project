<?php

<<<<<<< HEAD
$name = $_POST['name'];
$email  = $_POST['email'];
$upswd1 = $_POST['upswd1'];
$upswd2 = $_POST['upswd2'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$phno = $_POST['phno'];


require_once __DIR__ . '\composer\vendor\autoload.php';

$con = new MongoDB\Client("mongodb://localhost:27017");

$db = $con->guvi;

$c = $db->collection;



if (!empty($name) || !empty($email) || !empty($upswd1) || !empty($upswd2) )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "guvi";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else if($upswd1 != $upswd2)
{
  echo "Password and Confirm-password are dismatched..!";
}
else if($upswd1 == $upswd2){

  $SELECT = "SELECT email From register Where email = ? Limit 1";
  $INSERT = "INSERT Into register (name , email ,upswd1, upswd2 )values(?,?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss", $name,$email,$upswd1,$upswd2);
      $stmt->execute();

      $c->insertOne(["Name" => $name,
                     "email" => $email,
                     "password" => $upswd1,
                     "Age" => $age, 
                     "DOB" => $dob, 
                     "Phone_number" => $phno]
                  );

      echo "New record inserted sucessfully";

      

     }
    else 
    {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close(); 
    }
}
else 
{
 echo "All field are required";
 die();
}
=======
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost','root','','testing');

    if($conn->connect_error)
    {
        die('Connection Failed  : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into registration(name, email, password)
        value(?, ?, ?)");
        $stmt->bind_param("sss",$name, $email,$password);
        $stmt->execute();
        echo "Registration Successfully...";
        $stmt->close();
        $conn->close();
    }
>>>>>>> 159e12bbf9c6783327dc4f401f0e08e48b4f1e5a

?>