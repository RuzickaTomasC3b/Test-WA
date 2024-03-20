<?php
    session_start();

    // Kontrola přihlášení
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }
?>
<!-- HTML stránka pro zobrazení zvířat které chceme -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seznam zvířat, které chceme</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Lehký style pro kartičky -->
    <style>
        .zvire-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .zvire-card {
            width: 30%;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Seznam zvířat, které chceme</h1>
        <div class="zvire-grid">
        <!-- Vytvoření listu zvířat -->>
            $animals = array(
                array("name" => "Pes", "description" => "Domácí mazlíček", "image" => "pes.jpg"),
                array("name" => "Kočka", "description" => "Domácí mazlíček", "image" => "kocka.jpg"),
                array("name" => "Kůň", "description" => "Domácí mazlíček", "image" => "kun.jpg")
            );

            <!-- Vytvoření karet pro každé zvíře -->
            <!-- echo použije kód v uvozovkách -->
            foreach ($animals as $animal) {
                echo '<div class="card" style="width: 18rem;">';
                echo '<img src="' . $animal["image"] . '" class="card-img-top" alt="' . $animal["name"] . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $animal["name"] . '</h5>';
                echo '<p class="card-text">' . $animal["description"] . '</p>';
                echo '</div>';
                echo '</div>';
            }
        </div>
    </div>
</body>
</html>