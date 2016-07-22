<?php 

include_once '../Model/PresidentModel.php';

class EditPresidentController
{
	
	public $peo_id;
	//public $president_id = $presidentData['peo_id'];
	public $presidentData;
	public $presidentEditModel;	
	
	public function __construct()
	{
		$this->presidentEditModel = new PresidentModel();
		//var_dump($this->presidentEditModel);
		$this->peo_id = $_GET['id'];
		//var_dump($this->peo_id);
	}
	
	
	public function presidentEdit()
	{	//$this->presidentEditModel->editPresident( $this->presidentData );
		var_dump($this->peo_id);
		$presidentData = array(
					//'person_first_name'		=>	trim( $_GET['person_first_name'] ),
					//'person_last_name'		=>	trim( $_GET['person_last_name'] )
					
			);
		var_dump($presidentData);
		
		$this->presidentEditModel->presidentEdit( $this->peo_id, $this->presidentData );
		
	}
	
	public function renderForm()
	{//var_dump($this->peo_id);
		$this->getPresidentData();
		//var_dump($this->getPresidentData() );
												//TO DO!!!
		$form = include __DIR__ . '/../View/EditPresidentVrPr.php';
		
		print $form;
	}
	
	public function getPresidentData()
	{	
		$this->presidentData = $this->presidentEditModel->getPresidentData( $this->peo_id );
		var_dump($this->peo_id);
	}	
	
}





?>