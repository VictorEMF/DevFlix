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
if($_SESSION['status_cadastro']):
?>
<div class='cads'>
    <p class='msg_cads'>Cadastro Realizado</p>
</div>
<?php
endif;
unset($_SESSION['status_cadastro']);
?>
<?php
if($_SESSION['usuario_existe']):
?>
<div class='regis'>
    <p class='msg_regis'>O usuário ja existe!</p>
</div>
<?php
endif;
unset($_SESSION['usuario_existe']);
?>
    <div class='log_res'>    
        <h2 class="reg">REGISTRO</h2>
        <form action="cadastrar.php" method="post">
        <input type="text" name="nome" placeholder='Nome'><br>
        <input type="email" name="email" placeholder='Email'> <br>
        <input type="password" name="senha" placeholder='Senha(Até 8 Digitos)'> <br>
        <p>Criou a conta ? <a href="index.php">LOGAR</a></p>
        <button type="submit" class='btn_cad'>REGISTRAR</button>
        </form>
    </div>
</body>
</html>
