<?php
//Potencjalny XSS
$name = $_POST['name'];
$email = $_POST['email']; 
$height = $_POST['height'];

echo "<b>Welcome</b> <br> Username: $name <br> Email: $email <br> Height: $height <br>";

$servername = "localhost";
$username = "root";
$password = "";
$db = "goetelMP";

$conn = mysqli_connect($servername, $username, $password, $db);

//Sprawdzanie połączenia
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

//Wrzucenie danych
$sql = "INSERT INTO MyGuests (firstname, email)
    VALUES ('$name', '$email')";

echo $sql;

//Utworzenie rekordu z query
if(mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>