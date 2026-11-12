<?php

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$fav_language = $_POST["fav_language"];


$servername = "localhost";
$username = "root";
$password = "";
$db = "radioforms";

$conn = mysqli_connect($servername, $username, $password, $db);

if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

if(mysqli_select_db($conn, $db)) {
  echo "Database $db selected <br>";
} else {
  echo "Error select database: " . mysqli_error($conn);
}

$sql = "CREATE TABLE IF NOT EXISTS MyGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            fav_language VARCHAR(30) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

$data = "INSERT INTO MyGuests(firstname, lastname, fav_language) 
        VALUES('$firstname', '$lastname', '$fav_language')";

if (mysqli_query($conn, $data)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>