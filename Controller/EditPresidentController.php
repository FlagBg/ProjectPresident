<?php 

include_once '../Model/PresidentModel.php';

class EditPresidentController
{
	
	public $peo_id;
<<<<<<< HEAD
	
	public $presidentData;
	
=======
	//public $president_id = $presidentData['peo_id'];
	public $presidentData;
>>>>>>> origin/master
	public $presidentEditModel;	
	
	public function __construct()
	{
		$this->presidentEditModel = new PresidentModel();
		
<<<<<<< HEAD
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
=======
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
>>>>>>> origin/master

		$form = include __DIR__ . '/../View/EditPresidentVrPr.php';
		
		print $form;
	}
	
<<<<<<< HEAD
	public function getPresidentData( $peo_id )
	{	
		$this->presidentData = $this->presidentEditModel->getPresidentData( $peo_id );
=======
	public function getPresidentData()
	{	
		$this->presidentData = $this->presidentEditModel->getPresidentData( $this->peo_id );
>>>>>>> origin/master
	}	
	
}





?>