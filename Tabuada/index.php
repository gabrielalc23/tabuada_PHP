<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="index.css">
</head>
<body>
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
</body>
</html>