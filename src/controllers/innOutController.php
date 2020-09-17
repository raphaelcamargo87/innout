<?php

	session_start();
	requireValidSession();

	$user = $_SESSION['user'];
	$records = WorkingHours::loadFromUserAndDate($user->id, date('Y-m-d'));

	try{

		$currentTime = strftime("%H:%M:%S", time());
		if(isset($_POST['forcedTime'])){
			$currentTime = $_POST['forcedTime'];
		}
		$records->innout($currentTime);
		addSuccessMsg("Registro realizado com sucesso.");
	}catch (AppException $e){
		addErrorMsg($e->getMessage());
	}
	
	header("Location: dayRecordsController.php");


?>