<?php
class studentClass extends Model{
	public function Index(){
		//return;
		//$this->query('select * from shares order by create_date desc');
		//$rows = $this->resultSet();
		//print_r($rows);
		//return $rows;
		return;
	}
	public function home(){
		
		return;
	}

	public function add(){
		//return;
		//echo "Sanitize POST";
		$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
		if(isset($post['submit'])){
			//echo "Submitted";
			//Insert INTO Mysql
			$o = true;
			$code_generated = "";
			do{
				$r = $this->random_str(12);
				$this->query('SELECT student_id FROM student WHERE CODE = :code');
	            $this->bind(':code',$r);
	            $rows = $this->resultSet();
	            $id = 0;
	            foreach ($rows as $key => $value) {
	            	$id = $value['student_id'];
	            }
	            if($id != null && $id != 0)
	            {
	            	$o = false;
	            }
	            $code_generated = $r;
			}while($o == false);
			






			$this->query('INSERT INTO student (name, birth_year, Parent_id, class_id, Gender, Parent_name, parent_email, parent_phone, Wechat_ID, Existing_Customer,code) VALUES ( :name,NULL,:Parent_id,:class_id,:Gender,:Parent_name, :parent_email,:parent_phone,:Wechat_ID,:Existing_Customer,:code)');
			

			$this->bind(':name',$post['fullname']);
			$this->bind(':Parent_id',1);
			$this->bind(':class_id',$post['camp_id']);
			if (isset($post['student_gender']) && $post['student_gender']=="female"){
				$this->bind(':Gender',2);
			}else{
				$this->bind(':Gender',1);
			}
			$this->bind(':Parent_name',$post['parent_name']);
			$this->bind(':parent_email',$post['email']);
			$this->bind(':parent_phone',$post['phone_number']);
			$this->bind(':Wechat_ID',$post['Wechat']);
			$this->bind(':code',$code_generated);
			/*if (isset($post['Existing_Customer']) && $post['Existing_Customer']=="yes"){
				$this->bind(':Existing_Customer',1);
			}else{
				$this->bind(':Existing_Customer',0);
			}
			*/
			
			$this->bind(':Existing_Customer',0);


			$this->execute();

			//Verify

			if($this->lastInsertId()){
				//Redirect
				header('Location: '.ROOT_URL.'/dashboard/home');
			}else{
				//header('Location: '.ROOT_URL.'/dashboard/');
				$this->errorInfo_func();
				echo "\nPDO::errorInfo():\n";
				print_r($this->dbh->errorInfo());
				print_r($this->stmt->errorInfo());
				echo "yeah";
			}



		}


		$this->query('SELECT Class_id,Class_title FROM class');
		$rows = $this->resultSet();
		
		return $rows;
		
	}
}