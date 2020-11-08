<?php


if(isset($_POST["enviarmsg"])) {        
    #Biblioteca para mandar via GMail
    require_once('PHPMailer/PHPMailerAutoload.php');
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];        
    $assunto = $_POST["assunto"];        
    $mensagem = $_POST["mensagem"];        

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = '465';
    $mail->isHTML();
    $mail->Username = 'clinicamedceu@gmail.com';
    $senha = $_SERVER['SECRET_KEY'];
    $mail->Password = $senha;
    $mail->setFrom('nao-responder@medceu.com.br');
    $mail->Subject = $assunto;
    $mail->Body = $mensagem;
    $mail->addAddress($email);

    $mail->send();    

    header("location: index.php?sucesso=msgenviadacomsucesso");
    
} else {
    header("location: index.php");
}