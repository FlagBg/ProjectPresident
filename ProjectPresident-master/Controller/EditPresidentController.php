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
		
		$this->peo_id = $_GET['id'];
	}
	
	
	public function presidentEdit()
	{	//$this->presidentEditModel->editPresident( $this->presidentData );
		$presidentData = array( 
				//$_POST['rol_name'], 
				$_POST['peo_forename'], 
 				$_POST['peo_surname'],
// 				$_POST['dat_start'],
// 				$_POST['dat_end'],
// 				$_POST['person_first_name']
				
			);
		
		//var_dump($presidentData);
		
		$this->presidentEditModel->presidentEdit( $this->peo_id, $this->presidentData );
		var_dump($this->peo_id);
		//var_dump($this->presidentData);die('here in controller');//THIS ONE NEEDS TO BE FIXED!!!
		
	}
	
	public function renderForm()
	{//var_dump($this->peo_id);
		$this->getPresidentData();

		$form = include __DIR__ . '/../View/EditPresidentVrPr.php';
		
		print $form;
	}
	
	public function getPresidentData()
	{	
		$this->presidentData = $this->presidentEditModel->getPresidentData( $this->peo_id );
	}	
	
}





?>