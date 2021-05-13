<?php
include "controller/produitC.php";
$produitC=new produitC();
$listeproduit=$produitC->afficherproduit();


?>




<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>Products Comparison Table | CodyHouse</title>
</head>
<body>
	<section class="cd-intro">
		<h1>Products Comparison Table</h1>
	</section> <!-- .cd-intro -->

	<section class="cd-products-comparison-table">
		<header>
			<h2>Compare Models</h2>

			<div class="actions">
				<a href="#0" class="reset">Reset</a>
				<a href="#0" class="filter">Filter</a>
			</div>
		</header>


        <?php
				  foreach($listeproduit as $row){
				  ?>
		    
			 
		<div class="cd-products-table">
			<div class="features">
				<div class="top-info">Models</div>
				<ul class="cd-features-list">
					<li>Prix</li>
					<li>Nom du produit</li>
					<li>Catégorie</li>
					<!--
					<li>Screen Type</li>
					<li>Display Size</li>
					<li>Refresh Rate</li>
					<li>Model Year</li>
					<li>Tuner Technology</li>
					<li>Ethernet Input</li>
					<li>USB Input</li>
					<li>Scart Input</li>
					-->
				</ul>
			</div> <!-- .features -->
			
			<div class="cd-products-wrapper">
				<ul class="cd-products-columns">
					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<!--<img src="img/product.png" alt="product image">-->
							<?PHP echo "<img  src='assets/images/".$row['image']."' >"; ?>
							<h3><?php echo $row['nom_produit'];?></h3>
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li><?php echo $row['prix'];?></li>				
							
							<li class="rate"><?php echo $row['categorie'];?></li>
							<!-- <span>5/5</span>-->
						</ul>
					</li> <!-- .product -->
                     
					
					<!-- .product -->

					 <!-- .product -->

					<!-- .product -->

					 <!-- .product -->

					 <!-- .product -->

					
                    
					<!-- .product -->
					
				</ul> <!-- .cd-products-columns -->
			</div> <!-- .cd-products-wrapper -->
			<?PHP
				      }
		  	         ?>
    <br>
			<ul class="cd-table-navigation">
				<li><a href="#0" class="prev inactive">Prev</a></li>
				<li><a href="#0" class="next">Next</a></li>
			</ul>
		</div> <!-- .cd-products-table -->
	</section> <!-- .cd-products-comparison-table -->
<script src="js/jquery-2.1.4.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>