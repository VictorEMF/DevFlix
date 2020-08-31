<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/cad_reg.css">
    <title>DevFlix</title>
</head>
<body>
    <?php
    if(isset($_SESSION['nao_autenticado'])):
    ?>
    <div class='erro'>
        <p class='msg_erro'>Usuário ou senha invalidos</p>
    </div>
    <?php
    endif;
    unset($_SESSION['nao_autenticado']);
    ?>
    <div class='log_res'>
        <h2 class='reg'>LOGIN</h2>
        <form action="login.php" method="post">
        Email: <input type="text" name="email"> <br>
        Senha: <input type="password" name="senha"> <br>
        <p>Não possui conta ? <a href="cadastro.php">REGISTRE-SE</a></p>
        <button type="submit">ENTRAR</button>
        </form>
    </div>
</body>
</html>