<?php

include_once '../Model/PresidentModel.php';

class ShowAllVicePresidents
{
	
	public function __construct()
	{
		
	}
	
	public function showAllVicePresidents()
	{	
		$vicePresidents = new PresidentModel();
		die('hereController');
		$vicePresidents 				= $presidentModel->showAllVicePresidents();
		
		$this->templateData 			= $vicePresidents;
		
		
		if ( $vicePresidents == "Failed" )
		{
			print_r( $e );
			echo "<br></ br>";
			echo "Something went wrong in ShowAllPresidentsController";
		}
		else 
		{
			$template = include __DIR__ . '/../View/VicePresidentsTemplate.php';
			
			print_r( $template );
		}
		
	}

}
?>
