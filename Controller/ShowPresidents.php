<?php 

include_once '../Model/PresidentModel.php';

class ShowPresidents
{
	public function __construct()
	{
		
	}
	
	public function showAllPresidents()
	{
		$presidentsAll = new PresidentModel();
		
		$presidents = $presidentsAll->showAllPresidents();
		
		for( $i = 0; $i < count($presidents); $i++ )
		{
			echo $presidents[$i]['peo_forename'] . "<br><br />";
		}		
		
		$template = include __DIR__ . '/../View/PresidentsTemplate.php';
		echo 'ShowAllPresidentsFunction';
		
	}
	
	public function render()
	{
		print $template; 
		echo 'it works';
	}

}



?>