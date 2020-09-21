<?php 

	session_start();
	requireValidSession(true);

	$exception = null;

	$userData = [];
	
	if(count($_POST) === 0 && isset($_GET['update'])){
		$user = User::getOne(['id' => $_GET['update']]);
		$userData = $user->getValues();
		$userData['password'] = null;
	}else	if(count($_POST) > 0){
		try {
			$dbUser = new User($_POST);
			if($dbUser->id){
				$dbUser->update();
				addSuccessMsg('Usuário alterado com sucesso');
				header("Location: usersController.php");
				exit();
			}else {
				$dbUser->id = null;
				$dbUser->insert();
				addSuccessMsg('Usuário cadastrado com sucesso');
			}
			$_POST = [];
			
		}catch(Exception $e){
			$exception = $e;
		}finally {
			$userData = $_POST;
		}
		
	}
	
	loadTemplateView('saveUserView', $userData + [
		'exception' => $exception,
	]);

?>