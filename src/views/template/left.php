<aside class="sidebar">
	<nav class="menu mt-3">
		<ul class="nav-list">
			<li class="nav-item">
				<a href="dayRecordsController.php">
					<i class="icofont-ui-check mr-2">
						Registrar Ponto
					</i>
				</a>
			</li><!--nav-item-->
			<li class="nav-item">
				<a href="monthlyReportController.php">
					<i class="icofont-ui-calendar mr-2">
						Relatório Mensal
					</i>
				</a>
			</li><!--nav-item-->
			<?php if($user->is_admin): ?>
			<li class="nav-item">
				<a href="managerReportController.php">
					<i class="icofont-chart-histogram mr-2">
						Relatório Gerencial
					</i>
				</a>
			</li><!--nav-item-->
			<li class="nav-item">
				<a href="usersController.php">
					<i class="icofont-users mr-2">
						Usuários
					</i>
				</a>
			</li><!--nav-item-->
			<?php endif ?>
		</ul><!--nav-list-->
	</nav><!--menu-->
	<div class="sidebar-widgets">
		<div class="sidebar-widget">
			<i class="icon icofont-hour-glass text-primary"></i>
			<div class="info">
				<span class="main text-primary" <?= $activeClock == 'workedInterval' ? 'active-clock' : ''?>>
					<?= $workedInterval ?>
				</span>
				<span class="label text-muted">Horas Trabalhadas</span>
			</div><!--info-->
		</div><!--sidebar-widget-->
		<div class="division my-3"></div>
		<div class="sidebar-widget">
			<i class="icon icofont-ui-alarm text-danger"></i>
			<div class="info">
				<span class="main text-danger"<?= $activeClock == 'exitTime' ? 'active-clock' : ''?>>
					<?= $exitTime ?>
				</span>
				<span class="label text-muted">Hora de Saída</span>
			</div><!--info-->
		</div><!--sidebar-widget-->
	</div><!--sidebar-widgets-->
</aside><!--sidebar-->