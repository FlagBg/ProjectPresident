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
		var_dump( $dataArray['vice-presidents'] );
		
		//var_dump($dataArray); die('here');
		/* foreach ( $dataArray[0] as $key => $value )
		{ 
			echo $key;
		}//die('asdf');
		echo "<br>";
		foreach ( $dataArray[1] as $key1 => $value1 )
		{
			print_r( $dataArray[1] );
		}
		echo "new"; */
		
		/**
		 * @PHP foreach loop through multidimensional array of VicePresidents;
		 */
		foreach ( $dataArray['vice-presidents'] as $key => $value )
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
		//for( $i=0; $i < count( $dataArray[1] ); $i++)
		//{
		//	echo $dataArray[$i][$i][$i]; 		
		//}
		//var_dump($dataArray);
		
		//$template = include __DIR__ . '/../View/PresidentsVicePresidentsTemplate.php';
	}
	
	
}





?>