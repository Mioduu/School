<?php
echo "Dodano informację do bazy";
$data = $_POST['data'];
$osoby = $_POST['osoby'];
$telefon = $_POST['telefon'];
$przetwarzanie_danych_osobowych = $_POST['dane_osobowe'];

$baza = 'localhost';
$user = 'root';
$haslo = '';
$db = 'baza';

$conn = mysqli_connect($baza, $user, $haslo, $db);

if(!$conn) {
    echo 'Nie udało się połączyć: ' . mysqli_connect_error();
}

$query = "INSERT INTO rezerwacje(data_rez, liczba_osob, telefon) VALUES('$data', $osoby, '$telefon')";
mysqli_query($conn, $query)
?>