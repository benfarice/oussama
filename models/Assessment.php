<?php
class AssessmentClass extends Model{
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
	public function check(){
		$this->query('SELECT student_id,name FROM student');
		$rows = $this->resultSet();
		//print_r($rows);
		return $rows;
	}
	public function data(){
		$this->query('SELECT a.question_id ,sum(a.assessment_value)/count(a.question_id) as v FROM assessment a inner join questions q on q.question_id = a.question_id where student_id =:id
 			and q.question_cat in(1,2,3) group by a.question_id');
			
		/*$this->query('SELECT sum(a.assessment_value)/count(a.question_id) as v FROM assessment a inner join questions q 
			on q.question_id = a.question_id where student_id = :id
			group by q.question_cat');*/
		$this->bind(':id',$_SESSION['id_url']);
		$rows = $this->resultSet();

		$json = json_encode($rows);

		//echo $json;

		$this->query('SELECT a.question_id,sum(a.assessment_value)/count(a.question_id) as v,max(a.assessment_day) as last FROM assessment a inner join questions q on q.question_id = a.question_id where student_id = :id and q.question_cat = 4 group by a.question_id');
			
		
		$this->bind(':id',$_SESSION['id_url']);
		$rows2 = $this->resultSet();

		$last_update = "";
		
		foreach ($rows2 as $value) {
			
			$last_update = $value["last"];
		}
		$last_update = date("F d, Y", strtotime($last_update));

		$json2 = json_encode($rows2);

		//echo $json2;
		//$back =[$json,$json2];
		$back = array($rows,$rows2,$last_update);
		
		//echo json_encode($back);

		

		return json_encode($back);
	}

		public function parent(){

			if(isset($_REQUEST['sendMail'])){
        $this->query('SELECT code,parent_email FROM `student` WHERE student_id = :id');
			
		
		$this->bind(':id',$_SESSION['id_url']);
		$rows = $this->resultSet();

		$code_student = "";
		$parent_email = "";
		foreach ($rows as $value) {
			
			$code_student = $value["code"];
			$parent_email = $value["parent_email"];
		}

		if($code_student != null && $code_student != "" && $parent_email != null && $parent_email != ""){
        				$mail = new PHPMailer;
						$mail->IsSMTP();
						$mail->Host = 'smtp.gmail.com';
						$mail->Port = 587;//465;//587							//Sets the default SMTP server port
						$mail->SMTPAuth = true;
						$mail->CharSet = 'UTF-8';						//Sets SMTP authentication. Utilizes the Username and Password variables
						$mail->Username =
						'amzianx.imzoughene@gmail.com';					//Sets SMTP username
						$mail->Password = 'Casablanca1993.25.05';					//Sets SMTP password
						//$mail->SMTPSecure = 'ssl';
						$mail->SMTPSecure = 'tls';						//Sets connection prefix. Options are "", "ssl" or "tls"
						$mail->From = $parent_email;					//Sets the From email address for the message
						$mail->FromName = 'Assessment';				//Sets the From name of the message
						$mail->AddAddress($parent_email, 'Assessment');		//Adds a "To" address
						$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
						$mail->IsHTML(true);

						$message = '
					<h3 align="center">E-mail</h3>
					<table border="1" width="100%" cellpadding="5" cellspacing="5">

						<tr>
							<td width="30%">
							Your sons code is : '.$code_student.'
							</td>
							<td width="70%">'.date('d/m/Y').'</td>
						</tr>
						<tr>
						<td colspan="2">
								You can check the assessment in this 
								<a href="http://localhost/oussama/users/parent">
					            link 
					            </a>
					             </form>
			             </td>
			             </tr>
					</table>
				';
				$message_div = "";			
				

								
				$mail->Subject = 'Assessment';	
				$mail->Body = $message;
							
				if(!$mail->send()) {
			        echo 'Message could not be sent.';
			        echo 'Mailer Error: ' . $mail->ErrorInfo;
			    } else {
			        //echo 'Message has been sent';
			        header('Location: '.ROOT_URL.'/dashboard/home');
			    }						
				
	}

	}



       $this->query('SELECT a.question_id ,sum(a.assessment_value)/count(a.question_id) as v FROM assessment a inner join questions q on q.question_id = a.question_id where student_id =:id
 			and q.question_cat in(1,2,3) group by a.question_id');
			
		/*$this->query('SELECT sum(a.assessment_value)/count(a.question_id) as v FROM assessment a inner join questions q 
			on q.question_id = a.question_id where student_id = :id
			group by q.question_cat');*/
		$this->bind(':id',$_SESSION['id_url']);
		$rows = $this->resultSet();

		$json = json_encode($rows);

		//echo $json;

		$this->query('SELECT a.question_id,sum(a.assessment_value)/count(a.question_id) as v,max(a.assessment_day) as last FROM assessment a inner join questions q on q.question_id = a.question_id where student_id = :id and q.question_cat = 4 group by a.question_id');
			
		
		$this->bind(':id',$_SESSION['id_url']);
		$rows2 = $this->resultSet();

		$last_update = "";
		
		foreach ($rows2 as $value) {
			
			$last_update = $value["last"];
		}
		$last_update = date("F d, Y", strtotime($last_update));

		$json2 = json_encode($rows2);

		//echo $json2;
		//$back =[$json,$json2];
		$back = array($rows,$rows2,$last_update);
		
		//echo json_encode($back);

		

		return json_encode($back);
	}

	public function GetStudentsByCamp(){

		$query = "SELECT student_id,name FROM student";
		if(isset($_REQUEST['attr'])){
			$query = "SELECT student_id,name FROM `student` WHERE class_id = ".$_REQUEST['attr'];
		}

		$this->query($query);
		$rows = $this->resultSet();
		
		return $rows;
	}


	public function add(){
		//return;
		//echo "Sanitize POST"; 
		$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
		if(isset($post['submit'])){
			echo "Submitted";

			//Insert INTO Mysql
			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',1);
			$this->bind(':assessment_value',$post['listeningAbility']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',2);
			$this->bind(':assessment_value',$post['informationResearch']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',3);
			$this->bind(':assessment_value',$post['teamworkAbility']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',4);
			$this->bind(':assessment_value',$post['organizingAbility']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',5);
			$this->bind(':assessment_value',$post['Empathy']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',6);
			$this->bind(':assessment_value',$post['cleanLiness']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',7);
			$this->bind(':assessment_value',$post['eating']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',8);
			$this->bind(':assessment_value',$post['firendLiness']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',9);
			$this->bind(':assessment_value',$post['imaginative']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',10);
			$this->bind(':assessment_value',$post['curiosity']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',11);
			$this->bind(':assessment_value',$post['aesthetic']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',12);
			$this->bind(':assessment_value',$post['concentration']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',13);
			$this->bind(':assessment_value',$post['readingAbility']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',14);
			$this->bind(':assessment_value',$post['expressionAbility']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',15);
			$this->bind(':assessment_value',$post['englishAbility']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',16);
			$this->bind(':assessment_value',$post['practicalAbility']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',17);
			$this->bind(':assessment_value',$post['observationalAbility']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',18);
			$this->bind(':assessment_value',$post['openness']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',19);
			$this->bind(':assessment_value',$post['extraversion']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',20);
			$this->bind(':assessment_value',$post['agreeableness']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',21);
			$this->bind(':assessment_value',$post['conscientiousness']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',22);
			$this->bind(':assessment_value',$post['emotionalStability']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',23);
			$this->bind(':assessment_value',$post['conscientiousness']);
			

			$this->execute();

			$this->query('INSERT INTO assessment (question_id, assessment_value, assessment_day, student_id) VALUES (:question_id, :assessment_value,:assessment_day,:student_id)');
			
			$this->bind(':student_id',$post['id_student']);
			$this->bind(':assessment_day',$post['assessment_day']);
			$this->bind(':question_id',24);
			$this->bind(':assessment_value',$post['emotionalStability']);
			

			$this->execute();

			

			//Verify

			if($this->lastInsertId()){
					//Redirect
					
				header('Location: '.ROOT_URL.'/dashboard/home');
			}else{
				
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