<?php


/**
 * 
 */
class Database{

		public $host = DB_HOST;
		public $user = DB_USER;
		public $pass = DB_PASS;
		public $dname =DB_NAME;



		public $link;
		public $error;

		public function __construct(){
			$this->conection();

		}


		private function conection() {
			$this->link= new mysqli($this->host, $this->user, $this->pass, $this->dname);

			if (!$this->link) {
				$this->error ="connection fall".$this->link->connect_error;
			}
		}


		// sectect to read data 


		public function select($query){
			$result =$this->link->query($query) or die($this->link->error.__LINE__);
			if($result->num_rows > 0){
				return $result;

			}
			else{
				return false;
			}

		}

		// insert to create data 

		public function insert($query){
			$insert_row =$this->link->query($query) or die($this->link->error.__LINE__);
			if($insert_row){
				header("Location:index.php?msg=".urlencode('Data Insert Succeful .'));
				exit();
			}
			else{
				die("Error: (".$this->link->errno.")".$this->link->error);
			}

		}

	}
