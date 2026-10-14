<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Média do aluno</title>
</head>
<body>
    <main>
        <h1>Média do aluno</h1>
        <p class="descricao">Informe as duas notas para calcular a média e a situação.</p>

        <form method="POST" action="media.php">
            <label for="nota1">Nota 1</label>
            <input type="number" id="nota1" name="nota1" step="0.1" min="0" max="10" placeholder="0 a 10">

            <label for="nota2">Nota 2</label>
            <input type="number" id="nota2" name="nota2" step="0.1" min="0" max="10" placeholder="0 a 10">

            <button type="submit">Calcular média</button>
        </form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];

    if ($nota1 === "" || $nota2 === "" || !is_numeric($nota1) || !is_numeric($nota2)) {
        echo '<p class="erro">Informe as duas notas com valores numéricos.</p>';
    } else {
        $nota1 = (float) $nota1;
        $nota2 = (float) $nota2;

        if ($nota1 < 0 || $nota1 > 10 || $nota2 < 0 || $nota2 > 10) {
            echo '<p class="erro">As notas devem estar entre 0 e 10.</p>';
        } else {
            $media = ($nota1 + $nota2) / 2;

            if ($media >= 7) {
                $situacao = "Aprovado";
            } elseif ($media >= 4) {
                $situacao = "Recuperação";
            } else {
                $situacao = "Reprovado";
            }

            echo '<section class="resultado">';
            echo '<h2>Resultado</h2>';
            echo '<p>Nota 1: ' . number_format($nota1, 1, ",", "") . '</p>';
            echo '<p>Nota 2: ' . number_format($nota2, 1, ",", "") . '</p>';
            echo '<p>Média: ' . number_format($media, 2, ",", "") . '</p>';
            echo '<p class="destaque">Situação: ' . $situacao . '</p>';
            echo '</section>';
        }
    }
}
?>

        <a class="voltar" href="index.html">Voltar</a>
    </main>
</body>
</html>
