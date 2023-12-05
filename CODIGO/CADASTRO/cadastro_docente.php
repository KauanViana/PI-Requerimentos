<?php
  include "CONEXAO/conexao_BD.inc";

  extract($_POST);

    if($conexao){
        

        $sql = "INSERT INTO `docente`(`id_siape`, `nome`, `email`, `usuario`) VALUES ('$SIAP','$nome','$email','$usuario')";
        $res=mysqli_query($conexao, $sql);

        echo "Cadastro relalizado com sucesso";
        echo "<a href = '../LOGIN/index.html'> fazer login </a>";

        
    }else{

        die("Erro na conexão: " . mysqli_connect_error());

    }
    


    mysqli_close($conexao);

?>