<?php 
class Users extends Controller{
	/*protected function Index(){
		echo 'Users/index';
	}*/
	protected function register(){
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->register(),true);
	}

	protected function login(){
		

		if(!isset($_SESSION['is_logged_in'])){
			$viewmodel = new UserModel();
			$this->returnView($viewmodel->login(),true);

		}else{
			header('Location: '.ROOT_URL.'/dashboard/home');
		}
	}

	protected function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_data']);
		session_destroy();
		// Redirect
		header('Location: '.ROOT_URL.'/users/login');
	}
}

 ?>