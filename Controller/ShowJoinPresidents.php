<?php
include_once '../Model/PresidentModel.php';

class ShowJoinPresidents
{
	
	public function __construct( )
	{
		
	}
	
	
	//public $stmt = array( 'Angel', 'Ivan');
	
	public function showPresidentsJoin( )
	{
		$showByJoinPresident = new PresidentModel();
		//$showByJoinPresident->renderForm();//fire the form!
		
		$this->testF();

		$showByJoinPresident->showPresidentsJoin();
	}


	public function testF( )
	{
		$form = file_get_contents( __DIR__ . '/../View/ShowPresidents.php');
		
		print ( $form );
		echo 'That is a small test'. '<br></ br>';
	}
		
}
?>


