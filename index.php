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
					<h4>ACESSO RESTRITO</h4>
					<form action="autenticar.php" method="POST">
						<div class="form-group">
							<input type="text" name="usuario" placeholder="Usuário" class="form-control">
						</div>
						<div class="form-group">
							<input type="password" name="senha" placeholder="Senha" class="form-control">
						</div>
						<div class="row">
							<div class="form-group">
								<button type="submit" class="btn btn-success">Acessar</button>
							</div>
							<div class="form-group ml-auto">
								<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#recuperarSenha">Recuperar Senha</button>
						</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="recuperarSenha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Recuperar Senha</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="recuperarSenha.php" method="POST">
				<div class="modal-body">
					<div class="form-group">
						<input type="text" name="email" placeholder="Email" class="form-control" required>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					<button type="submit" class="btn btn-primary">Enviar</button>
				</div>
			</form>
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