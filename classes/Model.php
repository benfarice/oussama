<?php 
abstract class Model{
	protected $dbh;
	protected $stmt;

	public function __construct(){
		$this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
	}

	public function query($query){
		$this->stmt = $this->dbh->prepare($query);
	}

	public function bind($param,$value,$type=null){
		if(is_null($type)){
			switch (true) {
				case is_int($value):
					# code...
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					# code...
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					# code...
					$type = PDO::PARAM_NULL;
					break;
				
				default:
					# code...
					$type = PDO::PARAM_STR;
					break;
			}

		}
		$this->stmt->bindValue($param,$value,$type);
	}

	public function execute(){
		$this->stmt->execute();
	}

	public function resultSet(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function resultSet_2(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function lastInsertId(){
		return $this->dbh->lastInsertId();
	}

	public function single(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function errorInfo_func(){
			if (!$this->stmt) {
			   echo "\nPDO::errorInfo():\n";
			   print_r($this->dbh->errorInfo());
			}
	}
	function random_str($length, $keyspace = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ')//abcdefghijklmnopqrstuvwxyz
	{
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces []= $keyspace[random_int(0, $max)];
    }
    return implode('', $pieces);
	}	

}


 ?>