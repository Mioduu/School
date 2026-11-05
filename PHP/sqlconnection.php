<?php
// Dane do logowania
$servername = "localhost";
$username = "root";
$password = "";
// Łączenie do serwera z podanymi danymi
$conn = mysqli_connect($servername, $username, $password);
//Sprawdzanie połączenia
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$database = "goetelMP";
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if(mysqli_query($conn,$sql)){
  echo "Database created successfully <br>";
} else {
  echo "Error creating database:" . mysqli_error($conn);
}

if(mysqli_select_db($conn, $database)) {
  echo "Database $database selected <br>";
} else {
  echo "Error select database: " . mysqli_error($conn);
}

$sql = "CREATE TABLE IF NOT EXISTS MyGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50) UNIQUE,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
    
if(mysqli_query($conn, $sql)) {
  echo "Table MyGuests created successfully <br>";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

$data = "INSERT IGNORE INTO MyGuests (firstname, lastname, email) 
        VALUES ('John', 'Doe', 'john@example.com'),
        ('Maria', 'Fletcher', 'maria@example.com'),
        ('Emily', 'Johnson', 'emily@example.com'),
        ('David', 'Jones', 'david@example.com'),
        ('Robert', 'Taylor', 'robert@example.com')";
    
if (mysqli_query($conn, $data)) {
  echo "New record created succesfully";
} else {
  echo "Error: " . $data . "<br>" . mysqli_error($conn);
}

$query = "SELECT * FROM MyGuests";
$query_result = mysqli_query($conn, $query);

if(mysqli_num_rows($query_result) > 0) {
  while($row = mysqli_fetch_assoc($query_result)) {
    echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
  }
} else {
  echo "0 results";
}
?>

