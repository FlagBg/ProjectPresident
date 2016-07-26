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
	
	<section class="section-table">
	<div class="container">
		<div id="pres-vp-header" class="row interior-header">
			<div class="col-xs-12">
				<h1>Presidents &amp; Vice Presidents</h1>
			</div>
		</div>		
		<div class="four-padded-bottom">
			<div class="col-xs-12">
			<div class = "table One">
				<table border="1" class="table-first">
					<tr>
						<th>Presidents</th>
						<th>Vice President</th>
					</tr>
				<tr>
					<td>
					<?php 
					for( $i=0; $i<count( $dataArray['presidents'][$i]); $i++ )
					{
					echo $dataArray['presidents'][$i]['peo_forename'] . " " .
						$dataArray['presidents'][$i]['peo_surname'] . " " .
						$dataArray['presidents'][$i]['dat_start'] . " " .
						$dataArray['presidents'][$i]['dat_end'] . "<br>";
					}
					/* foreach ( $dataArray['presidents'] as $key => $value) 
						{
							foreach ( $value as $key2 => $value2 )
							{
								echo $value2 . "<br>";
							}
						} */
					?>
					</td>	
					<td>
					<?php
					foreach ( $dataArray['vice-presidents'] as $key => $row) 
					{
					foreach ( $row as $key2 => $val )
					{
						echo $val ." ";
					}
					echo "<br>";
					}					
					/* for( $k=0; $k<count( $dataArray['vice-presidents'][$k] ); $k++ )
						{
							echo $dataArray['vice-presidents'][$k]['peo_forename'] . " " .
							$dataArray['vice-presidents'][$k]['peo_surname'] . " " .
							$dataArray['vice-presidents'][$k]['dat_start'] . " " .
							$dataArray['vice-presidents'][$k]['dat_end'] . "<br>";
						}	 */
					?>
					</td>
				</tr>
				</table>	
			</div>
			
			
		<h2>This one is row by row table</h2>	
		<table class = "row by row table" border="1">
			<tr>
				<th>Title</th>
				<th>Firstname</th>
				<th>Surname</th>
				<th>Mandate starts</th>
				<th>Mandate ends</th>
				<th>Actions</th>
			</tr>
			<?php
			for ( $i = 0; $i<count( $dataArray['presidents'] ); $i++ )
				{
			?>
			<tr>
				<td><?php echo $dataArray['presidents'][$i]['rol_name'];?></td>
				<td><?php echo $dataArray['presidents'][$i]['peo_forename'];?></td>
				<td><?php echo $dataArray['presidents'][$i]['peo_surname'];?></td>
				<td><?php echo $dataArray['presidents'][$i]['dat_start'];?></td>
				<td><?php echo $dataArray['presidents'][$i]['dat_end']; ?></td>
				<td>
			<!--  <a href = "index.php?id=<?php echo $dataArray['presidents'][$i]['peo_id']; ?>" >Edit</a> --> 
			<a href = " " class="editPresidents" value="<?= $dataArray['presidents'][$i]['peo_id']; ?>" >Edit</a>
				</td>
			</tr>
			<?php 
				}
			?>
		</table>	
		
		
		<h2>This one is row by row table Two</h2>	
		<table class = "row_by_row_table_vice_presidents" border="1">
			<tr>
				<th>Title</th>
				<th>Firstname</th>
				<th>Surname</th>
				<th>Mandate starts</th>
				<th>Mandate ends</th>
				<th>Actions</th>
			</tr>
			<?php
			for ( $k = 0; $k<count( $dataArray['vice-presidents'] ); $k++ )
				{
			?>
			<tr>
				<td><?php echo $dataArray['vice-presidents'][$k]['rol_name'];?></td>
				<td><?php echo $dataArray['vice-presidents'][$k]['peo_forename'];?></td>
				<td><?php echo $dataArray['vice-presidents'][$k]['peo_surname'];?></td>
				<td><?php echo $dataArray['vice-presidents'][$k]['dat_start'];?></td>
				<td><?php echo $dataArray['vice-presidents'][$k]['dat_end']; ?></td>
				<td>
			<!--  <a href = "index.php?id=<?php echo $dataArray['vice-presidents'][$k]['peo_id']; ?>" >Edit</a> --> 
			<a href = " " class="editPresidents" value="<?= $dataArray['presidents'][$k]['peo_id']; ?>" >Edit</a>
				</td>
			</tr>
			<?php 
				}
			?>
		</table>	
			
			
			
			
			
			
		<p>Another Table</p>
		<div class ="Another table">	
			<table class="table One" border="1">
			<tr>
				<th>Title</th>
				<th>Firstname</th>
				<th>Surname</th>
				<th>Mandate starts</th>
				<th>Mandate ends</th>
				<th>Actions</th>
				<th>Title</th>
				<th>Firstname</th>
				<th>Surname</th>
				<th>Mandate starts</th>
				<th>Mandate ends</th>
				<th>Actions</th>
			</tr>
				<?php 
						
				for ( $k = 0; $k<count( $dataArray['vice-presidents'] ); $k++ )
					{
						
				for ( $i = 0; $i<count( $dataArray['presidents'] ); $i++ )
				{
					?>
				<tr>
					<td><?php echo $dataArray['presidents'][$i]['rol_name'];?></td>
					<td><?php echo $dataArray['presidents'][$i]['peo_forename'];?></td>
					<td><?php echo $dataArray['presidents'][$i]['peo_surname'];?></td>
					<td><?php echo $dataArray['presidents'][$i]['dat_start'];?></td>
					<td><?php echo $dataArray['presidents'][$i]['dat_end']; ?></td>
					<td>
					<!--  <a href = "index.php?id=<?php echo $dataArray['presidents'][$i]['peo_id']; ?>" >Edit</a> --> 
					<a href = " " class="editPresidents" value="<?= $dataArray['presidents'][$i]['peo_id']; ?>" >Edit</a>
					</td>
				<?php 
					}
					?>
					<td><?php echo $dataArray['vice-presidents'][$k]['rol_name'];?></td>
					<td><?php echo $dataArray['vice-presidents'][$k]['peo_forename'];?></td>
					<td><?php echo $dataArray['vice-presidents'][$k]['peo_surname'];?></td>
					<td><?php echo $dataArray['vice-presidents'][$k]['dat_start'];?></td>
					<td><?php echo $dataArray['vice-presidents'][$k]['dat_end']; ?></td>
					<td>
					<!--  <a href = "index.php?id=<?php echo $dataArray['vice-presidents'][$k]['peo_id']; ?>" >Edit</a> -->
						<a href = " " class="editVicePresidents" value="<?= $dataArray['vice-presidents'][$k]['peo_id']; ?>" >Edit</a>	
					</td>
				
				<?php 
					}
					/* foreach ( $dataArray['presidents'] as $key => $value)
					 {
					 foreach ( $value as $key2 => $value2 )
					 {
					 echo $value2 . "<br>";
					 }
					 } */	
					
				?>
					
				</tr>
		</table>
	</div>		
	
	</div>
	</div>
	</div>
	</section>
	
	<section>
	<nav class="nav">
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
	
	<footer class="footer">
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