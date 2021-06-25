<?php
echo "Здравствуйте, ".htmlspecialchars($_GET['name'])."</br>";

echo "Вы ".$_GET['date']." лет";
 
$servername = "127.0.0.1:3306";
$username = "root";
$password = "root";
$dbname = "horoscope";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO USER (NAME,DATE,CITY,PHONE,EMAIL)
VALUES ('".$_GET['name']."' , '".$_GET['date']."', '".$_GET['city']."' , '".$_GET['phone']. "', '".$_GET['mail']."');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

