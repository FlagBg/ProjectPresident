<?php
include_once '../Model/PresidentModel.php';

class ShowAllPresidentsArray
{
	
	public function __construct()
	{
		
	}
	
	public function showAllPresidentsArray()
	{
		$presidentModel = new PresidentModel();
		
		$dataArray = $presidentModel->showAllPresidentsArray();
		
		
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