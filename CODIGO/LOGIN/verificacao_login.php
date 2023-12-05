<?php

    extract($_POST);

    $queryString = http_build_query(array('usuario' => $usuario, 'senha' => $senha));

    if(strlen($usuario) == 7){
        header("Location: login_docente.php?$queryString");

    }else if(strlen($usuario) == 10){
        header("Location: login_dicente.php?$queryString");

    }else if(strlen($usuario) == 9){
        header("Location: login_cores.php?$queryString");
        
    }else{
        echo "ERRO NO LOGIN, USUARIO OU SENHA incorretos";
        echo "<a href = 'index.html'> voltar </a>";
    }


?>