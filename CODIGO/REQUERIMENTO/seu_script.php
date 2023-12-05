<?php

include "CONEXAO/conexao_BD.inc";

extract($_POST);

  if($conexao){

      $sql = "INSERT INTO `requerimento`(`id_requerimento`,`data_incial`, `data_final`, `nomes_docentes`, `emails_docentes`, `anexo`, `motivo`, `status`,`id_discente`, `id_cores`) VALUES (6,'$data_inicial','$data_final','$nome_docente','$email_docente','.txt','$motivo',1,1111111111,0)";
      $res=mysqli_query($conexao, $sql);

      echo "Cadastro relalizado com sucesso";
      echo "<a href = '../LOGIN/index.html'> fazer login </a>";

      
  }else{

      die("Erro na conexão: " . mysqli_connect_error());

  }
  


  mysqli_close($conexao);


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'pl1997433@gmail.com';                     //SMTP username
    $mail->Password   = 'dqmw qnfs nccl yoqa';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('pl1997433@gmail.com', 'Pedro');
    $mail->addAddress('ordepiosacul@gmail.com', 'Pedro Lucas');     //Add a recipient             //Name is optional
    $mail->addReplyTo('ordepiosacul@gmail.com', 'Information');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Teste envio de EMAIL';


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomeProfessor = $_POST["nome_docente"];
        $emailProfessor = $_POST["email_docente"];
        $dataInicial = $_POST["data_inicial"];
        $dataFinal = $_POST["data_final"];
        $motivo = $_POST["motivo"];
        $observacao = $_POST["observacoes"];
        
    }
    
 // Imprime os dados recebidos
    $mensagem ="Nome do Professor: " . $nomeProfessor . "<br>"."Email do Professor: " . $emailProfessor . "<br>"."Data Inicial: " . $dataInicial . "<br>". "Data Final: " . $dataFinal . "<br>"."Motivo: " . $motivo . "<br>"."Observação: " . $observacao . "<br>";

    $mail->Body    = $mensagem;

    $mail->send();
    echo 'Email enviado com sucesso';
} catch (Exception $e) {
    echo "Erro ao enviar: {$mail->ErrorInfo}";
}