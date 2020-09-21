<main class="content">

	<?php
		renderTitle(
		'Gestão de Usuários',
		'Mantenha os Dados dos Colaboradores Atualizados',
		'icofont-users'
		);

		include(TEMPLATE_PATH . "/messages.php");
	?>

	<a href="saveUserController.php" class="btn btn-primary btn-lg mb-3">Novo Usuário</a>

	<table class="table table-bordered table-striped table-hover">
		<thead class="text-center">
			<th>Nome</th>
			<th>Email</th>
			<th>Data Admissão</th>
			<th>Data Desligamento</th>
			<th>Ações</th>
		</thead><!--thead-->
		<tbody class="text-center">
			<?php foreach($users as $user): ?>
				<tr>
					<td><?= $user->name ?> </td>
					<td><?= $user->email ?> </td>
					<td><?= $user->start_date ?> </td>
					<td><?= $user->end_date ?> </td>
					<td class="text-center">  
						<a href="saveUserController.php?update=<?= $user->id ?>" 
							class="btn btn-warning rounded-circle mr-2">
							<i class="small-icon icofont-edit"></i>
						</a> 
						<a deleteId="<?=$user->id ?>"
							class="btn btn-danger rounded-circle">
							<i class="small-icon icofont-trash"></i>
						</a> 

					</td>
				</tr>
			<?php endforeach ?>
		</tbody><!--tbody-->
	</table><!--table-->

</main>