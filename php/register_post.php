<?php
session_start();
include('inc/db.php');

$password=password_hash($_POST['password'], PASSWORD_DEFAULT);
$sql = "INSERT INTO users (name, email, password)
VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$password."')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['userId']=$conn->insert_id;;
    $_SESSION['userName']=$_POST['name'];
    header("location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();