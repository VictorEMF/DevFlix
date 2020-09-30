<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/estilo.css">
    <link rel="stylesheet" href="recursos/exercico.css">
    <title>DevFlix</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>DevFlix</h1>
        <h2>DE PROGRAMADOR PARA PROGRAMADOR</h2>
    </header>
    <nav class="navegacao">
        <a href="home.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php 
                // include("{$_GET['dir']}/{$_GET['file']}.php");
                include($_GET['dir']."/" .$_GET['file']. ".php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        COD3R E ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>




