<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Requerimentos</title>
    <link rel="stylesheet" href="../../PROJETO INTEGRADOR/CSS/style.css">
</head>
<body>
    <div class="box">
        <div class="box-inner-box">
            <form class="form" action="cadastro_discente.php" method="post" id="cadastro_form">
                <div class="img-login">
                    <img src="../../ESTILO/IMAGENS/Logo_IF.png" width="40px" class="logo" draggable="false">
                    <hr>
                    <button id="opcao1" type="button">ALUNO</button>
                    <button id="opcao2" type="button">ADM</button>
                </div> 
                    <div class="texx">
                        <div class="input">
                            <label for="name">Nome:</label>
                            <input id="name" type="text" placeholder="Nome" name="nome" class="inserir" >
                        </div>

                        <div class="input">
                            <label for="course">Curso:</label>
                            <select id="curso" name="curso_usuario" class="inserir" >

                            <?php
                            
                            include "CONEXAO/conexao_BD.inc";

                            if($conexao){

                                $sql = "SELECT `curso` FROM curso ";
                                $res=mysqli_query($conexao, $sql);
                                $linha = mysqli_fetch_assoc($res);
                    
                                if($linha > 0){
                                    while ($row = $res->fetch_assoc()) {
                                        
                                        echo '<option value='.$row['curso'].'>'.$row['curso']. '</option>';
                                    
                                    }
                                
                                }else{
                                    echo "ERRO NO LOGIN, USUARIO OU SENHA incorretos";
                                    echo "<a href = 'index.html'> voltar </a>";
                                }
                        
                        }else{
                            die("Erro na conexão: " . mysqli_connect_error());
                        }
                        
                        mysqli_close($conexao);
                    ?>

                            </select>
                        </div>

                        <div class="input">
                            <label for="class">Turma:</label>
                            <select id="turma" name="turma_usuario" class="inserir" >
                            <?php


include "CONEXAO/conexao_BD.inc";

if($conexao){

    $sql = "SELECT `turma` FROM turma ";
    $res=mysqli_query($conexao, $sql);
    $linha = mysqli_fetch_assoc($res);

    if($linha > 0){
        while ($row = $res->fetch_assoc()) {
            
            echo '<option value='.$row['turma'].'>'.$row['turma']. '</option>';
         
        }
      
    }else{
        echo "ERRO NO LOGIN, USUARIO OU SENHA incorretos";
        echo "<a href = 'index.html'> voltar </a>";
    }

}else{
die("Erro na conexão: " . mysqli_connect_error());
}

mysqli_close($conexao);


?>
                            </select>
                        </div>
                    </div>
            </form>
        </div>
        <div class="box2">
            <a href="../LOGIN/">Já possuo uma conta</a>
            <button type="button" class="botao" id="prox-etapa">PRÓXIMA ETAPA</button>
        </div>
    </div>
    <script src="../JS/etapas_cadastro.js"></script>
    <script src="../JS/requisicoes_http.js"></script>
    <script src="../JS/animacoes_cadastro.js"></script>
</body>
</html>