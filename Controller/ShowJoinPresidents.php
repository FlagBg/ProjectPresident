<?php
include_once '../Model/PresidentModel.php';

class ShowJoinPresidents
{
	public $templateData;
	
	public function __construct( )
	{
		
	}

	public function showPresidentsJoin( )
	{
		$showByJoinPresident	= new PresidentModel();

		$presidents				= $showByJoinPresident->showPresidentsJoin();
		//$this->templateData	= $presidents;
		
		$template = include __DIR__ . '/../View/ShowPresidents.php';
	}

	public function render( )
	{
		print $template;
	}
		
}
?>


