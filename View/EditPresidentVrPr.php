<?php 

?>
<!DOCTYPE html>

<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		
		<title>Edit Presidents Template</title>
		
		<style type="text/css">
					.redirectButton
					{
						background:grey;
						width:100px;
						height:30px;
						text-align:center;
						padding-top:5px;
					}
					
					.redirectButton a
					{
						color:blue;
						text-decoration:none;
					}
		</style>
	</head>
	
	<body>
	
	<script type="text/javascript">
		function validate(){
			select = document.getElementById( 'person_role' );

			if( select.value == '0' )
			{
				alert( 'You need to assign a role, Sir. ');
				return false;
			}
			return true;
		}
	</script>
	
	<section class = "Adding Presidents">
		<h3>Editing President</h3>
		
			<form action="?controller=EditPresidents" method="POST" >
				<input type="hidden" name="id" value="<?php echo $this->presidentData['peo_id'];?>" />
			
				<div id="form_container"> 
					
					<div class="forename">
						<div id="forename_container">
							<div id="forename_label_container"><label for="person_first_name" id="person_first_name">Person's First Name:</label></div>
							<input type="text" name="person_first_name" value="<?php echo $this->presidentData['peo_forename'];?>">						
						</div>
					</div>
					
					<div class="lastname">
						<div id="lastname_container">
							<div id="lastname_label_container"><label for="person_last_name" id="person_last_name_label">Person's Surname</label></div>
							<input type="text" name="person_last_name" id="person_last_name" value="<?php echo $this->presidentData['peo_surname']; ?>" />
						</div>
					</div>
					
					<div class ="start_date">
						<div id="start_date_container">
							<div id="start_date_label_container"><label for="start_date" id="start_date_label"> Start mandate</label></div>
							<div id="start_date_input_container"><input type="date" name="start_date" id="start_date"
							value="<?php echo $this->presidentData['dat_start']; ?>" /></div>
						</div>
					</div>
					
					<div class="end_date">
						<div id="end_date_container">
							<div id="end_date_label_container"><label for="end_date" id="end_date_label"> End mandate</label></div>
							<div id="end_date_input_container"><input type="date" name="end_date" id="end_date"
							value="<?php echo $this->presidentData['dat_end']; ?>" /></div>
						</div>
					</div>
					
<!--  				<div id="dob_date_container">
						<div id="dob_date_label_container"><label for="dob_date" id="dob_date_label">Birth date</label></div>
						<div id="dob_date_input_container"><input type="date" name="dob_date" id="dob_date" /></div>
					</div>   -->	
					
					<div class="roles">
						<div id="role_container">
							<div id="role_label_container"><label for="person_role">The Person is:<?php echo $this->presidentData['rol_name'];?></label></div>
							<div id="role_select_container">
								<select name="person_role" id="person_role">
									<option value="0" >Needs to be</option>
									<option value="President" >President</option>
									<option value="Vice-President" >Vice President</option>
								</select>
							</div>
						</div>
					</div>
					<div class="submit_container">
						<input type="submit" name="submit" value="Edit" onClick="return validate(); return false;" />
					</div>	
					<div>
						<a href="index.php?controller=Presidents">
						<input type="button" id="redirection" value="Presidents" />
						</a> 
						<a href="index.php?controller=VicePresidents">
						<input type="button" id="redirection" value="VicePresidents" /></a>
					</div>	
					<div class="redirectButton">
						<a href="index.php?controller=PresidentsVicePresidents">All Presidents</a>
					</div>
					
						
					
					
				</div> <!-- form container div --> 
				
			</form> <!-- close the form -->
		</section>
	</body>
	
</html>