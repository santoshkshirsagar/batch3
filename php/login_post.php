<?php
session_start();
include('inc/db.php');

$sql = "SELECT * from users WHERE email='".$_POST['email']."' LIMIT 1";

$result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              
            if (password_verify($_POST['password'], $row['password'])) {
                $_SESSION['userId']=$row['id'];
                $_SESSION['userName']=$row['name'];
                header("location:index.php");
            }else {
                echo "Invalid Email/Password";
            }
          }
        }else{
            echo "Invalid Email/Password";
        }

$conn->close();