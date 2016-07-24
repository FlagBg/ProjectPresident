<?php 

include_once '../Model/PresidentModel.php';

class EditPresidentController
{
	
	public $peo_id;
	
	public $presidentData;
	
	public $presidentEditModel;	
	
	public function __construct()
	{
		$this->presidentEditModel = new PresidentModel();
		
		//$this->peo_id = $_GET['id'];
	}
	
	public function presidentEdit()
	{
		//$this->presidentEditModel->presidentEdit( $this->presidentData );
		$presidentData = array(
		//$_POST['rol_name'],
			$_POST['person_last_name'],
			$_POST['person_first_name'],
		);
		//echo 'print print pring' . $_POST['person_last_name'];//undefinied.
		//echo $_POST['lastname_label_container'];//undefinied. 
		
		//var_dump( $presidentData ); echo 'function presidentEdit ;)';
		
		$peo_id	= $_POST['id'];
		
		$result = $this->presidentEditModel->presidentEdit( $peo_id, $presidentData );
		
		if($result)
		{
			header('Location: index.php?controller=Presidents');
		}
	}
	
	public function renderForm()//from here i am firing it... okay slow 
	{	
		//var_dump($this->peo_id);
		//echo ' function render form in editController' . "<br>";
		$peo_id	= $_GET['id'];
		
		$this->getPresidentData( $peo_id );

		$form = include __DIR__ . '/../View/EditPresidentVrPr.php';
		
		print $form;
	}
	
	public function getPresidentData( $peo_id )
	{	
		$this->presidentData = $this->presidentEditModel->getPresidentData( $peo_id );
	}	
	
}





?>