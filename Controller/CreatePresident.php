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
		//echo "testing<br />";
		
		if( !empty( $_POST) )
		{
			$presidentData = array(
					'person_first_name'		=>	trim( $_POST['person_first_name'] ),
					'person_last_name'		=>	trim( $_POST['person_last_name'] ),
					'person_start_mandate'	=>	trim( $_POST['start_date'] ),
					'person_end_mandate'	=>	trim( $_POST['end_date'] ),
					'person_role'			=>	trim( $_POST['person_role'] )
			);
			
			//print_r($presidentData);
			//echo "<br />";
		}

		$presidentModel = new PresidentModel();

		$result = $presidentModel->createPresident( $presidentData );
	
		if ($result == true)
		{
			// eventually this should be a view.
			echo "You have successfully added a person.";
			//print_r( $presidentData );
		}
		else 
		{
			echo "An error occurred whilst adding a person. ";
		}

	}

	/* public function renderForm()
	{
		$form = file_get_contents( __DIR__ . '../View/CreatePeople.html');

		print ( $form );
	} */


}