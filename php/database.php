<?php
$servername = "localhost";
$username = "code";
$password = "password";
$dbname = "code";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//INSERT INTO users (name, email, password) VALUES ('name', 'email@test.com', 'testpass')
//SELECT * from users;
//UPDATE users SET name='testname' where id=2'
//DELETE from where id=2;
$sql = "UPDATE users SET name='testname' where id=2";

if ($conn->query($sql) === TRUE) {
   echo "Done";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 