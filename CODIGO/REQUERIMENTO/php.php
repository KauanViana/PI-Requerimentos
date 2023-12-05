<?php

    
include "CONEXAO/conexao_BD.inc";

extract($_POST);

  if($conexao){

      $sql = "INSERT INTO `requerimento`(`id_requerimento`,`data_incial`, `data_final`, `nomes_docentes`, `emails_docentes`, `anexo`, `motivo`, `status`,`id_discente`, `id_cores`) VALUES (2,'$data_inicial','$data_final','$nome_docente','$email_docente','.txt','$motivo',1,1111111111,0)";
      $res=mysqli_query($conexao, $sql);

      echo "Cadastro relalizado com sucesso";
      echo "<a href = '../LOGIN/index.html'> fazer login </a>";

      
  }else{

      die("Erro na conexão: " . mysqli_connect_error());

  }
  


  mysqli_close($conexao);



    extract($_POST);
    echo $nome_docente;
    echo $email_docente;
    echo $data_inicial;
    echo $data_final;
    echo $motivo;
    echo $observacoes
    
?>