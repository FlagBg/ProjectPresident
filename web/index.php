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
		
		$createPresident->createPresident();
		echo $createPresident->createPresident();
		
		
		
	}
	
	elseif ( $controller == 'VicePresidents')//it has template!
	{
		include __DIR__ . '\..\Controller\ShowAllVicePresidents.php';
		
		$showVicePresidents = new ShowAllVicePresidents;
		
		$showVicePresidents->showAllVicePresidents();
		
		echo 'index before controller ShowAllVicePresidents';
		
	}
	
	elseif ( $controller == 'Presidents' )
	{
		include __DIR__ . '\..\Controller\ShowPresidents.php';
		
		$showMePresidents = new ShowPresidents;
		
		$showMePresidents->showAllPresidents();
		
		echo 'Index passed === true';
		
	}
	
	elseif ( $controller =='PresidentsVicePresidents')
	{
		include __DIR__ . '\..\Controller\PresidentsVicePresidentsList.php';
		
		$listPresidents = new PresidentsVicePresidentsList;
		
		$listPresidents->allPresidentsAndVicePresidentsList();
		
	}
	
	elseif ( $controller=='EditPresidents')
	{
		include __DIR__ . '\..\Controller\EditPresidentController.php';
		
		$editPresidents = new EditPresidentController();
		
		if ( ! empty( $_GET ) )
		{
			$editPresidents->presidentEdit();
		}
		
		$editPresidents->renderForm();
		//$editPresidents->getPresidentData();
		//var_dump($editPresidents);
		//$editPresidents->renderForm();
		
		
		
	}
	
	elseif ( $controller =='ShowJoin' )//ShowAllPresidents with join unorder!
	{
		include __DIR__ . '\..\Controller\ShowJoinPresidents.php';
	
		$showJoin = new ShowJoinPresidents;
	
		$showJoin->showPresidentsJoin();
		
	}
	
	elseif ( $controller == 'ShowPresidentsArray')//doesn't have template still; i don't need it;
	{
		include __DIR__ . '\..\Controller\ShowAllPresidentsArray.php';
	
		$showPresidents = new ShowAllPresidentsArray;
	
		echo $showPresidents->showAllPresidentsArray();
	
		echo '<br><br />';
		echo 'controller showAllPresidents';
	
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

/* require '../vendor/autoload.php';

use Philo\Blade\Blade;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';

$blade = new Blade( $views, $cache );
echo $blade->view()->make('hello')->render();
die('index'); */


?>