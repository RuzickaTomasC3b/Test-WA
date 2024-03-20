<?php
//Zde uveďte správná data pro login do databáze
$servername = "localhost";
$username = "uzivatel";
$password = "heslo";
$database = "moje_databaze";

$conn = new mysqli($servername, $username, $password, $database);

// Kontrola, zda je navázáno připojení
if ($conn->connect_error) {
    die("Připojení k databázi selhalo: " . $conn->connect_error);
}

// Zpracování odeslaných údajů
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Tohle provede kontrolu přihlašovacích údajů
    $check_query = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($check_query);
    if ($result->num_rows > 0) {
        echo "Uživatelské jméno již existuje.";
    } else {
        // Vložení nového uživatele do databáze
        $insert_query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if ($conn->query($insert_query) === TRUE) {
            echo "Registrace proběhla úspěšně.";
        } else {
            echo "Chyba při registraci: " . $conn->error;
        }
    }
}

// Ukončení připojení k databázi
$conn->close();
?>