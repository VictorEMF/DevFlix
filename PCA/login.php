<?php
session_start();
require_once('conexao.php');

if(empty($_POST['email']) or empty($_POST['senha'])) {
    header('Location: index.php');
}


$email= mysqli_real_escape_string($conexao, $_POST['email']);
$senha= mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT nome FROM usuarios WHERE email = '{$email}' AND senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$dados = mysqli_fetch_array($result);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['usuario'] = $dados['nome'];
    header('Location: home.php');
}else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
}

?>