<?php 
$host = 'localhost';
$user = 'root';
$senha = '';
$bdnome = 'todo_appdb';

// Separando variaveis da conexao.

// Criando a nova conexao com o BD
$conexao = new mysqli($host, $user, $senha, $bdnome);

// Verificando se a conexao foi feita, e se não foi mostra o erro.
if ($conexao->connect_error){
    die("Conexão com o BD falhou: " . $conexao->connect_error);
}
?>