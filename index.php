<?php
    session_start();
?>
<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]><html class="no-js ie6" lang="fr"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="fr"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="fr"><![endif]-->
<!--[if lte IE 8]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Styles -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700" rel="stylesheet">
	<link rel="stylesheet" href="./build/css/styles.css" type="text/css">
  	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="./build/img/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./build/img/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./build/img/favicons/favicon-16x16.png">
	<link rel="manifest" href="./build/img/favicons/manifest.json">
	<link rel="mask-icon" href="./build/img/favicons/safari-pinned-tab.svg" color="#323232">
	<meta name="theme-color" content="#ffffff">
	<!-- Practical info -->
	<meta name="description" content="Personal website of Mathieu Claessens web developper and designer">
	<meta author="Mucht">

    <title>Mathieu Claessens - Front-End Developer &  Web Designer</title>
</head>
<body>
	<h1 class="sr-only">Mathieu Claessens - Front-End Developer & Web Designer</h1>
	<nav class="navigation">
		<h2 class="sr-only">Navigation</h2>
		<a class="navigation-button" href="#" title="Open the menu">
			Menu
			<span class="navigation-button-bar"></span>
			<span class="navigation-button-bar"></span>
			<span class="navigation-button-bar"></span>
			<span class="navigation-button-bar"></span>
		</a>
		<div class="navigation-links">
			<a href="#about" class="navigation-link">About me</a>
			<a href="#portfolio" class="navigation-link">Portfolio</a>
			<a href="#experience" class="navigation-link">Experience</a>
			<a href="#contact" class="navigation-link">Contact</a>
		</div>
	</nav>
	<section class="section about" id="about">
		<div class="section-wrap about-content">
			<div class="about-logo-wrap">
				<div class="about-logo-border">
					<a class="about-logo-available" href="#contact" title="Get in touch with me">Available for work</a>
					<svg class="about-logo-content" version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="150px" height="108px" viewBox="0 0 500 360.56" enable-background="new 0 0 500 360.56" xml:space="preserve">
						<path fill="#FAFAFA" d="M354.869,88.996c11.027-10.148,23.902-16.286,37.818-16.286c21.918,0,41.189,9.143,61.309,31.086 L499,59.134C472.585,23.482,434.799,1,392.687,1c-28.842,0-58.962,9.437-78.201,28.657L172.121,172.273L1,1v358.56h72.261V173.259 l98.028,98.27L354.869,88.996z"/>
						<path fill="#F58020" d="M382.765,286.848c-39.38,0-71.263-46.951-72.104-105.273l-62.373,61.9 c20.861,67.17,72.976,115.086,134.476,115.086c47.125,0,88.853-28.106,115.235-71.403l-45.004-44.539 C430.53,269.512,409.144,286.848,382.765,286.848z"/>
					</svg>
					<div class="about-logo-socials">
						<a class="about-logo-socials-link about-logo-socials-link-git" href="https://github.com/Mucht" title="Goto my Github profil" target="_blanc">Github</a>
						<a class="about-logo-socials-link about-logo-socials-link-insta" href="https://www.instagram.com/mucht08" title="Go to my Instagram profil" target="_blanc">Instagram</a>
						<a class="about-logo-socials-link about-logo-socials-link-in" href="https://www.linkedin.com/in/mucht/" title="Go to my Linkedin profil" target="_blanc">Linkedin</a>
					</div>
				</div>
			</div>
			<div class="about-text">
				<h2 class="about-title"><span class="about-title-name"><span class="about-title-fname">Mathieu</span> <span class="about-title-lname">Claessens</span></span> <span class="about-title-function">Front-End Developer & Web Designer</span></h2>
				<div class="about-intro">My perfect day is made of some music to set the mood, a big smile to lighten the room, a project to work on, one or two burgers to stay fit and some dad's jokes to laugh at least 10 times a day.</div>
			</div>
		</div>
		<a class="section-next" href="#portfolio" title="Go to my portfolio">What's next ?</a>
	</section>
	<section id="portfolio" class="section portfolio">
		<h2 class="section-title">Portfolio</h2>
		<div class="section-wrap portfolio-content">
			<article class="portfolio-project">
				<a href="/exit.php" class="portfolio-project-link" title="Go to the projet's page">
					<h3 class="portfolio-project-title">EXIT Studio<span class="portfolio-project-role">Development & Design</span></h3>
					<img class="portfolio-project-img" src="/build/img/portfolio/exit/exit.jpg" srcset="/build/img/portfolio/exit/exit-320.jpg 320w, /build/img/portfolio/exit/exit-440.jpg 440w" alt="Image du projet d'EXIT Studio">
				</a>
			</article>
			<article class="portfolio-project">
				<a href="/rbcciney.php" class="portfolio-project-link" title="Go to the projet's page">
					<h3 class="portfolio-project-title">RBC Ciney<span class="portfolio-project-role">Development & Design</span></h3>
					<img class="portfolio-project-img" src="/build/img/portfolio/rbcciney/rbcciney.jpg" srcset="/build/img/portfolio/rbcciney/rbcciney-320.jpg 320w, /build/img/portfolio/rbcciney/rbcciney-440.jpg 440w" alt="Image du projet du RBC Ciney">
				</a>
			</article>
		</div>
		<!-- <a class="section-next" href="#experience" title="Check my experience">Still want more ?</a> -->
	</section>
	<section class="section experience" id="experience">
		<h2 class="section-title">Experience</h2>
		<div class="section-wrap experience-content">
			<article class="experience-elt">
				<p class="experience-date">Mai 2017 - September 2017</p>
				<h3 class="experience-title">RBC Ciney</h3>
				<p class="experience-job">Website</p>
				<p class="experience-description">As my end of studies project, I made the web site from scratch for my basketball club.</p>
			</article>
			<article class="experience-elt">
				<p class="experience-date">September 2014 - September 2017</p>
				<h3 class="experience-title">Haute École de  la Province de Liège (HEPL)</h3>
				<p class="experience-job">Web dev & design studies</p>
				<p class="experience-description">Graduated a three-year studies in Web development and design with distinction</p>
			</article>
			<article class="experience-elt">
				<p class="experience-date">February 2017 - Mai 2017</p>
				<h3 class="experience-title">EXIT Studio</h3>
				<p class="experience-job">Internship Front-End Developer & Designer</p>
				<p class="experience-description">Integration of the agency’s website using the CMS Wordpress</p>
			</article>
			<a href="/resume.pdf" class="experience-resume btn btn-secondary" title="Download my resume" target="_blanc">Download my resume (fr)</a>
		</div>
		<!-- <a class="section-next" href="#contact" title="Get in touch">Say hello !</a> -->
	</section>
	<section class="section contact" id="contact">
		<h2 class="section-title">Get in touch</h2>
		<div class="section-wrap contact-content">
			<p class="contact-intro">Send me an email if you want to start a new project, a new collaboration or send a dad's joke to contribute to my 10 laugh a day therapy.</p>
			<form class="contact-form" action="contact.php" method="POST" id="contact-form">
				<div class="contact-form-feedback">
					<?php if(!empty($_SESSION['errors'])): ?>
						<ul class="contact-form-feedback-list contact-form-feedback-error">
							<?php if(isset($_SESSION['errors']['name'])): ?>
								<li class="contact-form-feedback-elt"><?php echo $_SESSION['errors']['name']; ?></li>
							<?php endif; ?>
							<?php if(isset($_SESSION['errors']['email'])): ?>
								<li class="contact-form-feedback-elt"><?php echo $_SESSION['errors']['email']; ?></li>
							<?php endif; ?><?php if(isset($_SESSION['errors']['url'])): ?>
								<li class="contact-form-feedback-elt"><?php echo $_SESSION['errors']['url']; ?></li>
							<?php endif; ?><?php if(isset($_SESSION['errors']['message'])): ?>
								<li class="contact-form-feedback-elt"><?php echo $_SESSION['errors']['message']; ?></li>
							<?php endif; ?>
						</ul>
					<?php endif; ?>
					<?php if(isset($_SESSION['success'])): ?>
						<p class="contact-form-feedback-success"><?php echo $_SESSION['success']; ?></p>
					<?php endif; ?>
				</div>
				<fieldset class="contact-form-fieldset">
					<label class="contact-form-label" for="inputname">Name</label>
					<input class="contact-form-input<?php echo isset($_SESSION['errors']['name']) ? " contact-form-input-error" : "" ?>" type="text" name="name" value="<?php echo isset($_SESSION['data']['name']) ? $_SESSION['data']['name'] : "" ?>" id="inputname" placeholder="Your name here">
				</fieldset>
				<fieldset class="contact-form-fieldset">
					<label class="contact-form-label" for="inputmail">Email</label>
					<input class="contact-form-input<?php echo isset($_SESSION['errors']['email']) ? " contact-form-input-error" : "" ?>" type="email" name="email" value="<?php echo isset($_SESSION['data']['email']) ? $_SESSION['data']['email'] : "" ?>" id="inputmail" placeholder="Your email here">
				</fieldset class="contact-form-fieldset">
				<fieldset class="contact-form-fieldset">
					<label class="contact-form-label" for="inputurl">URL</label>
					<input class="contact-form-input<?php echo isset($_SESSION['errors']['url']) ? " contact-form-input-error" : "" ?>" type="url" name="url" value="<?php echo isset($_SESSION['data']['url']) ? $_SESSION['data']['url'] : "" ?>" id="inputurl" placeholder="http://">
				</fieldset class="contact-form-fieldset">
				<fieldset class="contact-form-fieldset">
					<label class="contact-form-label" for="inputmessage">Message</label>
					<textarea class="contact-form-textarea<?php echo isset($_SESSION['errors']['message']) ? " contact-form-textarea-error" : "" ?>" name="message" id="inputmessage" rows="8" cols="10" placeholder="Your message here"><?php echo isset($_SESSION['data']['message']) ? $_SESSION['data']['message'] : "" ?></textarea>
				</fieldset>
				<button class="contact-form-submit btn btn-primary" type="submit" name="submit">Send</button>
			</form>
		</div>
	</section>
</body>
<footer class="footer">
	<div class="footer-wrap">
		<a class="footer-phone" href="tel:+32476524285" title="Call me">+32 476 52 42 85</a>
		<div class="footer-logo-border">
			<svg class="footer-logo-content" version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="123px" viewBox="0 0 500 360.56" enable-background="new 0 0 500 360.56" xml:space="preserve">
				<path fill="#FAFAFA" d="M354.869,88.996c11.027-10.148,23.902-16.286,37.818-16.286c21.918,0,41.189,9.143,61.309,31.086 L499,59.134C472.585,23.482,434.799,1,392.687,1c-28.842,0-58.962,9.437-78.201,28.657L172.121,172.273L1,1v358.56h72.261V173.259 l98.028,98.27L354.869,88.996z"/>
				<path fill="#F58020" d="M382.765,286.848c-39.38,0-71.263-46.951-72.104-105.273l-62.373,61.9 c20.861,67.17,72.976,115.086,134.476,115.086c47.125,0,88.853-28.106,115.235-71.403l-45.004-44.539 C430.53,269.512,409.144,286.848,382.765,286.848z"/>
			</svg>
		</div>
		<a class="footer-mail" href="mailto:mucht@mathieuclaessens.be" title="Send me an email">mucht@mathieuclaessens.be</a>
	</div>
</footer>
<!-- Script -->
<script src="./build/js/jquery-3.2.1.min.js"></script>
<script src="./build/js//scripts.js"></script>
</html>
<?php
    unset( $_SESSION['errors'] );
    unset( $_SESSION['success'] );
    unset( $_SESSION['data'] );
?>