<?php

include_once 'DatabaseModel.php';
//include_once '../Helper/People.php';

/**
 *
 * @brief	class that represent the business logic of the people that are presidents or vicepresidents; basically we will have add/remove/edit/delete;
 * @author Administrator
 *
 * @param	boolean	$db
 *
 */
class PresidentModel
{
	protected $db;

	/**
	 * @brief	create the object connection;
	 *
	 * @return 	string $db;
	 */
	public function __construct()
	{
		$this->db = Database::getInstance();
	}

	
	/**
	 * @brief	create President and Vice-President 
	 * 
	 * @param array $presidentData
	 */
	public function createPresident( $presidentData )
	{
		$sql0 = 'SELECT * FROM tbl_role WHERE rol_name=? LIMIT 1';
		
		$roleArray = array( $presidentData['person_role'] );
		//print_r( $returnedArray );echo "<br /><br/>";
		try 
		{
			$stmt = $this->db->prepare( $sql0 );
			$result = $stmt->execute( $roleArray );
			// find the rol_id returned by the query. and use it in the sql query to insert into the tbl_people table.
			$returnedArray = $stmt->fetchAll(PDO::FETCH_BOTH);
			
			$roleid = $returnedArray[0]['rol_id'];
			
			$sql = 'INSERT INTO `tbl_people`(`peo_forename`, `peo_surname`, `peo_rol_id`) VALUES ( ?,?,? )';
			
			$insertArray = array( 
					$presidentData['person_first_name'],
					$presidentData['person_last_name'],
					$roleid
			);
			
			$stmt = $this->db->prepare( $sql );
			
			$result = $stmt->execute( $insertArray );
			
			$lastInsertId = $this->db->lastInsertId();
			
			$sql1 = 'INSERT INTO `tbl_date`( `dat_start`, `dat_end`, `dat_peo_id`) 
					VALUES ( DATE_FORMAT(?, "%Y-%m-%d"),DATE_FORMAT(?, "%Y-%m-%d"),? )';
			
			$dateArray = array(
					$presidentData['person_start_mandate'],
					$presidentData['person_end_mandate'],
					$lastInsertId
			);
			
			$stmt = $this->db->prepare($sql1);
			
			$result = $stmt->execute($dateArray);
			
			return true;
		}
		
		catch (Exception $e)
		{
			return false;
		} 
	}

	
	public function presidentEdit( $peo_id, $presidentData )
	{
		$sql = 'UPDATE tbl_people SET peo_forename =?, peo_surname = ? 
				WHERE peo_id = ' . $peo_id;
		
		$stmt = $this->db->prepare( $sql );
		
		$result = $stmt->execute( $presidentData );
		
		return $result;

		
	}
	
	public function getPresidentData( $peo_id )
	{	
		$sql	= 'SELECT tbl_people.peo_id,tbl_role.rol_name, tbl_people.peo_forename, tbl_people.peo_surname, tbl_date.dat_start, tbl_date.dat_end
			FROM tbl_role
			INNER JOIN tbl_people on tbl_role.rol_id=tbl_people.peo_rol_id
			INNER JOIN tbl_date on tbl_people.peo_id=tbl_date.dat_peo_id
			 WHERE peo_id = ?';
		
		$stmt = $this->db->prepare( $sql );
		
		$result	= $stmt->execute( array( $peo_id ) );
		
		$presidentData	= array();
		
		if ( $result )
		{
			$presidentData = $stmt->fetch( PDO::FETCH_ASSOC );
			
			//var_dump($presidentData);//it is shows all the datas in an array;
			
			return $presidentData;
		}
		else 
		{
			echo 'an error has occured';
		}
			
	}

	/**
	 * @brief	Shows all Presidents
	 * 
	 * @return	array( $results );
	 */
	public function showAllPresidentsArray()
	{
		$sql = 'SELECT tbl_role.rol_name, peo_forename, peo_surname, 
				tbl_date.dat_start, tbl_date.dat_end FROM tbl_people JOIN tbl_role ON peo_rol_id = rol_id AND rol_name="President"
				JOIN tbl_date ON dat_peo_id = peo_id
				';

		try
		{
			$stmt = $this->db->prepare( $sql );
			
			$result = $stmt->execute();
			
			$allPresidentsArray = $stmt->fetchAll(PDO::FETCH_BOTH);
			
			return $allPresidentsArray;
		}
		catch (Exception $e)
		{
			return "Failed to show list of all Presidents";
			echo $e;
		}
		
	}
	
	/**
	 * @brief	function that shows all Vice-Presidents;
	 * 
	 * @return	$result;
	 */
	public function showAllVicePresidents()
	{ 
		try
		{
			$sql = 'SELECT tbl_role.rol_name, peo_forename, peo_surname, 
				tbl_date.dat_start, tbl_date.dat_end 
				FROM tbl_people JOIN tbl_role ON peo_rol_id = rol_id AND rol_name="Vice-President"
				JOIN tbl_date ON dat_peo_id = peo_id';
			
			$stmt = $this->db->prepare( $sql );
			
			$result = $stmt->execute();
			
			$allVicePresidentsArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
			return $allVicePresidentsArray;
			
		}
		catch ( Exception $e )
		{
			return "Failed to show list of all Vice-Presidents";
			echo $e;
		}
			
	}
	
	/**
	 * @brief	ShowPresidents with join extract to template;
	 * 
	 * @return unknown|string	adding peo_id for the purposes of EIDT
	 */
	public function showAllPresidents()
	{
		try 
		{
			$sql = 'SELECT tbl_role.rol_name, peo_id, peo_forename, peo_surname,
				tbl_date.dat_start, tbl_date.dat_end
				FROM tbl_people JOIN tbl_role ON peo_rol_id = rol_id AND rol_name="President"
				JOIN tbl_date ON dat_peo_id = peo_id';
			
			$stmt = $this->db->prepare( $sql );
			
			$presidentsList = $stmt->execute();
			
			$presidentsArray = $stmt->fetchAll( PDO::FETCH_ASSOC );
			
			return $presidentsArray;	
		}
		catch ( Exception $e )
		{
			return "Failed to show list of all Presidents";
			echo $e;
		}
		
	}
	
	/**
	 * @brief	create a query or other way of combining datas and showing them into
	 * 			tables!;
	 */
	public function allPresidentsAndVicePresidentsList()
	{	
		$vicePresidents = $this->showAllVicePresidents();
			
		$presidents		= $this->showAllPresidents();
		
		return $allPresidents = array( 'presidents' => $presidents, 'vice-presidents' => $vicePresidents );
		
	}
	
	public function showPresidentsJoin()
	{
		try 
		{	
			$sql = 'SELECT tbl_role.rol_name, tbl_people.peo_forename, tbl_people.peo_surname, tbl_date.dat_start, tbl_date.dat_end
			FROM tbl_role
			INNER JOIN tbl_people on tbl_role.rol_id=tbl_people.peo_rol_id
			INNER JOIN tbl_date on tbl_people.peo_id=tbl_date.dat_peo_id
			ORDER BY tbl_role.rol_name';
			
			$stmt = $this->db->query( $sql );

			return $stmt->fetchALL(PDO::FETCH_ASSOC );
			
		}
		catch ( Exception $e )
		{
			return "Something went wrong or Crap...";
			echo $e;
		}
		
	}
	
	/**
	 * @brief	Test Function to do...
	 */
	public function testTemplate()
	{
		$template = file_get_contents( __DIR__ . '/../View/show_top.html' );
		
		$dataTemplate = array(
				"0" => array( "Angel", "Ivanov"),
				"1" => array( "Dragan", "Petrov"),
				"2" => array( "Ivan", "Naumov" )
			);
		
		foreach ( $dataTemplate as $name )
			foreach ( $name as $cell )
			{
				
			}
		
	}
	
	/**
	 * @brief	renderForm to do...
	 */
	public function renderForm()
	{die('renderFormInModel');
		$form = file_get_contents( __DIR__ . '/../View/CreateUser.html');
		
		print ( $form );
	}
	
	public function sqlQueries()//not working!!!
	{
		try
		{
			$sql = 'SELECT * FROM tbl_people, tbl_role WHERE peo_rol_id AND rol_name="President"
					ORDER by peo_forename, peo_surname ASC';
				
	
			//shows all records!
			$sql1 = 'SELECT tbl_role.rol_id, tbl_role.rol_name, tbl_people.peo_forename, tbl_people.peo_surname
					FROM tbl_role
					INNER JOIN tbl_people
					on tbl_role.rol_id=tbl_people.peo_rol_id';
	
			//shows all tables and plenty of other data;
			$sql2 = 'SELECT tbl_role.rol_name, tbl_people.peo_forename, tbl_people.peo_surname, tbl_date.dat_start, tbl_date.dat_end
			FROM tbl_role
			INNER JOIN tbl_people on tbl_role.rol_id=tbl_people.peo_rol_id
			inner JOIN tbl_date on tbl_people.peo_id=tbl_date.dat_peo_id
			ORDER BY tbl_role.rol_name';
				
			//shows all presidents!
			$sql3 = 'SELECT tbl_role.rol_name, peo_forename, peo_surname, tbl_date.dat_start, tbl_date.dat_end FROM tbl_people JOIN tbl_role ON peo_rol_id = rol_id AND rol_name="President"
					JOIN tbl_date ON dat_peo_id = peo_id';
			
			
			$sql4 = 'SELECT tbl_people.peo_id,tbl_role.rol_name, tbl_people.peo_forename, tbl_people.peo_surname, tbl_date.dat_start, tbl_date.dat_end
+			FROM tbl_role
+			INNER JOIN tbl_people on tbl_role.rol_id=tbl_people.peo_rol_id
+			INNER JOIN tbl_date on tbl_people.peo_id=tbl_date.dat_peo_id
+			 WHERE peo_id = 33';
	
		}
		catch ( Exception $e)
		{
			return "Something went wrong or Crap...";
			echo $e;
		}
	
	}
	
}