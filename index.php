<?php
/*
 * File : index.php
 * Author : Killian Filâtre
 * Description : Page d'accueil du portfolio
 */

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
		<title>Killian Filâtre - Développeur Web à Caen | Portfolio</title>
		<meta name="description" content="Portfolio de Killian Filâtre, développeur web basé à Caen. Expertise en développement web, création de sites et applications web sur mesure. Découvrez mes projets et compétences.">
		<meta name="keywords" content="développeur web, Caen, Killian Filâtre, création site web, développement web, portfolio développeur, Normandie, front-end, back-end"/>
		<meta name="author" content="Killian Filâtre">
        
        <!-- Open Graph / Social Media Meta Tags -->
        <meta property="og:title" content="Killian Filâtre - Développeur Web à Caen | Portfolio">
        <meta property="og:description" content="Portfolio de Killian Filâtre, développeur web basé à Caen. Expertise en développement web, création de sites et applications web sur mesure.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://killianfilatre.fr">
        <meta property="og:image" content="img/og-image.jpg">

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
                            <p>Développeur full-stack</p>
                            <div class="extra-space-l"></div>
                            <div style="display: flex; justify-content: center; align-items: center; gap: 20px; flex-direction: column;">
                                <a class="btn btn-blank page-scroll" href="#portfolio-section" role="button">
                                    Voir les Projets
                                </a>
                                <a class="btn btn-blank page-scroll" href="#contact-section" role="button">
                                    Contacte-moi
                                </a>
                            </div>
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
                                    <p>Je suis un développeur Full Stack passionné par la création d'applications web
                                        modernes et performantes. Fort d'une expertise couvrant aussi bien le front-end
                                        que le back-end, je conçois des solutions complètes, robustes et orientées
                                        expérience utilisateur.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm- rotate-box-1 square-icon wow zoomIn6" data-wow-delay="0.2s">
                                <span class="rotate-box-icon"><i class="fa fa-graduation-cap"></i></span>
                                <div class="rotate-box-info">
                                    <h4>Mon parcours ?</h4>
                                    <p>J'ai acquis une solide expérience dans le développement web et
                                        logiciel, en travaillant sur des projets variés allant de la conception
                                        d'interfaces utilisateur à l'architecture de systèmes back-end. Chaque projet
                                        m'a permis de renforcer mon expertise et d'élargir mes compétences techniques.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.4s">
                                <span class="rotate-box-icon"><i class="fa fa-heart"></i></span>
                                <div class="rotate-box-info">
                                    <h4>Ma passion ?</h4>
                                    <p>La programmation est au cœur de mon quotidien. J'aime concevoir des architectures
                                        élégantes, optimiser les performances et relever des défis techniques complexes.
                                        Toujours en veille technologique, j'explore constamment de nouveaux outils et
                                        frameworks pour livrer des solutions à la pointe.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.6s">
                                <span class="rotate-box-icon"><i class="fa fa-clock-o"></i></span>
                                <div class="rotate-box-info">
                                    <h4>Depuis quand ?</h4>
                                    <p>C'est en 2020 que j'ai débuté mon aventure dans le développement web, et depuis,
                                        je n'ai cessé de progresser et de me perfectionner. Ces années d'expérience
                                        m'ont permis de bâtir une vision claire du métier et de développer une
                                        véritable expertise full stack.
                                    </p>
                                </div>
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
                                            <li class="active_prot_menu"><a href="#porfolio_menu" data-filter="*">All</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".angular">Angular</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".java">Java</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".laravel">Laravel</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".ia">Model IA</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".vuejs">VueJs</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".symfony">Symfony</a></li>
                                        </ul>
                                    </div>
                                    <div class="portfolio_content">
                                        <div class="row" id="portfolio">
                                            <div class="col-xs-12 col-sm-4 symfony">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/projet-01.png" alt="Site ecommerce"/>
                                                    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 20px;">
                                                        <span style="font-weight: bold; text-decoration: underline">E-commerce</span>
                                                        <span>&nbsp;</span>
                                                        <span>Application de A à Z avec gestion de panier, paiement, commandes ... </span>
                                                        <span>&nbsp;</span>
                                                        <span>Avec Symfony 7</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 symfony">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/projet-02.png" alt="Photographie snowboarder"/>
                                                    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 20px; padding: 20px; font-weight: bold">
                                                        <span style="font-weight: bold; text-decoration: underline">Snowtricks</span>
                                                        <span>&nbsp;</span>
                                                        <span>Annuaire communautaire interactif <br>de figure de Snowboard</span>
                                                        <span>&nbsp;</span>
                                                        <span>Avec Symfony 6</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 symfony">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/projet-03.png" alt="App Todolist"/>
                                                    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 20px;">
                                                        <span style="font-weight: bold; text-decoration: underline">Todolist</span>
                                                        <span>&nbsp;</span>
                                                        <span>Application todolist <br>interne pour une équipe</span>
                                                        <span>&nbsp;</span>
                                                        <span>Avec Symfony 6</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 laravel vuejs ia">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/projet-04.png" alt="App Material generator"/>
                                                    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 20px;">
                                                        <span style="font-weight: bold; text-decoration: underline">Material generator</span>
                                                        <span>&nbsp;</span>
                                                        <span>Générateur de liste de matériel nécessaire <br>pour la réalisation de la vidéo youtube de bricolage partagé par un url</span>
                                                        <span>&nbsp;</span>
                                                        <span style="font-weight: bold">Avec Laravel 12, Vuejs 3 et model IA</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 java angular">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/projet-05.png" alt="App Mdd"/>
                                                    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 20px;">
                                                        <span style="font-weight: bold; text-decoration: underline">Monde de dev</span>
                                                        <span>&nbsp;</span>
                                                        <span>Dashboard de veille technologique <br>interne pour une entreprise et pour le partage de connaissance</span>
                                                        <span>&nbsp;</span>
                                                        <span style="font-weight: bold">Avec Java 17, Angular 14</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 java angular">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/projet-06.png" alt="App Quizz gageur"/>
                                                    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 20px;">
                                                        <span style="font-weight: bold; text-decoration: underline">Quizz gageure</span>
                                                        <span>&nbsp;</span>
                                                        <span>Générateur de vidéo de quizz <br> avec choix du thème <br>avec un format QCM (4 choix de réponses)</span>
                                                        <span>&nbsp;</span>
                                                        <span style="font-weight: bold">Avec Java 17, Angular 21</span>
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
                        <p class="copyright">Copyright &copy; Killian Filâtre - 2026</p>
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
