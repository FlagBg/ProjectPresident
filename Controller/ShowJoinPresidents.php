<?php
include_once '../Model/PresidentModel.php';

class ShowJoinPresidents
{
	public $templateData;
	
	public function __construct( )
	{
		
	}
	
	
	//public $stmt = array( 'Angel', 'Ivan');
	
	public function showPresidentsJoin( )
	{
		$showByJoinPresident	= new PresidentModel();

		$presidents				= $showByJoinPresident->showPresidentsJoin();
		$this->templateData	= $presidents;
		
		$this->render();
	}

	public function render( )
	{
		$template = include __DIR__ . '/../View/ShowPresidents.php';
		
		print $template;
	}
		
}
?>


