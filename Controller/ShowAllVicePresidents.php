<?php

include_once '../Model/PresidentModel.php';


class ShowAllVicePresidents
{
	
	public function __construct()
	{
		
	}
	
	public function showAllPresidents()
	{
		//echo "i am in show vice presidents controller";
		
		$presidentModel = new PresidentModel();
		
		print_r( $dataArray = $presidentModel->showAllPresidents() );
		
	}

}
?>

<doctype html>
	<html>
	<body>
		
	
	</body>
	</html>