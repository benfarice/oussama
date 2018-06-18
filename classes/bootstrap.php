<?php 
 class Bootstrap{
 	private $controller;
 	private $action;
 	private $request;
 	private $id;

 	public function __construct($request){
 		$this->request = $request;
 		if($this->request['controller'] == ""){
 			$this->controller = 'users';
 		}else{
 			$this->controller = $this->request['controller'];
 		}

 		if($this->request['action'] == ""){
 			$this->action = 'login';
 		}else{
 			$this->action = $this->request['action'];
 		}

 		if($this->request['id'] == ""){
 			$this->id = '';
 		}else{
 			$this->id = $this->request['id'];
 			$_SESSION['id_url']= $this->request['id'];
 		}

 		//echo $this->controller;
 		//echo "<hr>";
 		//echo $this->action;
 	}

 	public function createController(){
 		//Check Class
 		if(class_exists($this->controller)){
 			$parents = class_parents($this->controller);
 			//Check Extend
 			if(in_array("Controller",$parents)){
 			if(method_exists($this->controller, $this->action)){
 				return new $this->controller($this->action,$this->request,$this->id);
 			}else{
 				// Method Does Not Exist


 				//echo '<h1>Method does not exist</h1>';
 				header('Location: '.ROOT_URL.'/users/login');


 				return;
 			}
 			}else{
 				// Base Controller Does Not Exist
 				//echo '<h1>Base Controller Does Not Exist</h1>';
 				header('Location: '.ROOT_URL.'/users/login');
 				return;
 			}
 		}else{
 			// Controller Class Does Not Exist
 			//echo '<h1>Controller Class  Does Not Exist</h1>';
 			header('Location: '.ROOT_URL.'/users/login');
 			return;
 		}
 	}
 }

?>