<?php 

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=1024; charset=ISO-8859-1">
		
		<title>US Vice Presidents list</title>
	</head>
	
	<body id="vice-president-list-page">

	<header>
		<div id="top-header"></div>
		<div id="header">
			<div class="container">
				<div class="container"> 				
					<a id=" " href="index.php?controller=Presidents">Presidents</a>
					<a id=" " href="index.php?controller=VicePresidents">Vice-Presidents</a>
				</div>
			</div>
		</div>
	</header>
	
	<section class="section-table-vice-presidents">
	<div class="container">	
		<div class="col-xs-12">
			<h3>Vice-President's List</h3>
			<table class="table" border="1">
				<tr>
					<th>Title</th>
					<th>Firstname</th>
					<th>Surname</th>
					<th>Mandate starts</th>
					<th>Mandate ends</th>
					<th>Actions</th>
				</tr>
					<?php
						for( $i = 0; $i < count( $vicePresidents ); $i++ ):
						//var_dump($vicePresidents[$i]['peo_id']) . print ("The peo_id:");
					?>	
					<tr>
						<td><?php echo $vicePresidents[$i]['rol_name']; ?></td>
						<td><?php echo $vicePresidents[$i]['peo_forename']; ?></td>
						<td><?php echo $vicePresidents[$i]['peo_surname']; ?></td>
						<td><?php echo $vicePresidents[$i]['dat_start']; ?></td>
						<td><?php echo $vicePresidents[$i]['dat_end']; ?></td>
						<td>
							<a href = " " class="editV" value="<?php echo $vicePresidents[$i]['peo_id']; ?>" >Edit</a>
						</td>
					</tr>
					<?php 
						endfor;
					?>
			</table>
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
							<script type="text/javascript">
								$(document).ready(function()
										{
											$('.editV').click(function(event){
													event.preventDefault();
													var value = $(this).attr('value');
													location.href="index.php?controller=EditPresidents&id="+value
												});
										});
							</script>
			
	</section>
	
	<section>
	 <nav>
		<div class="row">
			<ul class="main-nav js--main-nav">
				<li><a href="index.php">Add President</a></li>
				<li><a href="index.php?controller=Presidents">List Presidents</a></li>
				<li><a href="index.php?controller=VicePresidents">List Vice-Presidents</a></li>
				<li><a href="index.php?controller=PresidentsVicePresidents">Links between</a></li>
			</ul>
			<a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
		</div>
	</nav>
	
	</section>
	<footer>
		<div class="row">
			
		</div>
		<div class="row">
			<p>
				This webpage Is Just Learning No copyrights here.<br>
				This webpage is for you! So go and do whatever you want with it and have fun.
			</p>
			<p>
				Build with <i class="ion-ios-heart" style="color: #ea0000; padding: 0 3px;"></i> in the beautiful city of Plovdiv, July 2016.
			</p>
				<!-- echo $vicePresidents[$i]['peo_forename'] . " ", 
										$vicePresidents[$i]['peo_surname'] . ":", 
										" Mandate Starts " . $vicePresidents[$i]['dat_start'] . " ",
										"mandate end " . $vicePresidents[$i]['dat_end'] . " " -->
		</div>
	</footer>
</body>

</html>
	
	
	
	