<main class="content">

	<?php 
		renderTitle(
			'Registrar Ponto',
			'Mantenha seu ponto consistente!',
			'icofont-check-alt'
		);
		include(TEMPLATE_PATH . "/messages.php");

	?>
	<div class="card">
		<div class="card-header">
			<h3><?= $today ?></h3>
			<p class="mb-0">Os batimentos efetuados hoje.</p>
		</div><!--card-header-->
		<div class="card-body">
			<div class="d-flex m-5 justify-content-around">
				<span class="record">Entrada 1: <?= $workingHours->time1 ?? '---' ?></span>
				<span class="record">Saída 1: <?= $workingHours->time2 ?? '---' ?></span>
			</div><!--d-flex-->
			<div class="d-flex m-5 justify-content-around">
				<span class="record">Entrada 2:  <?= $workingHours->time3 ?? '---' ?></span>
				<span class="record">Saída 2:  <?= $workingHours->time4 ?? '---' ?></span>
			</div><!--d-flex-->
		</div><!--card-body-->
		<div class="card-footer d-flex justify-content-center">
			<a href="innOutController.php" class="btn btn-success btn-lg">
				<i class="icofont-check mr-1"></i>
				Bater o Ponto
			</a>
		</div><!--card-footer-->
	</div><!--card-->

	<form class="mt-5" action="innOutController.php" method="post">
		<div class="form-group">
			<label for="forcedTime">Informe a hora para simular o batimento.</label>
			<input type="time" name="forcedTime" class="form-control">
			<button class="btn btn-danger mt-3">
				Simular Ponto
			</button>
		</div><!--form-group-->
	</form>
</main>