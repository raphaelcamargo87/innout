<?php 

	session_start();
	requireValidSession();

	$exception = null;
	if(count($_POST) > 0){
		try {
			User::deleteById($_POST['id']);
			addSuccessMsg("Usuário excluído com sucesso!");
			die();
		}catch(Exception $e){
			if(stripos($e->getMessage(), 'FOREIGN KEY')){
				addErrorMsg("Não é possível excluir usuário com registros de ponto!");
			}else {
				$exception = $e;
			}
			die();			
		}
	}
		

?>