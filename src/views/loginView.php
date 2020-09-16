<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/css/icofont.min.css"/>
	<link rel="stylesheet" href="assets/css/comum.css"/>
	<link rel="stylesheet" href="assets/css/login.css"/>
	<title>In 'n Out</title>
</head>
<body>
	<form class="form-login" action="#" method="post">
		<div class="login-card card">
			<div class="card-header">
				<i class="icofont-travelling mr-1">
					<span class="font-weight-light">In</span>
					<span class="font-weight-bold mx-1">N'</span>
					<span class="font-weight-light">Out</span>
				</i>
				<i class="icofont-runner-alt-1 ml-1"></i>
			</div><!--card-header-->
			<div class="card-body">
			<?php include(TEMPLATE_PATH . '/messages.php'); ?>
				<div class="form-group">
					<label for="email">E-mail</label>
					<input type="email" 
							id="email"
							name="email"
							class="form-control <?= isset($errors['email']) ? 'is-invalid' : ''; ?>"
							placeholder="Informe o e-mail"
							value="<?= $email ?? ''; ?>"
							autofocus/>
					<div class="invalid-feedback">
						<?= $errors['email'] ?? ''; ?>
					</div>
				</div><!--form-group-->
				<div class="form-group">
					<label for="password">Senha</label>
					<input type="password" 
							id="password"
							name="password"
							class="form-control <?= isset($errors['password']) ? 'is-invalid' : ''; ?>"
							placeholder="Informe a senha"/>
					<div class="invalid-feedback">
						<?= $errors['password'] ?? ''; ?>
					</div>
				</div><!--form-group-->
			</div><!--card-body-->
			<div class="card-footer text-right">
					<button class="btn btn-lg btn-primary">Entrar</button>
				</div><!--card footer-->
		</div><!--login-card card-->
	</form>
</body>
</html>