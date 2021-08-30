<?php
include('inc/db.php');
$sql = "INSERT INTO users (name, email, password)
VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['password']."')";

if ($conn->query($sql) === TRUE) {
    header("location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();