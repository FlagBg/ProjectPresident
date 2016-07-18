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
		
		$template = include __DIR__ . '/../View/PresidentsTemplate.php';
	}
	
	public function render()
	{
		print $template; 
		echo 'it works';
	}

}



?>