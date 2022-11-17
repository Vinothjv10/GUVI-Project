<?php

$email = $_POST['email'];
<<<<<<< HEAD
$password = $_POST['upswd1'];

$con = new mysqli("localhost","root","","guvi");
=======
$password = $_POST['password'];

$con = new mysqli("localhost","root","","testing");
>>>>>>> 159e12bbf9c6783327dc4f401f0e08e48b4f1e5a

if($con->connect_error)
{
    die("Failed to connect : ".$con->connect_error);
}
else{
<<<<<<< HEAD
    $stmt = $con->prepare("select * from register where email = ?");
=======
    $stmt = $con->prepare("select * from registration where email = ?");
>>>>>>> 159e12bbf9c6783327dc4f401f0e08e48b4f1e5a
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if($stmt_result->num_rows >0)
    {
        $data = $stmt_result->fetch_assoc();
<<<<<<< HEAD
        if($data['upswd1'] === $password)
        {
            echo "<script>alert('Logged');</script>";
            
            header('location: http://'. $_SERVER['HTTP_HOST'].'/GUVI/profile.html');
=======
        if($data['password'] === $password)
        {
            echo "<h2> Login Successfully </h2>";
>>>>>>> 159e12bbf9c6783327dc4f401f0e08e48b4f1e5a
        }
        else{
            echo "<h2> Invaild Email or password </h2>";
        }
    }
    else{
        echo "<h2> Invaild Email or password</h2>";
    }
}

<<<<<<< HEAD
?>
=======
?>
>>>>>>> 159e12bbf9c6783327dc4f401f0e08e48b4f1e5a
