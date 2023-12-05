<?php
$dados = json_decode($_POST['dados']);

// $nome = $dados->nome;
// $idade = $dados->idade;

$nome = $dados->nome;
$curso = $dados->curso;
$turma = $dados->turma;
$matricula = $dados->matricula;
$email =  $dados->email;
$telefone = $dados->telefone;
$senha = $dados->senha;


echo "Dados recebidos com sucesso!";
?>
