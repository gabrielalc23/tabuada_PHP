<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tabuada Avançada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de Tabuada Avançada</h1>
        <form action="index.php" method="post">
            <label for="numero">Número:</label>
            <input type="number" id="numero" name="numero" min="1" required>
            <label for="limite">Limite:</label>
            <input type="number" id="limite" name="limite" min="1" required>
            <button type="submit">Calcular</button>
        </form>
        <?php
        if (isset($_POST['numero']) && isset($_POST['limite'])) {
            $numero = $_POST['numero'];
            $limite = $_POST['limite'];
            echo "<h2>Tabuada do $numero até $limite</h2>";
            echo "<table>";
            echo "<tr><th>X</th><th>Resultado</th></tr>";
            for ($i = 1; $i <= $limite; $i++) {
                echo "<tr><td>$numero x $i</td><td>" . ($numero * $i) . "</td></tr>";
            }
            echo "</table>";
        }
        ?>
    </div>
</body>
</html>