<main class="content">

	<?php
		renderTitle(
			'Relatório Gerencial',
			'Resumo das Horas Trabalhadas dos Colaboradores',
			'icofont-chart-histogram'
		);		
	?>

	<div class="summary-boxes">
		<div class="summary-box bg-primary">
			<i class="icon icofont-users"></i>
			<p class="title">Quantidade de Funcionários</p>
			<h3 class="value"><?= $activeUsersCount ?></h3>
		</div><!--summary-box-->
		<div class="summary-box bg-danger">
			<i class="icon icofont-patient-bed"></i>
			<p class="title">Faltas</p>
			<h3 class="value"><?= count($absentUsers) ?></h3>
		</div><!--summary-box-->
		<div class="summary-box bg-success">
			<i class="icon icofont-sand-clock"></i>
			<p class="title">Horas Trabalhadas no Mês</p>
			<h3 class="value"><?= $hoursInMonth ?></h3>
		</div><!--summary-box-->
	</div><!--summary-boxes-->
	<?php if(count($absentUsers) > 0): ?>
		<div class="card mt-3">
			<div class="card-header">
				<h4 class="card-title">Faltosos do Dia</h4>
				<p class="card-category mb-0">Relção dos Colaborares que ainda não bateram ponto</p>
			</div><!--card-header-->
			<div class="card-body">
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<th>Nome</th>
					</thead><!--thead-->
					<tbody>
						<?php foreach($absentUsers as $name): ?>
							<tr>
								<td><?= $name ?> </td>
							</tr>
						<?php endforeach ?>
					</tbody><!--tbody-->
				</table><!--table-->
			</div><!--card-body-->
		</div><!--card-->
	<?php endif ?>

	

</main>