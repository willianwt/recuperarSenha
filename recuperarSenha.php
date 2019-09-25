<?php
require_once("config.php");
require_once("funcoes.php");

$email = $_POST['email'];

$sql = "SELECT email FROM usuarios
        WHERE email='".$email."'";

$res = $conn->query($sql) or die($conn->error);

$row = $res->fetch_assoc();

if($res->num_rows > 0){
        $chave = generateRandomString();
        $query = mysqli_query($conn, "INSERT INTO recuperasenha (email, chave, valido) VALUES ('$email', '$chave', '1')");

        if ($query) {
                $enviar_email = enviar_email($email, $chave);
                if ($enviar_email) {
                        echo '<script type="application/javascript">alert("Verifique seu email! :)"); window.location.href ="index.php";</script>';
                    
                } else {
                    echo '<script type="application/javascript">alert("Não foi possível enviar o email. Tente novamente."); window.location.href ="index.php";</script>';
                   
                }
        } else {
                 echo '<script type="application/javascript">alert("Algo deu errado. Tente novamente."); window.location.href ="index.php";</script>';
                
        }

}else{
        echo '<script type="application/javascript">alert("Email não cadastrado.."); window.location.href ="index.php";</script>';

}