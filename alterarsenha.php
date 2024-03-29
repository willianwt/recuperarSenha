<?php
require_once("config.php");
require_once("funcoes.php");

if (isset($_POST['novaSenha'])) {
    $novaSenha = md5($_REQUEST['novaSenha']);
    $confirmarNovaSenha = md5($_REQUEST['confirmarNovaSenha']);
    $email = $_REQUEST['email'];
    $chave = $_REQUEST['chave'];

    if ($novaSenha == $confirmarNovaSenha) {
        $atualiza_senha = mysqli_query($conn, "UPDATE usuarios SET senha = '$novaSenha' WHERE email = '$email'");
        if ($atualiza_senha) {
            mysqli_query($conn, "UPDATE recuperasenha SET valido = 0 WHERE email = '$email' AND chave ='$chave'");
            echo '<script type="application/javascript">alert("Senha alterada com sucesso. Faça o login."); window.location.href ="index.php";</script>';
        }else{
            echo '<script type="application/javascript">alert("Ocorreu um erro, tente novamente.."); window.location.href ="index.php";</script>';

        }
    } else {
        $msg = "As senhas não são iguais!";
        $msgclass = 'bg-danger';
    }
    
}

$email = $_REQUEST['email'];
$chave = $_REQUEST['chave'];

$verificarchave = verificar_chave($email, $chave);

if ($verificarchave != 1) {
    echo '<script type="application/javascript">alert("Link inválido. Por favor solicite novamente."); window.location.href ="index.php";</script>';
}
 



?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Sistema de Login</title>
  </head>
  <body>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 offset-lg-4">
				<div class="jumbotron" style="margin-top: 50px;">
					<h4>Alterar Senha</h4>
					<form action="alterarsenha.php" method="POST">
                        <div class="form-group">
                            <input class="form-control" type="text" name="email" placeholder="<?php echo $email; ?>" value="<?php echo $email; ?>" readonly>
                        </div>
                        

						<div class="form-group">
							<input type="text" name="novaSenha" placeholder="Nova Senha" class="form-control" required>
						</div>
						<div class="form-group">
							<input type="password" name="confirmarNovaSenha" placeholder="Confirmar Nova Senha" class="form-control" required>
						</div>
                        <div class="form-group">
                            <?php if(isset($msg)) { ?>
                                <div class="<?php echo $msgclass; ?>" style="padding:5px;"><?php echo $msg; ?></div>
                            <?php } ?>
                        </div>
                        <input type="hidden" id="chave" name="chave" value="<?php echo $chave; ?>">
						<div class="row">
							<div class="form-group">
								<button type="submit" class="btn btn-success">Alterar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>