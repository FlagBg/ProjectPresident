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
				<!-- 				
				<a id=" " href="#"><img id="logo" alt="any Logo" title="Vice-PresidentsUSA" src="#" width=71 height=38></a>
				<a id="logo-link" href="#"><img id="logo" alt="PresidentsUSA.net Logo" title="Vice-PresidentsUSA.net" src="#" width="204" height="18" /></a>
				 -->
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

			<div class="row padded-both"></div>
		
		<div class="row padded-bottom">
			<div class="col-xs-12">
				<table class="table">
				
					<tr>
						<th>President</th>
						<th>Vice President</th>
					</tr>
					<?php
						
						for( $i = 0; $i < count($presidents); $i++ )
						{
					?>
					<tr>
						<td><?php echo $presidents[$i]['peo_forename'], $presidents[$i]['peo_surname'], $presidents[$i]['dat_start'],$presidents[$i]['dat_end']?></td>
						<td><?php echo $presidents[$i]['peo_forename'], $presidents[$i]['peo_surname'], $presidents[$i]['dat_start'],$presidents[$i]['dat_end']?></td>
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
	</section>
	
	<section>
	 <nav>
		<div class="row">
			<ul class="main-nav js--main-nav">
				<li><a href="#features">Add President</a></li>
				<li><a href="#works">List Presidents</a></li>
				<li><a href="#cities">List Vice-Presidents</a></li>
				<li><a href="#plans">Links between</a></li>
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
	
	
	
	