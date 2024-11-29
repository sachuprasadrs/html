<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="demo";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
	echo "Connected Successfully";
}
$sql = "INSERT INTO books (bid, bname, bcode, brate)
VALUES (12, 'John',1234, 20.00 )";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
