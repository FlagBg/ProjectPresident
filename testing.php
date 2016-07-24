	<?php
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
		print "level2";
		for( $i=0; $i < count( $dataArray['presidents'] ); $i++)
		{
			echo $dataArray['presidents'][$i]['peo_forename'];die('motherFuckerHere');		
		}
		var_dump($dataArray); 
	?>