//Code Site Web - EtoileCraft.com - Officiel 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
	<meta charset="utf-8" />
	<title>EtoileCraft</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
	<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
<?php
mysql_connect("localhost", "Roch", "ne2N34awhGnL2PK7")
or die("Impossible de se connecter : " . mysql_error());
echo 'Connexion réussie';
mysql_select_db('Site');
$reponse = mysql_query('SELECT id, contenu, titre, date FROM news ORDER BY ID DESC LIMIT 0, 5');
$donnees = mysql_fetch_array($reponse);
$nb_news = mysql_num_rows($donnees);












?>
</head>
<body>
	<div id="wrapper">
		<!-- header -->
		<header class="header">
			<!-- shell -->
			<div class="shell">
				<h1 id="logo"><a href="http://etoilecraft.com">EtoileCraft</a></h1>
				<!-- navigation -->
				<nav id="navigation">
					<ul>
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">News</a></li>
						<li><a href="#">Resources</a></li>
						<li><a href="#">Divers</a></li>
						<li><a href="#">Contacts </a></li>
					</ul>
				</nav>
				<!-- navigation -->
			</div>
			<!-- end of shell -->
		</header>
		<!-- end of header -->
		<!-- shell -->
		<div class="shell">
			<!-- main -->
			<div class="main">
				<!-- slider-holder -->
				<section class="slider-section">
					<div class="cl">&nbsp;</div>
					<!-- slider -->
					<div class="slider-holder">
						<span class="slider-shadow"></span>
						<div class="flexslider">
							<ul class="slides">
								<li>
									<img src="css/images/slider-1.jpg" alt="" />
									<div class="slide-cnt">
										<h3>Du Staff</h3>
										<p>Performant</p>
									</div>
								</li>
								<li>
									<img src="css/images/slider-2.jpg" alt="" />
									<div class="slide-cnt">
										<h3>Des Redacteurs</h3>
										<p>Pres A Ecrire Les News</p>
									</div>
								</li>
								<li>
									<img src="css/images/slider-3.jpg" alt="" />
									<div class="slide-cnt">
										<h3>Welcome to EtoileCraft</h3>
									</div>
								</li>
							</ul>
						</div>
					</div>	
				<!-- end of slider -->
				</section>
				<!-- slider-holder -->
				<!-- cols -->
				<section class="cols">
					<div class="col">
						<h3 class="starter-ico"><a href="#">Forum</a></h3>
						<p>Nous avons crée un <a href="#" >Forum</a> Ou Vous Pouvez Discutez De Vos Problème , Partagez Vos Connaisances ,  ... </p>
					</div>
					<div class="col">
						<h3 class="awesome-ico"><a href="#">Responsive Disgn</a></h3>
						<p>Nous avons consuent ce site pour qu'il soit accesible sur tous les appareils .</p>
					</div>
					<div class="col">
						<h3 class="save-ico"><a href="#">Profiter</a></h3>
						<p>Mais Vous pouvez aussi juste profiter de la vie et ne notre site ;)</p>
					</div>

					<div class="cl">&nbsp;</div>
				</section>
				<!-- end of cols -->

				<!-- featured -->
				<section>
					<h3 class="alignleft">News</h3></ br>
					<a href="#" class="all-projects"><strong>+</strong></a>
					<div class="cl">&nbsp;</div>
                     <strong></strong>
					<div class="featured">
						<div class="entry">
							<a href="#"><em></em>
								<img src="css/images/entry-img1.png" alt="" />
								<span><p><h4><?php echo $donnees["titre"]?></h4></br> <?php echo $donnees["contenu"]?></p></span>
							</a>
							<strong></strong>
						</div>
						<div class="entry">
							<a href="#"><em></em>
								<img src="css/images/entry-img2.png" alt="" />
								<span><p><h4><?php echo $donnees["titre"]?></h4></br> <?php echo $donnees["contenu"]?></p></span>
							</a>
							<strong></strong>
						</div>
						<div class="entry">
							<a href="#"><em></em>
								<img src="css/images/entry-img3.png" alt="" />
								<span>Integer Aliquam,Quam </span>
							</a>
							<strong></strong>
						</div>
						<div class="entry">
							<a href="#"><em></em>
								<img src="css/images/entry-img4.png" alt="" />
								<span>Integer Aliquam,Quam </span>
							</a>
							<strong></strong>
						</div>
						<div class="entry">
							<a href="#"><em></em>
								<img src="css/images/entry-img5.png" alt="" />
								<span>Integer Aliquam,Quam </span>
							</a>
							<strong></strong>
						</div>
						<div class="cl">&nbsp;</div>
					</div>
				</section>
				<!-- end of featured -->
			</div>
			<!-- end of main -->
		</div>
		<!-- end of shell -->
		<div id="footer-push"></div>
	</div>	
	<!-- footer -->
	<div id="footer">
		<!-- shell -->
		<div class="shell">
			<div class="widgets">
				
				<div class="widget">
					<h4>CATEGORIES</h4>
					<ul>
						<li><a href="#">Art of Photography</a></li>
						<li><a href="#">Design Template</a></li>
						<li><a href="#">Website &amp; Development</a></li>
						<li><a href="#">How to Create a Great Layout</a></li>
						<li><a href="#">Beautiful Backgrounds</a></li>
						<li><a href="#">Customisation</a></li>
					</ul>
				</div>

				<div class="widget gallery-widget">
					<h4>GALLERY</h4>
					<ul>
						<li><a href="#"><img src="css/images/gallery-img.png" alt="" /></a></li>
						<li><a href="#"><img src="css/images/gallery-img2.png" alt="" /></a></li>
						<li><a href="#"><img src="css/images/gallery-img3.png" alt="" /></a></li>
						<li><a href="#"><img src="css/images/gallery-img4.png" alt="" /></a></li>
						<li><a href="#"><img src="css/images/gallery-img5.png" alt="" /></a></li>
						<li><a href="#"><img src="css/images/gallery-img6.png" alt="" /></a></li>
					</ul>
				</div>

				<div class="widget">
					<h4>Web Lab</h4>
					<ul>
						<li><a href="#">More About Us</a></li>
						<li><a href="#">Our Portfolio Company</a></li>
						<li><a href="#">Company Blog</a></li>
						<li><a href="#">Our Mission</a></li>
						<li><a href="#">Get in Touch with UsMore</a></li>
					</ul>
				</div>

				<div class="widget contact-widget">
					<h4>Contacts</h4>
					<p class="address-ico">
						Company Name Head Office<br />
						1234 City Name, <br />
						Country 7451
					</p>

					<p class="phone-ico">
						Phone: +11 2345 6778
						Fax: +11 2345 6789 
					</p>
					<a href="#" class="chat-btn"><span class="chat-ico"></span>Client Sheet</a>
				</div>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- end of widgets -->

			<!-- footer-bottom -->
			<div class="footer-bottom">
				<!-- footer-nav -->
				<div class="footer-nav">
					<ul>
						<li class="active"><a href="#">HOME</a></li>
						<li><a href="#">ABOUT</a></li>
						<li><a href="#">SERVICES</a></li>
						<li><a href="#">PORTFOLIO</a></li>
						<li><a href="#">CONTACTS</a> </li>
					</ul>
				</div>
				<!-- end of footer-nav -->
				<p class="copy">&copy; company name. Design by <a href="http://chocotemplates.com" target="_blank">Chocotemplates.com</a></p>
			</div>
			<!-- end of footer-bottom -->
		</div>
		<!-- end of shell -->
	</div>
	<!-- end of footer -->
</body>
</html>
