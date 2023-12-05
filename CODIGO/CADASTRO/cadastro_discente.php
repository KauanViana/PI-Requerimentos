<?php
  include "CONEXAO/conexao_BD.inc";

  extract($_POST);

    if($conexao){
        
        if($curso_usuario == "Informatica"){
            $idcurso = 4;
            $idturma = 4;
        }elseif($curso_usuario == "Edificações"){
            $idcurso = 2;
            $idturma = 2;
        }elseif($curso_usuario == "Meio Ambiente"){
            $idcurso = 3;
            $idturma = 3;
        }
    
        $sql = "INSERT INTO `discente`(`id_matricula`, `nome_aluno`, `endereço`, `celular`, `email`, `senha`, `id_curso`, `id_turma`) VALUES ('$matricula','$nome','$endereco','$tell','$email','$senha','$idcurso','$idturma')";
        $res=mysqli_query($conexao, $sql);

        echo "Cadastro relalizado com sucesso";
        echo "<a href = '../LOGIN/index.html'> fazer login </a>";

        
    }else{

        die("Erro na conexão: " . mysqli_connect_error());

    }
    


    mysqli_close($conexao);


    setcookie("possui_login", "true", time()+60*60*24);
  
?>