<?php 

?>

<!DOCTYPE html>


<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=1024; charset=ISO-8859-1">
		
		<title>US Presidents list</title>
	</head>

	<body id="president-list-page">

	<header>
		<div id="top-header"></div>
		<div id="header">
			<div class="container">
				<!-- 				
				<a id=" " href="http://www.presidentsusa.net"><img id="logo" alt="PresidentsUSA.net Logo" title="PresidentsUSA.net" src="img/presidentsusa.jpg" width=71 height=38></a>
				<a id="logo-link" href="http://www.presidentsusa.net"><img id="logo" alt="PresidentsUSA.net Logo" title="PresidentsUSA.net" src="img/logo.png" width="204" height="18" /></a>
				 -->
			</div>
		</div>
	</header>

		<div class="container">
			<div id="pres-vp-header" class="row interior-header">
				<div class="col-xs-12">
					<h1>Presidents &amp; Vice Presidents</h1>
				</div>
			</div>

			<div class="row padded-both"></div>
		
		<div class="row padded-bottom">
			<div class="col-xs-12">
				<table class="table">
				
					<tr>
						<th>President</th>
						<th>Vice President</th>
					</tr>
					<?php 
						for($i = 0; $i < count($this->templateData); $i++ )
						{
					?>
					<tr>
						<td>1.<?php echo $this->templateData[$i]['peo_forename'], $this->templateData[$i]['peo_surname'], $this->templateData[$i]['dat_start'],$this->templateData[$i]['dat_end']?></td>
						<td><?php echo $this->templateData[$i]['peo_forename'], $this->templateData[$i]['peo_surname'], $this->templateData[$i]['dat_start'],$this->templateData[$i]['dat_end']?></td>
					</tr>
					<?php
						}
					?>
					<!-- <tr>
						<td>1.<?php //echo $stmt[0]['peo_forename'], $stmt[0]['peo_surname'], $stmt[0]['dat_start'],$stmt[0]['dat_end']?></td>
						<td><?php //echo $stmt[0]['peo_forename'], $stmt[0]['peo_surname'], $stmt[0]['dat_start'],$stmt[0]['dat_end']?></td>
					</tr>
					<tr>
						<td>2. <a href="#">John Adams (1797-1801)</a></td>
						<td><a href="#">Thomas Jefferson (1797-1801)</a></td>
					</tr>
					<tr>
						<td>3. <a href="jefferson.html">Thomas Jefferson (1801-1809)</a></td>
						<td><a href="jefferson.html">Aaron Burr (1801-1805)</a><br />
						<a href="jefferson.html">George Clinton (1805-1809)</a></td>
					</tr>
					<tr>
						<td>4. <a href="madison.html">James Madison (1809-1817)</a></td>
						<td>
							<a href="madison.html">George Clinton (1809-1812)</a><br />
							<a href="novicepresident.html">None (1812-1813)</a><br />
							<a href="madison.html">Elbridge Gerry (1813-1814)</a><br />
							<a href="novicepresident.html">None (1814-1817)</a>
						</td>
					</tr> -->
				</table>
				
			</div>
		</div>
	</div>


	<footer>
		<div id="footer">
			<div class="container">
				<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p>The purpose of this site is to provide list to the US Presidents.</p>
						</div>
					</div>
				</div>
		</div>
	</footer>
	
	</body>
</html>
