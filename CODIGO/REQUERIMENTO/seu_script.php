<?php
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
        $nomeProfessor = $_POST["nome_professor"];
        $emailProfessor = $_POST["email_professor"];
        $dataInicial = $_POST["datainicial"];
        $dataFinal = $_POST["datafinal"];
        $motivo = $_POST["motivo"];
        $observacao = $_POST["observacao"];
        
    }
    
 // Imprime os dados recebidos
    $mensagem ="Nome do Professor: " . $nomeProfessor . "<br>"."Email do Professor: " . $emailProfessor . "<br>"."Data Inicial: " . $dataInicial . "<br>". "Data Final: " . $dataFinal . "<br>"."Motivo: " . $motivo . "<br>"."Observação: " . $observacao . "<br>";

    $mail->Body    = $mensagem;

    $mail->send();
    echo 'Email enviado com sucesso';
} catch (Exception $e) {
    echo "Erro ao enviar: {$mail->ErrorInfo}";
}