<?php

/**
 * 
 */
class Admin
{
	
	private $con;

	function __construct()
	{
		include_once("Database.php");
		$baristo = new Database();
		$this->con = $baristo->connect();
	}

	public function getAdminList(){
		$query = $this->con->query("SELECT `id`, `name`, `email`, `is_active` FROM `admins` WHERE 1");
		$ar = [];
		if ($query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'No Admin'];
	}


}


if (isset($_POST['GET_ADMIN'])) {
	$a = new Admin();
	echo json_encode($a->getAdminList());
	exit();
	
}

?>