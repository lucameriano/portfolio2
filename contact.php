<!DOCTYPE html>
<html lang="de">
	
<head>
  <meta charset="UTF-8">
  <title>Portfolio Luca Meriano</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
  <link rel="icon" type="image/png" href="/images/icons/favicon.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/images/icons/favicon.png" sizes="96x96">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/mstile-144x144.png">


  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/particles.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/sass.css">
  <link rel="stylesheet" href="https://use.typekit.net/nqy4ypl.css">
	
</head>
	
<body data-spy="scroll" data-target=".site-nav" data-offset="15">
  <header class="site-header">
	 <div class="container">
		 <div id="home"></div>
		 <div class="navigation-mobile-div">
		 	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ToggleNav" 
				aria-controls="ToggleNav" aria-expanded="false" aria-label="Toggle Nav"><span><img src="images/icons/menu2.svg" id="toggler" alt="Menü"/></span></button>
		 
		  <section class="collapse navbar-collapse" id="ToggleNav">
		  
			 	<nav class="site-nav family-sans text-lowercase navbar navbar-expand-md navbar-light text-left">
         			 <div class="navbar-nav" id="navigation-mobile w-100">
						<a class="nav-item nav-link shadow-none" href="index.php#home" id="nav-link-first">Luca&nbsp;Meriano</a>
						<a class="nav-item nav-link shadow-none" href="index.php#spacer">Projekte</a>
						<a class="nav-item nav-link shadow-none" href="index.php#spacer2">About</a>
          		 	    <a class="nav-item nav-link shadow-none" href="index.php#kontakt">Contact</a>
     			 	</div>
   				 </nav>
		</section>
			</div>
		 
	  <section>
			 <nav class="site-nav family-sans text-lowercase navbar navbar-expand-md navbar-light" id="scrollspy-target">
         		 <div class="navbar-nav" id="navigation">
          		  <a class="nav-item nav-link" href="index.php#kontakt">Contact</a>
           		  <a class="nav-item nav-link" href="index.php#spacer2">About</a>
          		  <a class="nav-item nav-link" href="index.php#spacer">Projekte</a>
          		  <a class="nav-item nav-link" href="index.php#home">Luca&nbsp;Meriano</a>
     			 </div>
   			 </nav>
		</section>

	</div><!-- Container -->  
	  <section class="layout-cover">
		<div class="container">
			<h2 class="family-sans">
		<?php
			 $okMessage = 'Vielen Dank für Ihre Anfrage.';
			 $errorMessage = 'Ein Fehler ist aufgetreten, bitte füllen Sie das Formular erneut aus.';
			 ?>
		 
			 
<?php

$from = '<example@gmail.com>';
$sendTo = '<lucaluca02r@gmail.com>';
$subject = 'Neue Kontaktanfrage vom Portfolio!';

$fields = array('prename' => '(Vorname)', 'name' => '(Nachname)', 'email' => 'E-Mail-Adresse', 'need' => 'Art der Anfrage', 'message' => 'Nachricht', 'checkbox' => 'Dringende Anfrage' ); 

error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);

try
{

    if(count($_POST) == 0) throw new \Exception('Form is empty');
            
    $emailText = "Neue Kontaktanfrage von ";
	

    foreach ($_POST as $key => $value) {
        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    // Header //
    $headers = array('Content-Type: text/plain; charset="UTF-8";',
        'Gesendet von: ' . $from,
        'Antwort: ' . $from,
    );
    
    mail($sendTo, $subject, $emailText, implode("\n", $headers));
    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
				
else {
    echo $responseArray['message'];
} ?>
			
			</h2>
		</div><!-- Container -->
		</div><!-- Container -->
	  </section> 
  </header>
	
	
<div class="container">
			<section>
				<div id="particles-js"></div>
				<div class="icons">
					<a href="https://www.instagram.com/">
						<img src="images/icons/instagram-logo.svg" id="instagram" title="Instagram" alt="Instagram" class="icon"></a>
					<a href="https://www.behance.net/">
						<img src="images/icons/behance-logo.svg" title="Behance" alt="Behance" class="icon"></a>
				</div><!-- Container -->
				</section>
		</div>
	</article>



	<script src="js/lib/jquery.min.js"></script>
	<script src="js/lib/popper.min.js"></script>
	<script src="js/lib/bootstrap.bundle.min.js"></script>
	
	<script src="js/lib/smooth-scroll.polyfills.min.js"></script>
	<script src="js/lib/parallax.js-1.5.0/parallax.min.js"></script>
	<script src="js/lib/particles.js-master/particles.min.js"></script>
	<script src="js/lib/particles.js-master/app.js"></script>
	<script src="js/script.js"></script>
</body>
</html>