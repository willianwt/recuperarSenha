<?php

function generateRandomString($length = 20) {
	// This function has taken from stackoverflow.com
    
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return md5($randomString);
}

function enviar_email($para, $chave){

    $assunto = "Recuperação de Senha";
    $link = 'http://www.williantaiguara.com/recuperasenha/alterarsenha.php?email='.$para.'&chave='.$chave;
    $mensagem = "<b>Olá,</b><br><br>Voce solicitou uma recuperação de senha.<br> <a href='$link' target='_blank'>CLIQUE AQUI</a> para resetar sua senha. Caso não consiga clicar, copie o endereço abaixo e cole no seu navegador.<br><i>". $link."</i><br><br><b>Caso não tenha solicitado, desconsidere esse email.</b>";

    $headers   = 'MIME-Version: 1.0' . "\r\n";
	$headers  .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	$headers  .= 'From: Recuperar Senha <contato@williantaiguara.com> ' . "\r\n" .
				 'X-Mailer: PHP' . phpversion();

	$mail = mail($para, $assunto, $mensagem, $headers);

	if(!$mail) {
		return 'fail';
	} else {
		return 'success';
	}
}

function verificar_chave($email, $chave)
{	
	global $conn;
	
	$query = mysqli_query($conn, "SELECT valido FROM recuperasenha WHERE email = '$email' AND chave = '$chave'");
	$row = mysqli_fetch_assoc($query);
	
	if(mysqli_num_rows($query) > 0)
	{
		if($row['valido'] == 1)
		{
			return 1;
		}else
		{
			return 0;
		}
	}else
	{
		return 0;
	}
	
}