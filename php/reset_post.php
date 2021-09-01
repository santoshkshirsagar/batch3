<?php
session_start();
include('inc/db.php');

$password=password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "UPDATE users set password='".$password."' where id=".$_POST['user_id']." LIMIT 1";
            if ($conn->query($sql) === TRUE) {
                header("location:login.php");
            }

$conn->close();