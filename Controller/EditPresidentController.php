<?php 

include_once '../Model/PresidentModel.php';

class EditPresidentController
{	
	public $peo_id;
	
	public $presidentData;	
	//public $president_id = $presidentData['peo_id'];
	public $presidentEditModel;	
	
	/**
	 * @brief	create the object from the model!
	 */
	public function __construct()
	{
		$this->presidentEditModel = new PresidentModel();
		
		//$this->peo_id = $_GET['id'];
	}
	
	public function presidentEdit()
	{//$this->presidentEditModel->presidentEdit( $this->presidentData );
		$presidentData = array(
		//$_POST['rol_name'],
				$_POST['person_last_name'],
				$_POST['person_first_name'],
			//$_POST['dat_start'],
			//$_POST['dat_end'],
			//$_POST['peo_role']
		);	
		
		//var_dump( $presidentData );
		
		$peo_id	= $_POST['id'];
		
		$result = $this->presidentEditModel->presidentEdit( $peo_id, $presidentData );
		
		if( $result )
		{
			header('Location: index.php?controller=Presidents');
		}
		//var_dump( $this->presidentData); die('here in controller');
	}
	
	
	public function renderForm()//from here i am firing it... okay slow 
	{	
		//var_dump($this->peo_id);
		$peo_id	= $_GET['id'];
		
		$this->getPresidentData( $peo_id );
		
		$this->peo_id = $_GET['id'];
		//added in additin to render form EditPresidentVrPr
		
		$form = include __DIR__ . '/../View/EditPresidentVrPr.php';
		
		print $form;
		
	}
	
	public function getPresidentData( $peo_id )
	{	
		$this->presidentData = $this->presidentEditModel->getPresidentData( $peo_id );
	}	
	
}

?>