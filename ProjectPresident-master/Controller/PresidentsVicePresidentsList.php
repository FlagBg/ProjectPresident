<?php 
include_once '../Model/PresidentModel.php';

class PresidentsVicePresidentsList
{
	public function __construct()
	{
		
	}
	
	/**
	 * @brief	Shows all VicePresidents into a template. It is calling showAllVicePresidents 
	 * 			function from the ModelPresident where is defined sql join query and returned 
	 * 			result that is used to be imported by the controller into the view form called
	 * 			VicePresidentTemplate;
	 */
	public function allPresidentsAndVicePresidentsList()
	{
		$allPresidents = new PresidentModel();
		
		$dataArray = $allPresidents->allPresidentsAndVicePresidentsList();

		$template = include __DIR__ . '/../View/PresidentsVicePresidentsTemplate.php';
		
	
		
		/* foreach ( $dataArray['vice-presidents'] as $key => $value )
		{ 
			foreach ( $value as $key2 => $value2 )
			{
				echo "\t" . $key2 . " => " . $value2 . "\r\n";
				echo "<br>";
			}
			echo ")";
		}
		
		foreach ( $dataArray['presidents'] as $key => $value )
		{
			foreach ( $value as $key2 => $value2 )
			{
				echo "\t" . $key2 . " => " . $value2 . "\r\n";
				echo "<br>";
			}
			echo ")";
		}
		echo "Starting the new loop" . "<br>";
		print "level2";
		for( $i=0; $i < count( $dataArray['presidents'] ); $i++)
		{
			echo $dataArray['presidents'][$i]['peo_forename'];die('motherFuckerHere');		
		}
		var_dump($dataArray); */
		
	}
	
	
}





?>