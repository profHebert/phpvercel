<?php
header('Content-Type: text/html; charset=utf-8');

$nota = 8.5;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 2 - PHP</title>
</head>
<body>
    <h2>Aula 2: Estrutura Condicional</h2>
    <p>Nota do aluno: <?php echo $nota; ?></p>
    <p>
        Resultado: 
        <?php if ($nota >= 7): ?>
            <strong style="color: green;">Aprovado</strong>
        <?php else: ?>
            <strong style="color: red;">Reprovado</strong>
        <?php endif; ?>
    </p>
</body>
</html>