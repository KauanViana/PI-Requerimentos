<?php
   include "CONEXAO/conexao_BD.inc";

  extract($_POST);

  $usuario = $_GET["usuario"];
  $senha = $_GET["senha"];


  if($conexao){
    

      $sql = "SELECT * FROM doscente WHERE SIAP='$usuario' AND Senha='$senha' ";
      $res=mysqli_query($conexao, $sql);
      $linha=mysqli_affected_rows($conexao);

      if($linha > 0){
          $num = rand(100000,900000);
          setcookie("Login",$num);
          header("Location:../REQUERIMENTO/requerimento_discente.html?num=$num");

      }else{
          echo "ERRO NO LOGIN, USUARIO OU SENHA incorretos";
          echo "<a href = 'index.html'> voltar </a>";
      }

    
 }else{
    die("Erro na conexão: " . mysqli_connect_error());
 }

  mysqli_close($conexao);

?>