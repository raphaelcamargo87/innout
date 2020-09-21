<main class="content">

	<?php
		renderTitle(
			'Cadastro de Usuários',
			'Crie e Atualize Usuários',
			'icofont-users'
			);
		
		include(TEMPLATE_PATH . "/messages.php")
	?>

	<form action="#" method="post">
		<input type="hidden" name="id" value="<?= $id ?? ''?>">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="name">Nome</label>
				<input type="text" id="name" name="name" placeholder="Informe o nome"
					class="form-control <?= $errors['name'] ? 'is-invalid' : ''?>"
					value="<?= $name ?? '' ?>">
				<div class="invalid-feedback">
					<?= $errors['name'] ?>
				</div><!--invalid-feeback-->
			</div><!--form-group-->
			<div class="form-group col-md-6">
				<label for="email">E-mail</label>
				<input type="email" id="email" name="email" placeholder="Digite o e-mail"
					class="form-control <?= $errors['email'] ? 'is-invalid' : ''?>"
					value="<?= $email ?? '' ?>">
				<div class="invalid-feedback">
					<?= $errors['email'] ?>
				</div><!--invalid-feeback-->
			</div><!--form-group-->
		</div><!--form-row-->

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="password">Senha</label>
				<input type="password" id="password" name="password" placeholder="Digite a senha."
					class="form-control <?= $errors['password'] ? 'is-invalid' : ''?>">
				<div class="invalid-feedback">
					<?= $errors['password'] ?>
				</div><!--invalid-feeback-->
			</div><!--form-group-->
			<div class="form-group col-md-6">
				<label for="confirmPassword">Confirme a Senha</label>
				<input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirme a senha."
					class="form-control <?= $errors['confirmPassword'] ? 'is-invalid' : ''?>">
				<div class="invalid-feedback">
					<?= $errors['confirmPassword'] ?>
				</div><!--invalid-feeback-->
			</div><!--form-group-->
		</div><!--form-row-->

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="start_date">Data Admissão</label>
				<input type="date" id="start_date" name="start_date"
					class="form-control <?= $errors['start_date'] ? 'is-invalid' : ''?>"
					value="<?= $start_date ?? '' ?>">
				<div class="invalid-feedback">
					<?= $errors['start_date'] ?>
				</div><!--invalid-feeback-->
			</div><!--form-group-->
			<div class="form-group col-md-6">
				<label for="end_date">Data de Desligamento</label>
				<input type="date" id="end_date" name="end_date"
					class="form-control <?= $errors['end_date'] ? 'is-invalid' : ''?>"
					value="<?= $end_date ?? '' ?>">
				<div class="invalid-feedback">
					<?= $errors['end_date'] ?>
				</div><!--invalid-feeback-->
			</div><!--form-group-->
		</div><!--form-row-->

		<div class="form-row">
				<div class="form-check col-md-6 ml-4">
					<input type="checkbox" id="is_admin" name="is_admin"
					class="form-check-input <?= $errors['is_admin'] ? 'is-invalid' : '' ?>"
						<?= $is_admin ? 'checked' : '' ?>>
					<label class="form-check" for="is_admin">Administrador?</label>
					<div class="invalid-feedback">
						<?= $errors['is_admin'] ?>
					</div><!--invalid-feedback-->
				</div><!--form-group-->
        </div><!--form-row-->
		<div>
			<button class="btn btn-primary btn-lg">Salvar</button>
			<a href="/usersController.php" class="btn btn-secondary btn-lg">Cancelar</a>
		</div>
		
	</form>
	
</main>