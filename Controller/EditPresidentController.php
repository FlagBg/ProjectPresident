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
	
	/**
	 * @brief	edit the profile with that function
	 * 
	 * @param	string
	 * 
	 * return	void	
	 */
	public function presidentEdit()
	{	//$this->presidentEditModel->editPresident( $this->presidentData );
		$presidentData = array( 
				//$_POST['rol_name'], 
				$_POST['person_first_name'], 
 				$_POST['person_last_name'],
				$_POST['start_date'],
				$_POST['end_date'],
 				$_POST['person_role']
				
			);
		
		$peo_id = $_POST['id'];
		//echo 'this is the get peo_id ' . var_dump( $this->peo_id ) . var_dump($peo_id);
		$result = $this->presidentEditModel->presidentEdit( $peo_id, $presidentData );
		
		if ( $result)
		{
			header('Location: index.php?controller=Presidents');
		}
		//var_dump($this->presidentData);die('here in controller');//THIS ONE NEEDS TO BE FIXED!!!

	}
	
	public function renderForm()//from here i am firing it... okay slow 
	{	
		//var_dump($this->peo_id);
		$peo_id	= $_GET['id'];
		echo 'editController line 53 get_id = ' . $peo_id;
		
		$this->getPresidentData( $peo_id );
		
		//$this->peo_id = $_GET['id'];//this one could be out
		//added in additin to render form EditPresidentVrPr

		$form = include __DIR__ . '/../View/EditPresidentVrPr.php';
		
		print $form;
		
	}
	
	public function getPresidentData( $peo_id )
	{	print '<br></br>' . 'editController getPresidentData line 67, peo_id:' . $peo_id;
		$this->presidentData = $this->presidentEditModel->getPresidentData( $peo_id );
	}	
	
}

?>