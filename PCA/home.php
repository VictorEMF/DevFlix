<?php
session_start();
include('verifica_login.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/estilo.css">
    <title>DevFlix</title>
</head>
<body>
    <header class="cabecalho">
        <h1>DevFlix</h1>
        <h2>DE PROGRAMADOR PARA PROGRAMADOR</h2>
        <h3>Bem Vindo <?php echo $_SESSION['usuario'] ?></h3>

    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo roxo">
                    <h3>Linguagens de Programação</h3>
                    <ul>
                        <li><a href="conteudo.php?dir=linguagens&file=java">Java</a></li>
                        <li><a href="conteudo.php?dir=linguagens&file=python">Python</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Hardware</h3>
                    <ul>
                        <li><a href="conteudo.php?dir=hardware&file=custo_beni">Custo / Benefício</a></li>
                        <li><a href="conteudo.php?dir=hardware&file=manutençao">Manutenção</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        HUMOR E PIADAS © <?= date('Y'); ?>
    </footer>

</body>
</html>



