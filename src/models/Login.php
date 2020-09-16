<?php 

loadModel('User');
class Login extends Model {

	public function validate(){
		$errors = [];

		if(!$this->email){
			$errors['email'] = 'E-mail é um campo obrigatório.';
		}

		if(!$this->password){
			$errors['password'] = 'Por favor digite sua senha';
		}

		if(count($errors)){
			throw new ValidationException($errors);
		}
	}

	public function checkLogin(){
		$this->validate();
		$user = User::getOne(['email' => $this->email]);
		if($user){
			if($user->end_date){
				throw new AppException('Usuário está desligado da empresa.');
			}
			if(password_verify($this->password, $user->password)){
				return $user;
			}
		}

		throw new AppException('Usuário e Senha Inválidos');

	}

}

?>