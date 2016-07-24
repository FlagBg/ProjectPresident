<?php

include_once '../Model/PresidentModel.php';

class ShowAllVicePresidents
{
	
	public function __construct()
	{
		
	}
	
	public function showAllVicePresidents()
	{	
		$showAllVicePresidents = new PresidentModel();
		
		$vicePresidents = $showAllVicePresidents->showAllVicePresidents();
		
		$template = include __DIR__ . '/../View/VicePresidentsTemplate.php';
	}
	
	public function render()
	{
		print $template;
	}

}
?>

