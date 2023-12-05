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

  include "CONEXAO/conexao_BD.inc";

  extract($_POST);

    if($conexao){
        
        if($curso == "Informatica"){
            $idcurso = 4;
            $idturma = 4;
        }elseif($curso == "Edificações"){
            $idcurso = 2;
            $idturma = 2;
        }elseif($curso == "Meio Ambiente"){
            $idcurso = 3;
            $idturma = 3;
        }
    
        $sql = "INSERT INTO `discente`(`id_matricula`, `nome_aluno`, `endereço`, `celular`, `email`, `senha`, `id_curso`, `id_turma`) VALUES ('$matricula','$nome','gusmao','$telefone','$email','$senha','$idcurso','$idturma')";
        $res=mysqli_query($conexao, $sql);

        echo "Cadastro relalizado com sucesso";
        echo "<a href = '../LOGIN/index.html'> fazer login </a>";

        
    }else{

        die("Erro na conexão: " . mysqli_connect_error());

    }
    


    mysqli_close($conexao);


    setcookie("possui_login", "true", time()+60*60*24);
  





echo "Dados recebidos com sucesso!";
?>
