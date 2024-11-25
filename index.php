<?php
$selectedCars = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['cars'])) {
        $selectedCars = $_POST['cars'];
    }
}

$cars = array("Audi", "BMW", "Renault", "Citroen");
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izbor vozila</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Odaberite vozilo</h1>
        <form method="post">
            <ul>
                <?php
                foreach ($cars as $car) {
                    echo "<li><input type='radio' name='cars[]' value='$car' " . (in_array($car, $selectedCars) ? "checked" : "") . "> $car</li>";
                }
                ?>
            </ul>
            <button type="submit">Pošaljite izbor</button>
        </form>

        <?php
        if (!empty($selectedCars)) {
            echo "<h2>Odabrana vozila:</h2><ul>";
            foreach ($selectedCars as $car) {
                echo "<li>$car</li>";
            }
            echo "</ul>";
        }
        ?>
    </div>
</body>
</html>
