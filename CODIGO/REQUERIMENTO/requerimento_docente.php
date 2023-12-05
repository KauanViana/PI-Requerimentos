<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Princial</title>
</head>
<body>
    Requerimentos Disponíveis <br></br>
    <?php
        include "CONEXAO/conexao_BD.inc";

        extract($_POST);

            if($conexao){
                

                $sql = "SELECT `data_incial`, `data_final`, `nomes_docentes`, `emails_docentes`, `anexo`, `motivo`, `status` FROM `requerimento` WHERE 1";
                $res=mysqli_query($conexao, $sql);
                $linha = mysqli_fetch_assoc($res);

                echo "<table border='1'>";
                echo "<tr><th>Data Inicial</th><th>Data Final</th><th>Nome Docente</th><th>E-mail Docente</th><th>Anexo</th><th>Motivo</th><th>STATUS</th>";
                
                while ($linha = $res->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . "Data Inicial:".$linha['data_incial'] . "</td>";
                    echo "<td>" . "Data Final: ".$linha['data_final'] . "</td>";
                    echo "<td>" . "Nome Docente: ".$linha['nomes_docentes'] . "</td>";
                    echo "<td>" . "E-mail Docente: ".$linha['emails_docentes'] . "</td>";
                    echo "<td>" . "Anexo: ".$linha['anexo'] . "</td>";
                    echo "<td>" . "Motivo: ".$linha['motivo'] . "</td>";
                    echo "<td>" . "STATUS: ".$linha['status'] . "</td>";
                    echo "</tr>";
                }
               

                
            }else{

                die("Erro na conexão: " . mysqli_connect_error());

            }
            


            mysqli_close($conexao);

        ?>
</body>
</html>