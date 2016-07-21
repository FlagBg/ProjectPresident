<?php 

include_once '../Model/PresidentModel.php';

class EditPresidentController
{
	
	protected $president_id;
	//public $president_id = $presidentData['peo_id'];
	protected $presidentEditModel;
	
	
	public function renderForm()
	{
		$this->getPresidentVcPrData();
		//TO DO!!!
		$form = include __DIR__ . '/../View/EditPresidentVcPr.php';
	
		print $form;
	}
	
	
	
	public function __construct()
	{
		$this->presidentEditModel = new PresidentModel();
		
		$this->president_id = $_GET['id'];
	}
	
	
	public function presidentEdit()
	{
		$this->presidentEditModel->editPresident( $this->presidentData );

// 		$presidentData = array(
// 					'person_first_name'		=>	trim( $_GET['person_first_name'] ),
// 					'person_last_name'		=>	trim( $_GET['person_last_name'] ),
// 					'person_start_mandate'	=>	trim( $_GET['start_date'] ),
// 					'person_end_mandate'	=>	trim( $_GET['end_date']),
// 					'person_role'			=>	trim( $_GET['person_role'] )
//		);				
	}
	
	public function renderForm()
	{
		$this->getPresidentVcPrData();
												//TO DO!!!
		$form = include __DIR__ . '/../View/EditPresidentVcPr.php';
		
		print $form;
	}
	
	protected function getPresidentVcPrData()
	{
		$this->presidentData = $this->presidentDataModel->getUserData( $this->president_id );
	}
	
	
	public function getPresidentVcPrData( $president_id )
	{
		$sql	= 'SELECT tbl_people.peo_id,tbl_role.rol_name, tbl_people.peo_forename, tbl_people.peo_surname, tbl_date.dat_start, tbl_date.dat_end
			FROM tbl_role
			INNER JOIN tbl_people on tbl_role.rol_id=tbl_people.peo_rol_id
			INNER JOIN tbl_date on tbl_people.peo_id=tbl_date.dat_peo_id
			 WHERE peo_id = 33';
		
		$stmt	= $this->db->prepare( $sql );	
	}
	
	
}





?>