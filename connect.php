<?php
session_start();
$conn = new mysqli ('localhost', 'root','', 'plistgen');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else{
    $stmt = $conn->prepare("insert into registration (name, password, email) values (?, ?, ?)");
    $stmt->bind_param("sss");
    $stmt->execute();
    echo "registration successfully";
    $stmt->close();
    $stmt->close();
}