<?php
$name = $_POST['name'];
$password = sha1($_POST['haslo']); 

$servername = "localhost";
$username = "root";
$password = "";
$db = "goetelhashed";

$conn = mysqli_connect($servername, $username, $password);

$sql = "CREATE DATABASE IF NOT EXISTS $db";
if(mysqli_query($conn,$sql)){
  echo "Database created successfully <br>";
} else {
  echo "Error creating database:" . mysqli_error($conn);
}

if(mysqli_select_db($conn, $db)) {
  echo "Database $database selected <br>";
} else {
  echo "Error select database: " . mysqli_error($conn);
}

$sql = "CREATE TABLE IF NOT EXISTS SecretGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            password VARCHAR(30) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if(mysqli_query($conn, $sql)) {
  echo "Table SecretGuests created successfully <br>";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}


$sql = "INSERT INTO SecretGuests (login, password)
    VALUES ('$name', '$password')";

echo $sql;

//Utworzenie rekordu z query
if(mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>