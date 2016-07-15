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


	public function createPresident( $presidentData )
	{
		//print_r($presidentData);
		//echo "<br /><br />";
		
		$sql0 = 'SELECT * FROM tbl_role WHERE rol_name=? LIMIT 1';
		
		$roleArray = array($presidentData['person_role']);
		//print_r( $returnedArray );
		//echo "<br /><br/>";
		try 
		{
			$stmt = $this->db->prepare($sql0);
			$result = $stmt->execute($roleArray);
			
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
			
			$sql1 = 'INSERT INTO `tbl_date`( `dat_start`, `dat_end`, `dat_peo_id`) VALUES ( DATE_FORMAT(?, "%Y-%m-%d"),DATE_FORMAT(?, "%Y-%m-%d"),? )';
			
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

	
	public function showAllPresidents()
	{
		$sql = 'SELECT * FROM tbl_people, tbl_role, tbl_date 
				WHERE peo_rol_id=rol_id AND rol_name="President" 
				AND peo_id=dat_peo_id 
				ORDER BY dat_start, dat_end, peo_forename, peo_surname ASC';
	
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
	
	public function showAllVicePresidents()
	{ 
		
		try
		{
			$sql = 'SELECT * FROM tbl_people, tbl_role, tbl_date WHERE peo_rol_id AND rol_name="Vice-President"
				AND peo_id=dat_peo_id ORDER BY dat_start, dat_end, peo_forename, peo_surname ASC';
			
			$stmt = $this->db->prepare( $sql );
			
			$result = $stmt->execute();
			
			$allVicePresidentsArray = $stmt->fetchAll(PDO::FETCH_BOTH);
			
			return $allVicePresidentsArray;
			
			
		}
		catch ( Exception $e )
		{
			return "Failed to show list of all Vice-Presidents";
			echo $e;
		}
		
		
		
	}
	
	public function sqlQueries()//not working!!!
	{
		try
		{
			$sql = 'SELECT * FROM tbl_people, tbl_role WHERE peo_rol_id AND rol_name="President" 
					ORDER by peo_forename, peo_surname ASC';
			
			$sql1 = 'SELECT tbl_role.rol_id, tbl_role.rol_name, tbl_people.peo_forename, tbl_people.peo_surname 
					FROM tbl_role 
					INNER JOIN tbl_people 
					on tbl_role.rol_id=tbl_people.peo_rol_id';
			
			$sql2 = 'SELECT tbl_role.rol_name, tbl_people.peo_forename, tbl_people.peo_surname, tbl_date.dat_start, tbl_date.dat_end
     FROM tbl_role 
     	INNER JOIN tbl_people on tbl_role.rol_id=tbl_people.peo_rol_id
        inner JOIN tbl_date on tbl_people.peo_id=tbl_date.dat_peo_id
     ORDER BY tbl_role.rol_name';
		}
		catch ( Exception $e)
		{
			return "Something went wrong or Crap...";
			echo $e;
		}
		
	}
	
	public function showPresidentsJoin()
	{
		try 
		{	
			$sql = 'SELECT tbl_role.rol_name, tbl_people.peo_forename, tbl_people.peo_surname, tbl_date.dat_start, tbl_date.dat_end
			FROM tbl_role
			INNER JOIN tbl_people on tbl_role.rol_id=tbl_people.peo_rol_id
			inner JOIN tbl_date on tbl_people.peo_id=tbl_date.dat_peo_id
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
	
	public function renderForm()
	{
		$form = file_get_contents( __DIR__ . '/../View/CreateUser.html');
		
		print ( $form );
	}
	
}