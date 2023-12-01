<?php
  include "CONEXAO/conexao_BD.inc";

  extract($_POST);

    if($conexao){
        

        $sql = "INSERT INTO `discente`(`Nome`, `E-mail(INST)`, `Curso`, `Turma`, `Telefone`, `Senha`, `matricula`) VALUES ('$nome','$email','$cursos','$turma','$tell','$senha','$matricula')";
        $res=mysqli_query($conexao, $sql);

        echo "Cadastro relalizado com sucesso";
        echo "<a href = '../LOGIN/index.html'> fazer login </a>";

        
    }else{

        die("Erro na conexão: " . mysqli_connect_error());

    }
    


    mysqli_close($conexao);


    setcookie("possui_login", "true", time()+60*60*24);
?>