<?php 

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=1024; charset=ISO-8859-1">
		
		<title>US Presidents list</title>
	</head>

	<body id="vice-president-list-page">

	<header>
		<div id="top-header"></div>
		<div id="header">
			<a id=" " href="index.php?controller=Presidents">Presidents</a>
			<a id=" " href="index.php?controller=VicePresidents">Vice-Presidents</a>
		</div>
	</header>
	
	<section class="section-table">
	<div class="container">
		<div>
		<h3>Table that We work for Edit</h3>	
			<table class="New Table" border="1" class="table2">
			<tr>
				<th>Title</th>
				<th>Firstname</th>
				<th>Surname</th>
				<th>Mandate starts</th>
				<th>Mandate ends</th>
				<th>Actions</th>
			</tr>
				<?php 
				for ( $i = 0; $i<count($presidents); $i++ )
				{
					?>
				<tr>
					<td><?php echo $presidents[$i]['rol_name'];?></td>
					<td><?php echo $presidents[$i]['peo_forename'];?></td>
					<td><?php echo $presidents[$i]['peo_surname'];?></td>
					<td><?php echo $presidents[$i]['dat_start'];?></td>
					<td><?php echo $presidents[$i]['dat_end']; ?></td>
					<td>
					<!--	<a href = "index.php?id=<?php //echo $presidents[$i]['peo_id']; ?>" >Edit</a> -->
						<a href = "" class="edit" value="<?= $presidents[$i]['peo_id']; ?>" >Edit</a>	
					</td>
				</tr>
				<?php
 						} 
					?>
			</table>
		</div>		
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
							<script type="text/javascript">
								$(document).ready(function()
										{
											$('.edit').click(function(event){
													event.preventDefault();
													var value = $(this).attr('value');
													location.href="index.php?id="+value
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
			</div>
		</nav>	
	</section>
	
	<footer>
		<div class="row">
			<p>
				Build with <i class="ion-ios-heart" style="color: #ea0000; padding: 0 3px;"></i> in the beautiful city of Plovdiv, July 2016.
			</p>
		</div>
	</footer>
	</body>
</html>