<?php

include_once '../Model/PresidentModel.php';

/**
 *
 * @brief	functionality that registering President or Vicepresident; It has it's own View called CreatePeople
 *
 * @author Administrator
 *
 */
class PresidentCreate
{

	public function __construct()
	{

	}

	/**
	 * @brief	creating the President as an not empty array;
	 */
	public function createPresident()
	{
		if( !empty( $_GET) )
		{
			$presidentData = array(
					'person_first_name'		=>	trim( $_GET['person_first_name'] ),
					'person_last_name'		=>	trim( $_GET['person_last_name'] ),
					'person_start_mandate'	=>	trim( $_GET['start_date'] ),
					'person_end_mandate'	=>	trim( $_GET['end_date'] ),
					'person_role'			=>	trim( $_GET['person_role'] )
			);
			
			//print_r($presidentData);
			//echo "<br />";
		}
		
		/*
		if ($_GET['id')
		{	if peo_id = ?
			;
		}
		
		else ()
		{
			
		}
		*/
		
		$presidentModel = new PresidentModel();

		$result = $presidentModel->createPresident( $presidentData );
	
		if ($result == true)
		{
			echo "You have successfully added a person.";
			
			$templateForm = include __DIR__ . '/../View/CreateUser.html';
			$templateForm = include __DIR__ . '/../View/Home.html';
			;
		}
		else 
		{
			echo "An error occurred whilst adding a person. ";
		}

	}

	public function render()
	{
		print ( $templateForm );
	} 


}