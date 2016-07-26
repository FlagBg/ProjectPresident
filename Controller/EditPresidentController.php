<?php 

include_once '../Model/PresidentModel.php';

class EditPresidentController
{
	
	public $peo_id;
	//public $president_id = $presidentData['peo_id'];
	public $presidentData;
	
	public $presidentEditModel;	
	
	/**
	 * @brief	__construc the object
	 */
	public function __construct()
	{
		$this->presidentEditModel = new PresidentModel();
		
		//$this->peo_id = $_GET['id'];
	}
	
	
	public function presidentEdit()
	{	//$this->presidentEditModel->editPresident( $this->presidentData );
		$presidentData = array( 
				//$_POST['rol_name'], 
				$_POST['person_first_name'], 
 				$_POST['person_last_name'],
// 				$_POST['dat_start'],
// 				$_POST['dat_end'],
// 				$_POST['person_first_name']
				
			);
		
		//var_dump($presidentData);
		$peo_id = $_POST['id'];
		//echo 'this is the get peo_id ' . var_dump( $this->peo_id ) . var_dump($peo_id);
		$result = $this->presidentEditModel->presidentEdit( $peo_id, $presidentData );
		
		if ( $result)
		{
			header('Location: index.php?controller=Presidents');
		}
		//var_dump($this->presidentData);die('here in controller');//THIS ONE NEEDS TO BE FIXED!!!
		
	}
	
	public function renderForm()
	{//var_dump($this->peo_id);
		$peo_id = $_GET['id'];
		
		$this->getPresidentData( $peo_id );
		
		$this->peo_id = $_GET['id'];
		
		$form = include __DIR__ . '/../View/EditPresidentVrPr.php';
		
		print $form;
	}
	
	public function getPresidentData( $peo_id )
	{	
		$this->presidentData = $this->presidentEditModel->getPresidentData( $peo_id );
	}	
	
}





?>