<?php 
include_once '../Model/PresidentModel.php';

class PresidentsVicePresidentsList
{
	public function __construct()
	{
		
	}
	
	/**
	 * @brief	Shows all VicePresidents into a template. It is calling showAllVicePresidents 
	 * 			function from the ModelPresident where is defined sql join query and returned 
	 * 			result that is used to be imported by the controller into the view form called
	 * 			VicePresidentTemplate;
	 */
	public function allPresidentsAndVicePresidentsList()
	{
		$allPresidents = new PresidentModel();
		
		$dataArray = $allPresidents->allPresidentsAndVicePresidentsList();
		
		var_dump( $dataArray ); die('in All Controller');
		
		$template = include __DIR__ . '/../View/PresidentsVicePresidentsTemplate.php';
	}
	
}





?>