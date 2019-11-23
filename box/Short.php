

<?php include 'Database.php'; ?>

<?php



/**
 * 
 */
class Short
{
	private $db;
	Public function __construct()
	{
		$this->db = new Database();
	}
	
	public function getalldate(){
	    
	    $query  = "select * from box_k order by id DESC";
	    $result = $this->db->select($query);
	    return $result;
	    
	}
}

?>