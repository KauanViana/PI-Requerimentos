<?php
  include "CONEXAO/conexao_BD.inc";

  extract($_POST);

    if($conexao){
        

        $sql = "INSERT INTO `doscente`(`SIAP`, `Nome`, `E-mail`, `Curso`, `Usuario`, `Senha`) VALUES ('$SIAP','$nome','$email','$cursos','$usuario','$senha')";
        $res=mysqli_query($conexao, $sql);

        echo "Cadastro relalizado com sucesso";
        echo "<a href = '../LOGIN/index.html'> fazer login </a>";

        
    }else{

        die("Erro na conexão: " . mysqli_connect_error());

    }
    


    mysqli_close($conexao);

?>