<?php

define('HOST','localhost');
define('USUARIO','root');
define('SENHA','root');
define('DB','devflix');


$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar')



?>