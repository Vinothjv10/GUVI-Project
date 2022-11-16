<?php

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

?>