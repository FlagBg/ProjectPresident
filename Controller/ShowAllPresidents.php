<?php
include_once '../Model/PresidentModel.php';

class ShowAllPresidents
{
	
	public function __construct()
	{
		
	}
	
	/**
	 * @brief function that shows all the registered presidents;
	 */
	public function showAllPresidents()
	{
		
		$presidentModel = new PresidentModel();
		
		$dataArray = $presidentModel->showAllPresidents();
		
		if ($dataArray == "Failed")
		{
			print_r($e);
			echo "<br /><br />";
			echo "Something has gone wrong.";
			
		}
		else 
		{
			print_r( $dataArray );
		}
	}
	
}