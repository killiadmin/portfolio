<?php

session_start();

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

?>

<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Portfolio - Killian Filâtre</title>
		<meta name="description" content="Portfolio - Killian Filâtre">
		<meta name="keywords" content="Portfolio"/>
		<meta name="author" content="Killian Filâre">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Google Fonts  -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="img/favicon.png">

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="inc/animations/css/animate.min.css">
		<link rel="stylesheet" href="inc/font-awesome/css/font-awesome.min.css">

		<!-- Theme CSS -->
        <link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/mobile.css">

		<!-- Skin CSS -->
        <link rel="stylesheet" href="css/theme.css">
	</head>
    <body data-spy="scroll" data-target="#main-navbar">
        <div class="page-loader"></div>
    	<div id="home" class="body">
            <header id="header" class="header-main">
                <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
                  <div class="container">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll" href="#home">Home</a></li>
                            <li><a class="page-scroll" href="#about-section">Profil</a></li>
                            <li><a class="page-scroll" href="#portfolio-section">Projets</a></li>
                            <li><a class="page-scroll" href="#contact-section">Contact</a></li>
                        </ul>
                    </div>
                  </div>
                </nav>
            </header>

			<section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/home-picture.jpg);">
				<div class="container">
                    <div class="caption text-center text-white" data-stellar-ratio="0.7">
                        <div class="item">
                            <h1>Killian Filatre</h1>
                            <p>Bienvenue sur mon portfolio</p>
                            <div class="extra-space-l"></div>
                            <a class="btn btn-blank page-scroll" href="#portfolio-section" role="button">
                                Voir les Projets
                            </a>
                        </div>
                    </div>
                    <div id="confirmationModal" class="modal">
                        <div class="modal-content">
                            <span class="close-button" onclick="closeModal()">&times;</span>
                            <h2>Confirmation</h2>
                            <p id="modalMessage">Votre message a été envoyé avec succès.</p>
                        </div>
                    </div>
				</div>
			</section>
			<section id="about-section" class="page bg-style1">
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h2>Profil</h2>
                            <div class="devider"></div>
                        </div>
                    </div>
                </div>
                <div class="rotate-box-1-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 rotate-box-1 square-icon wow zoomIn" data-wow-delay="0">
                                <span class="rotate-box-icon"><i class="fa fa-user"></i></span>
                                <div class="rotate-box-info">
                                    <h4>Qui je suis ?</h4>
                                    <p>Je suis un développeur en alternance, passionné par la technologie. Avec une
                                        curiosité constante et un fort désir d’apprendre, je m'investis pleinement pour
                                        développer mes compétences dans le domaine du développement web et logiciel.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm- rotate-box-1 square-icon wow zoomIn6" data-wow-delay="0.2s">
                                <span class="rotate-box-icon"><i class="fa fa-graduation-cap"></i></span>
                                <div class="rotate-box-info">
                                    <h4>Mon parcours ?</h4>
                                    <p>Il a été marqué par une transition vers le numérique après plusieurs
                                        années dans un autre secteur. J'ai décidé de suivre une formation en
                                        développement informatique en alternance, ce qui me permet d'allier théorie et
                                        pratique.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.4s">
                                <span class="rotate-box-icon"><i class="fa fa-heart"></i></span>
                                <div class="rotate-box-info">
                                    <h4>Ma passion ?</h4>
                                    <p>La programmation est bien plus qu'une compétence professionnelle pour moi, c'est
                                        une véritable passion. J'adore résoudre des problèmes complexes, créer des
                                        applications intuitives et apprendre de nouvelles technologies dans ce domaine en évolution.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.6s">
                                <span class="rotate-box-icon"><i class="fa fa-clock-o"></i></span>
                                <div class="rotate-box-info">
                                    <h4>Depuis quand ?</h4>
                                    <p>Ma passion pour le code a commencé il y a quelques années lorsque j'ai découvert
                                        les possibilités infinies qu'offrent les langages de programmation. Depuis, je
                                        souhaite en faire mon métier et poursuivre une
                                        carrière enrichissante dans le développement.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

          <section id="cta-section">
          	<div class="cta">
            	<div class="container">
                    <div class="row" style="display: flex; justify-content: center; align-items: center;">
                        <div class="wow bounceInRight border p-link" data-wow-delay="0.4s" style="margin-left: 10px;">
                            <a href="https://docs.google.com/document/d/19dRTX9NexXQ-bqczfOq90sS11WGjMmVDKcB_JZfqnp4/edit?usp=sharing"
                               target="_blank">
                                <h1 style="color: gray;">Voir mon curriculum vitae <i class="fa fa-search"></i></h1>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
          </section>
            <section id="portfolio-section" class="page bg-style1">
            	<div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portfolio">
                                <div class="page-header-wrapper">
                                    <div class="container">
                                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                            <h2>Projets</h2>
                                            <div class="devider"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfoloi_content_area" >
                                    <div class="portfolio_menu" id="filters">
                                        <ul>
                                            <li class="active_prot_menu"><a href="#porfolio_menu" data-filter="*">all</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".symfony">Symfony</a></li>
                                        </ul>
                                    </div>
                                    <div class="portfolio_content">
                                        <div class="row" id="portfolio">
                                            <div class="col-xs-12 col-sm-4 symfony">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/projet-01.png" alt="Site ecommerce"/>
                                                    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 20px;">
                                                        <span>E-commerce - Symfony 7</span>
                                                        <a href="https://ecommerce.killianfilatre.fr">
                                                            <span style="border: 1px solid black; background-color: white; color:black; padding: 10px;">
                                                                Voir la demo
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 symfony">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/projet-02.png" alt="Photographie snowboarder"/>
                                                    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 20px;">
                                                        <span>Snowtricks - Symfony 5</span>
                                                        <a href="https://snowtricks.killianfilatre.fr">
                                                            <span style="border: 1px solid black; background-color: white; color:black; padding: 10px;">
                                                                Voir la demo
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			<section id="contact-section" class="page text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/testimonial-bg.jpg);">
            <div class="cover"></div>
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Contacts</h2>
                            <div class="devider"></div>
                        </div>
                    </div>
                </div>
                <div class="contact wow bounceInRight" data-wow-delay="0.4s">
                    <div class="container">
                    	<div class="row">
                            <div class="col-sm-6">
                                <div class="contact-info">
                                    <h4>Réseaux</h4>
                                    <ul class="contact-address">
			                            <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; Normandie, Caen</li>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            <a class="white" href="mailto:killian.filatre@outlook.fr">killian.filatre@outlook.fr</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-linkedin"></i>
                                            <a class="white" href="https://www.linkedin.com/in/killian-fil%C3%A2tre-3104a9206/">^/killian-filâtre</a>
                                        </li>
			                            <li>
                                            <i class="fa fa-github"></i>
                                            <a class="white" href="https://github.com/killiadmin">^/killiadmin</a>
                                        </li>
			                        </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-form">
                                    <h4>Écrivez-moi</h4>
                                    <form role="form" action="process_form.php" method="post">
                                        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" name="nom"
                                                   placeholder="Votre nom" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control input-lg" name="email"
                                                   placeholder="Votre adresse mail" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" name="objet"
                                                   placeholder="Objet" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control input-lg" name="message" rows="5"
                                                      placeholder="Message" required></textarea>
                                        </div>
                                        <button type="submit" class="btn wow bounceInRight" data-wow-delay="0.8s">
                                            Envoie
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="text-off-white">
                <div class="footer">
                    <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
                        <p class="copyright">Copyright &copy; 2024</p>
                    </div>
                </div>
            </footer>
            <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a>
        </div>
        <!-- Plugins JS -->
		<script src="inc/jquery/jquery-1.11.1.min.js"></script>
		<script src="inc/bootstrap/js/bootstrap.min.js"></script>
		<script src="inc/stellar/js/jquery.stellar.min.js"></script>
		<script src="inc/animations/js/wow.min.js"></script>
        <script src="inc/waypoints.min.js"></script>
		<script src="inc/isotope.pkgd.min.js"></script>
		<script src="inc/classie.js"></script>
		<script src="inc/jquery.easing.min.js"></script>
		<script src="inc/jquery.counterup.min.js"></script>
		<script src="inc/smoothscroll.js"></script>

		<!-- Theme JS -->
		<script src="js/theme.js"></script>
        <script src="js/modal.js"></script>
    </body>
</html>
