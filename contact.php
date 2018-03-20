<?php


 if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['message'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

// Passando os dados obtidos pelo formuláo para as variáis abaixo
$quebra_linha = "\n";
$emailsender= 'contato@monolitossolutions.com.br';
$nomeremetente     = $name;
$emailremetente    =  $email;
$emaildestinatario = "rogerio.carvalho.silva15@gmail.com";
$comcopia          = "";
$comcopiaoculta    = "";
$assunto           = $name;
$mensagem          =  $message;


/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = 'Rementente: '.$email.'
<p>'.$mensagem.'</p>
<hr>';


/* Montando o cabeçho da mensagem */
$headers = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
// Perceba que a linha acima conté"text/html", sem essa linha, a mensagem nãchegaráormatada.
$headers .= "From: ".$emailsender.$quebra_linha;
$headers .= "Return-Path: " . $emailsender . $quebra_linha;
$headers .= "Cc: ".$comcopia.$quebra_linha;
$headers .= "Bcc: ".$comcopiaoculta.$quebra_linha;
$headers .= "Reply-To: ".$emailremetente.$quebra_linha;
// Note que o e-mail do remetente serásado no campo Reply-To (Responder Para)

/* Enviando a mensagem */
mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r". $emailsender);
header('Location: index.html');
exit;
/* Mostrando na tela as informaçs enviadas por e-mail *
print "Mensagem enviada com sucesso!"*/
?>


