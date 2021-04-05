<?php

/**
 * Template Name: home Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$asset = get_site_url() . '/assets/img/';

get_header();

// $args = array(
// 		'numberposts'      => 4,
// 		'post_type'        => 'materiel',
// );

// $materiels = get_posts( $args );

// var_dump($materiels);
?>
<div class="container-fluid">
	<div class="row">
		<!-- LEFT SIDE - MAIN ARTICLE -->
		<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 bg-Black left-side">
			<div class="container main-article">
				<div class="row">
					<div class="col-12 d-flex justify-content-center gradient">
						<img id="main-img" src=" <?php echo $asset ?>main.png" alt="main-img">
					</div>
				</div>
				<div class="row title-article">
					<div class="col-12 p-5">
						<h3>Les gens</h3>
						<h1>Ce pote avec des idées de business foireuses</h1>
						<p>C’est peut-être vous, d’ailleurs.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- RIGHT SIDE - ARTICLES -->
		<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 bg-White mt-5 mb-5 artMob">
			<div class="container artMob2">
				<div class="row p-3">
					<div class="col-4">
						<img class="article-img" src="<?php echo $asset ?>img1.png" alt="img-article">
					</div>
					<div class="col-8">
						<h3>les gens</h3>
						<h2>Ces bobos des villes qui fantasment la cambrousse</h2>
						<p>« Nouvelle génération paysanne »</p>
					</div>
				</div>
				<div class="row p-3">
					<div class="col-4">
						<img class="article-img" src="<?php echo $asset ?>img2.png" alt="img-article">
					</div>
					<div class="col-8">
						<h3>Actu / Médias</h3>
						<h2>Ces gens qui pensent avoir une « communauté »</h2>
						<p>Appelez les hendeks, s’il vous plaît.</p>
					</div>
				</div>
				<div class="row p-3">
					<div class="col-4">
						<img class="article-img" src="<?php echo $asset ?>img3.png" alt="img-article">
					</div>
					<div class="col-8">
						<h3>Les gens</h3>
						<h2>Couple: est-ce ok de péter devant sa femme ?</h2>
						<p>« Plaisir non partagé n’est plaisir qu’à moitié. »</p>
					</div>
				</div>
				<div class="row p-3">
					<div class="col-4">
						<img class="article-img" src="<?php echo $asset ?>img4.png" alt="img-article">
					</div>
					<div class="col-8">
						<h3>Actu / Médias</h3>
						<h2>Ces gens qui critiquent Facebook… sur Facebook.</h2>
						<p>On se calme, les lanceurs d’alerte.</p>
					</div>
				</div>
				<div class="row p-3">
					<div class="col-4">
						<img class="article-img" src="<?php echo $asset ?>img5.png" alt="img-article">
					</div>
					<div class="col-8">
						<h3>Actu / Médias</h3>
						<h2>Dégueulasses : ces B.D adaptées au cinéma</h2>
						<p>Les gars ne respectent plus rien.</p>
					</div>
				</div>
				<div class="row p-3">
					<div class="col-4">
						<img class="article-img" src="<?php echo $asset ?>img7.png" alt="img-article">
					</div>
					<div class="col-8">
						<h3>Les gens</h3>
						<h2>Ce pote du taf qui fait du bien</h2>
						<p>Heureusement qu’il est là, celui-là.</p>
					</div>
				</div>
				<div class="row p-3">
					<div class="col-4">
						<img class="article-img" src="<?php echo $asset ?>img6.png" alt="img-article">
					</div>
					<div class="col-8">
						<h3>Les gens</h3>
						<h2>Enfin : un sweat pour les canards de la St. Valentin</h2>
						<p>Soumis, mais lucide.</p>
					</div>
				</div>
				<div class="row p-3">
					<div class="col-4">
						<img class="article-img" src="<?php echo $asset ?>img8.png" alt="img-article">
					</div>
					<div class="col-8">
						<h3>Les gens</h3>
						<h2>Délicat : peut-on serrer l’ex d’un pote ?</h2>
						<p>On avait dit pas les ex. </p>
					</div>
				</div>
				<div class="row p-3">
					<div class="col-4">
						<img class="article-img" src="<?php echo $asset ?>img9.png" alt="img-article">
					</div>
					<div class="col-8">
						<h3>Les gens</h3>
						<h2>Santé : pourquoi les gens qui mangent bio sont-ils cheums ?</h2>
						<p>Heureusement qu’il est là, celui-là.</p>
					</div>
				</div>
				<!-- NEWSLETTER SECTION -->
				<div class="row bg-GreenBlue newsletter p-0">
					<div class="container">
						<div class="row p-5">
							<div class="col-12 d-flex justify-content-center">
								<h2>Inscris-toi à la newsletter</h2>
							</div>
							<div class="col-12 d-flex justify-content-center mt-3 mb-3">
								<div class="button2">Balance ton mail</div>
							</div>
							<div class="col-12">
								<hr>
							</div>
							<div class="col-12 d-flex justify-content-center">
								<p>PS : Rejoins-nous vite sur insta, on s’y marre bien !</p>
							</div>
							<div class="col-12 d-flex justify-content-center">
								<p> <i class="fab fa-instagram"></i> <i class="fab fa-facebook-f"></i></p>
							</div>
						</div>
					</div>
				</div>
				<!-- FOLLOWING ARTICLES -->
				<div class="row p-3 mt-5 following">
					<div class="col-4 mt-5">
						<img class="article-img" src="<?php echo $asset ?>img10.png" alt="img-article">
					</div>
					<div class="col-8 mt-5">
						<h3>Les gens</h3>
						<h2>Crowdfunding: la mendicité 2.0 ?</h2>
						<p>Tu te fous de ma gueule avec ton projet ?</p>
					</div>
				</div>
				<div class="row p-3">
					<div class="col-4">
						<img class="article-img" src="<?php echo $asset ?>img1.png" alt="img-article">
					</div>
					<div class="col-8">
						<h3>les gens</h3>
						<h2>Ces bobos des villes qui fantasment la cambrousse</h2>
						<p>« Nouvelle génération paysanne »</p>
					</div>
				</div>
				<div class="row p-3">
					<div class="col-4">
						<img class="article-img" src="<?php echo $asset ?>img2.png" alt="img-article">
					</div>
					<div class="col-8">
						<h3>Actu / Médias</h3>
						<h2>Ces gens qui pensent avoir une « communauté »</h2>
						<p>Appelez les hendeks, s’il vous plaît.</p>
					</div>
				</div>
				<div class="row p-3">
					<div class="col-4">
						<img class="article-img" src="<?php echo $asset ?>img3.png" alt="img-article">
					</div>
					<div class="col-8">
						<h3>Les gens</h3>
						<h2>Couple: est-ce ok de péter devant sa femme ?</h2>
						<p>« Plaisir non partagé n’est plaisir qu’à moitié. »</p>
					</div>
				</div>
				<div class="row p-3">
					<div class="col-4">
						<img class="article-img" src="<?php echo $asset ?>img4.png" alt="img-article">
					</div>
					<div class="col-8">
						<h3>Actu / Médias</h3>
						<h2>Ces gens qui critiquent Facebook… sur Facebook.</h2>
						<p>On se calme, les lanceurs d’alerte.</p>
					</div>
				</div>
				<div class="row p-3">
					<div class="col-4">
						<img class="article-img" src="<?php echo $asset ?>img5.png" alt="img-article">
					</div>
					<div class="col-8">
						<h3>Actu / Médias</h3>
						<h2>Dégueulasses : ces B.D adaptées au cinéma</h2>
						<p>Les gars ne respectent plus rien.</p>
					</div>
				</div>
				<div class="row p-3">
					<div class="col-4">
						<img class="article-img" src="<?php echo $asset ?>img7.png" alt="img-article">
					</div>
					<div class="col-8">
						<h3>Les gens</h3>
						<h2>Ce pote du taf qui fait du bien</h2>
						<p>Heureusement qu’il est là, celui-là.</p>
					</div>
				</div>
				<div class="row p-3">
					<div class="col-4">
						<img class="article-img" src="<?php echo $asset ?>img6.png" alt="img-article">
					</div>
					<div class="col-8">
						<h3>Les gens</h3>
						<h2>Enfin : un sweat pour les canards de la St. Valentin</h2>
						<p>Soumis, mais lucide.</p>
					</div>
				</div>
				<div class="row p-3">
					<div class="col-4">
						<img iclass="article-img" src="<?php echo $asset ?>img8.png" alt="img-article">
					</div>
					<div class="col-8">
						<h3>Les gens</h3>
						<h2>Délicat : peut-on serrer l’ex d’un pote ?</h2>
						<p>On avait dit pas les ex. </p>
					</div>
				</div>
				<div class="row p-3">
					<div class="col-4">
						<img class="article-img" src="<?php echo $asset ?>img9.png" alt="img-article">
					</div>
					<div class="col-8">
						<h3>Les gens</h3>
						<h2>Santé : pourquoi les gens qui mangent bio sont-ils cheums ?</h2>
						<p>Heureusement qu’il est là, celui-là.</p>
					</div>
				</div>
				<div class="row">
					<div class="container">
						<div class="col-12 d-flex justify-content-center mt-5">
							<h2>JOOKS.</h2>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>


<?php
get_footer();
