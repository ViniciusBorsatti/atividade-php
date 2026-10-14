<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tabuada</title>
</head>
<body>
    <main>
        <h1>Tabuada</h1>
        <p class="descricao">Informe um número para ver a tabuada de 1 a 10.</p>

        <form method="POST" action="tabuada.php">
            <label for="numero">Número</label>
            <input type="number" id="numero" name="numero" placeholder="Ex.: 7">
            <button type="submit">Gerar tabuada</button>
        </form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $numero = $_POST["numero"];

    if ($numero === "" || !is_numeric($numero)) {
        echo '<p class="erro">Informe um número válido.</p>';
    } else {
        $numero = (int) $numero;

        echo '<section class="resultado">';
        echo '<h2>Tabuada do ' . $numero . '</h2>';
        echo '<ul>';

        foreach (range(1, 10) as $i) {
            $resultado = $numero * $i;
            echo '<li>' . $numero . ' x ' . $i . ' = ' . $resultado . '</li>';
        }

        echo '</ul>';
        echo '</section>';
    }
}
?>

        <a class="voltar" href="index.html">Voltar</a>
    </main>
</body>
</html>
