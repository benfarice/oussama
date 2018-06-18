<?php
class UserModel extends Model{
	public function register(){
		//die("submitted");
		//return;
		//Sanitize POST
		$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);




		$password = md5($post['password']);

		if($post['submit']){
			//echo "Submitted";
			//Insert INTO Mysql

			if(    $post['name'] == '' 
				|| $post['password'] == ''
			    || $post['email'] == ''){
				messages::setMsg('Please Fill in All Fields','error');
				return;
			}

			$this->query('insert into users (name,email,password) values(:name,:email,:password)');
			$this->bind(':name',$post['name']);
			$this->bind(':email',$post['email']);
			$this->bind(':password',$password);
			

			$this->execute();

			//Verify

			if($this->lastInsertId()){
				//Redirect
				header('Location: '.ROOT_URL.'/users/login');
			}

		}
		return;
	}
	public function parent(){
		
		if(isset($_REQUEST['AssessmentCode'])){
			$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

		    $AssessmentCode = $post['AssessmentCode'];

            $this->query('SELECT student_id FROM student WHERE CODE = :code');
            $this->bind(':code',$AssessmentCode);
            $rows = $this->resultSet();
            $id = 0;
            foreach ($rows as $key => $value) {
            	$id = $value['student_id'];
            }

            if($id != null && $id != 0){
            	header('Location: '.ROOT_URL.'/assessment/data/'.$id);
            }

		}

		
		return;
	}
	public function login(){
		//return;
		$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		//echo "yeah";
		if(isset($post['username'])){
			//die("submitted");
			//echo "Submitted";
			//Compare login
			$this->query('select * from users where username = :username and password = :password');
			
			$this->bind(':username',$post['username']);
			$this->bind(':password',$password);
			

			$row = $this->single();

			if($row){
				//echo 'Logged In';
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"username"    => $row['username'],
					"password"  => $row['password'],
					"user_Type" => $row['user_Type']
				);
				header('Location: '.ROOT_URL.'/dashboard/home');
			}else{
				/*$this->errorInfo_func();
				echo "\nPDO::errorInfo():\n";
				print_r($this->dbh->errorInfo());
				print_r($this->stmt->errorInfo());
				echo "yeah";*/
			}

		}
		return;
	}
}