<?php 
class student extends Controller{
	/*protected function Index(){
		echo 'Shares/index';
	}*/
	protected function Index(){
		//echo 'home/index';
		$viewmodel = new studentClass();
		$this->ReturnView($viewmodel->Index(),true);
	}
	protected function home(){
		//echo 'home/index';
		$viewmodel = new studentClass();
		$this->ReturnView($viewmodel->home(),true);
	}

	protected function add(){
		//echo 'home/index';
		if(isset($_SESSION['is_logged_in'])){
			$viewmodel = new studentClass();
			$this->ReturnView($viewmodel->add(),true);
		}else{
			header('Location: '.ROOT_URL.'/users/login');
		}
		
	}
}

 ?>