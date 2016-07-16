<?php

include_once '../Model/PresidentModel.php';

class ShowAllVicePresidents
{
	
	public function __construct()
	{
		
	}
	
	public function showAllVicePresidents()
	{
		//echo "i am in show vice presidents controller";
		
		$presidentModel = new PresidentModel();
		
		$dataArray = $presidentModel->showAllVicePresidents();
		
		if ( $dataArray == "Failed" )
		{
			print_r( $e );
			echo "<br></ br>";
			echo "Something went wrong in ShowAllPresidentsController";
		}
		else 
		{
			print_r( $dataArray );
		}
		
	}

}
?>

<doctype html>
	<html>
	<body>
		
	
	</body>
	</html>