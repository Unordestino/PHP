### Fazer envio de e-mails

```

<?php

/*
Enviar e-mails com php
senha: 
email: contato@davisilveira.com.br
host: smtp.davisilveira.com.br
porta: 587 ou 20           
Comando para baixar o pack: composer require phpmailer/phpmailer
*/

use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';


$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2; // Visualiza o log de envio
$mail->Host = 'mail.davisilveira.com.br';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'contato@davisilveira.com.br';
$mail->Password = 'Sua-Senha!';

$mail->SMTPSecure = false;
$mail->isHTML(true);
$mail->CharSet = 'UTF-8';

$mail->setFrom('AnizioVitar@davisilveira.com.br', "Andrógeno Santiago");
$mail->addAddress('danielhostweb@gmail.com');
$mail->Subject = 'E-mail de teste';
$mail->Body = '<h1>Eu sei oque você fez no verão passado</h1>';

    
    if($mail->send()){
        echo "E-mail enviado com sucesso!";
    }else{
        echo "Falha ao enviar e-mail";
    }


?>

```
