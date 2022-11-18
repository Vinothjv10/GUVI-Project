<?php
session_start();

$email = $_POST['email'];
$password = $_POST['upswd1'];

$con = new mysqli("localhost","root","","guvi_db");

$_SESSION['email'] = $email;

if($con->connect_error)
{
    die("Failed to connect : ".$con->connect_error);
}
else{

    $stmt = $con->prepare("select * from register where email = ?");

    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if($stmt_result->num_rows >0)
    {
        $data = $stmt_result->fetch_assoc();

        // checking passwords are correct or not correct
        if($data['upswd1'] === $password)
        {
            // echo "<script>alert('Logged');</script>";
            header("Location: http://localhost/GUVI-Project/profile.html");
            // header('location: http://'. $_SERVER['HTTP_HOST'].'/GUVI/profile.html');

        }
        else{
            echo "<h2> Invaild Email or password </h2>";
        }
    }
    else{
        echo "<h2> Invaild Email or password</h2>";
    }
}


?>

