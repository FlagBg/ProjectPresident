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
			<div class="container">
				<!-- 				
				<a id=" " href="#"><img id="logo" alt="any Logo" title="Vice-PresidentsUSA" src="#" width=71 height=38></a>
				<a id="logo-link" href="#"><img id="logo" alt="PresidentsUSA.net Logo" title="Vice-PresidentsUSA.net" src="#" width="204" height="18" /></a>
				 -->
			</div>
		</div>
		
	</header>
	
	<section class="section-table">
		<div class="container">
				
		<div class="row padded-bottom">
			<div class="col-xs-12">
				<table class="table-presidents" border ="1" class="table">
				
					<tr>
						<th>Presidents List</th>
					</tr>
					<?php
						
						for( $i = 0; $i < count( $presidents ); $i++ )
						{
					?>
					<tr>
						<td>
						<?php 
						echo $presidents[$i]['peo_forename'] . " ", 
							$presidents[$i]['peo_surname'] . ":", 
							" Mandate Starts " . $presidents[$i]['dat_start']. " ",
							"mandate end " . $presidents[$i]['dat_end'] . " "
						?>
							<button type="submit" class="buttonEdit" name="buttonEdit">Click me</button>
						</td>
					</tr>
					<?php
						}
					?>
				</table>
			</div>
			
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
						<td>
						<?php 
						
							echo $presidents[$i]['rol_name'];
						
						?>		
						</td>
						<td>
						<?php 
						
							echo $presidents[$i]['peo_forename'];
					
						?>		
						</td>
						<td>
						<?php 
						
						
							echo $presidents[$i]['peo_surname'];
						
						?>	
						</td>
						<td>
						<?php 
						
							echo $presidents[$i]['dat_start'];
						
						?>	
						</td>
						<td>
						<?php 
						
							echo $presidents[$i]['dat_end'];
						
						?>	
						</td>
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
				
			<div>
				<p>Another Table</p>
				<table class ="Another table" border="1">
				
				<tr>
					<th>Presidents List</th>
				</tr>	
				<tr>
					<td>
					<?php		
					for( $i = 0; $i < count( $presidents ); $i++ )
						{ 
							echo $presidents[$i]['peo_id']. " " . $presidents[$i]['peo_forename'] . " ", 
							$presidents[$i]['peo_surname'] . ":", 
							" Mandate Starts " . $presidents[$i]['dat_start']. " ",
							"mandate end " . $presidents[$i]['dat_end'] . "<br>";
						}
					?>
					</td>	
				</tr>		
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
				<a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
			</div>
		</nav>
		<div class="hero-text-box">
			<h1>Think.<br>Just Think.</h1>
			<a class="btn btn-full js--scroll-to-plans" href="#">I'm Slow</a>
			<a class="btn btn-ghost js--scroll-to-start" href="#">Show me more</a>
		</div>
	</section>
	
	<footer>
		<div class="row">
			<div class="col span-1-of-2">
				<ul class="footer-nav">
					<li><a href="#">About us</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Press</a></li>
					<li><a href="#">iOS App</a></li>
					<li><a href="#">Android App</a></li>
				</ul>
			</div>
				
		</div>
		<div class="row">
			<p>
				This webpage Is Just Learning No copyrights here.<br>
				This webpage is for you! So go and do whatever you want with it and have fun.
			</p>
			<p>
				Build with <i class="ion-ios-heart" style="color: #ea0000; padding: 0 3px;"></i> in the beautiful city of Plovdiv, July 2016.
			</p>
		</div>
	</footer>
	</body>
</html>