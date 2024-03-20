<?php
//Zde uveďte správná data pro login do databáze
$servername = "host";
$username = "uzivatel";
$password = "heslo";
$database = "databaze";

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
    $check_query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($check_query);
    if ($result->num_rows == 1) {
        echo "Přihlášení úspěšné.";
    } else {
        echo "Chybné přihlašovací údaje.";
    }
}

// Ukončení připojení k databázi
$conn->close();
?>
