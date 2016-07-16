<?php

session_start();
error_reporting( E_ALL );
ini_set( 'display_errors', 'ON');
ini_set( 'display_startup_errors', 'ON');


if ( isset( $_GET['controller'] ) )
{
	$controller = $_GET['controller'];
}
else 
{
	$controller = '';
}

if ( $controller != '' )
{
	if ( $controller == 'CreateNew' ) 
	{
		include __DIR__ . '\..\Controller\CreatePresident.php'; 
		
		$createPresident = new PresidentCreate;
		
		echo $createPresident->createPresident();
	}
	
	elseif ( $controller == 'ShowPresidents')
	{
		include __DIR__ . '\..\Controller\showAllPresidents.php';
	
		$showPresidents = new ShowAllPresidents;
		
		echo $showPresidents->showAllPresidents();
	
		echo '<br><br />';
		echo 'controller showAllPresidents';

	}
	
	elseif ( $controller == 'ShowVicePresidents')
	{
		include __DIR__ . '\..\Controller\ShowAllVicePresidents.php';
		
		$showVicePresidents = new ShowAllVicePresidents;
		
		echo $showVicePresidents->showAllVicePresidents();
		
		echo 'controller ShowAllVicePresidents';
	}
	
	elseif ( $controller =='ShowJoin' )
	{
		include __DIR__ . '\..\Controller\ShowJoinPresidents.php';
		
		$showJoin = new ShowJoinPresidents;
		
		$showJoin->showPresidentsJoin();
		
	}
	
	else 
	{
		echo 'No controller or invalid controller selected.';
	}
}



else 
{
		$form = file_get_contents( __DIR__ . '/../View/CreateUser.html');
			
		print ( $form );
}

?>