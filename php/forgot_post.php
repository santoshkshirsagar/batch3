<?php
session_start();
include('inc/db.php');

$sql = "SELECT * from users WHERE email='".$_POST['email']."' LIMIT 1";

$result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $code = rand(1000,9999);
            $sql = "UPDATE users set forgot_code=".$code." where id=".$row['id']." LIMIT 1";
            if ($conn->query($sql) === TRUE) {
                echo $link = "localhost/batch3/php/reset.php?code=".$code;
            }
          }
        }
echo "If email exist you will receive link to reset";
$conn->close();