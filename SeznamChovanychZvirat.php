<?php
    session_start();

    // Kontrola přihlášení
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }
?>
<!-- HTML str8nka pro zobrazen9 chovan7ch zv95at -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seznam chovaných zvířat</title>
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
        <h1>Seznam chovaných zvířat</h1>
        <div class="zvire-grid">
            <!-- Vytvoření listu zvířat -->><!-- Vytvoření listu zvířat -->>
            <?php
                //na49t8n9 dat a vytvo5en9 karti4ek
            ?>
        </div>
    </div>
</body>
</html>
