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
		if( !empty( $_POST) )
		{
			$presidentData = array(
					'person_first_name'		=>	trim( $_POST['person_first_name'] ),
					'person_last_name'		=>	trim( $_POST['person_last_name'] ),
					'person_start_mandate'	=>	trim( $_POST['start_date'] ),
					'person_end_mandate'	=>	trim( $_POST['end_date'] ),
					'person_role'			=>	trim( $_POST['person_role'] )
			);
			
			echo "give me the post['Datas']" . var_dump( $presidentData );

			/* if ( $_POST['person_role'] === "President")
			{
				$templateForm = include __DIR__ . '/../View/PresidentsTemplate.php';
				
				print $templateForm;
			}
			elseif ( $_POST['person_role'] === "Vice-President" )
			{
				$templateForm = include __DIR__ . '/../View/VicePresidentsTemplate.php';
				
				print $templateForm;	
			} */
			
			
		}
		
		$presidentModel = new PresidentModel();

		$result = $presidentModel->createPresident( $presidentData );
	
		if ($result == true)
		{
			echo "You have successfully added a person.";
			
			//$templateForm = include __DIR__ . '/../View/CreateUser.html';
			$templateForm = include __DIR__ . '/../View/Home.html';
			
		}
		else 
		{
			echo "An error occurred whilst adding a person. ";
		}

	}

	/* public function render()
	{die('asdf');
		print ( $templateForm );
	} 
 */

}