<?php
require ('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="../../assets/ico/favicon.png">

		<title>CEPD 2012-13 A Year of Transformation</title>

		<!-- Bootstrap core CSS -->
		<link href="css/application.css" rel="stylesheet">
		<link href="css/animate.min.css" rel="stylesheet">

		<style type="text/css">
		#dimitri {
			//visibility:hidden;
		}
		#susan {
			//visibility:hidden;
		}	
		</style>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="js/html5shiv.js"></script>
		  <script src="js/respond.min.js"></script>
		<![endif]-->

		<!-- Load Typekit -->
		<script type="text/javascript" src="//use.typekit.net/fkm2enc.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		
		<!-- Load Test Video -->
		<script type="text/javascript" src="//cdn.sublimevideo.net/js/gculkmjd.js"></script>
	</head>

	<body>

		<header>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="teal">2012-13 A Year of Transformation</h2>
						<h1 class="white">CEPD Annual Report Executive Summary</h1>
						<!-- <p><small>Click the photo to play the video.</small></p> -->
					</div>
				</div>
			</div>
		</header>

		<video id="dimitriVideo" width="640" height="360" style="display:none" data-uid="96fc71bf" preload="none">
		  <source src="http://dw8qjvaos5e4d.cloudfront.net/annualReport/da.mp4" />
		</video>
		<video id="susanVideo" width="640" height="360" style="display:none" data-uid="96fc71bf" preload="none">
		  <source src="http://dw8qjvaos5e4d.cloudfront.net/annualReport/sr.mp4" />
		</video>
		<video id="annaVideo" width="640" height="360" style="display:none" data-uid="96fc71bf" preload="none">
		  <source src="http://dw8qjvaos5e4d.cloudfront.net/annualReport/an.mp4" />
		</video>
		<video id="suzanVideo" width="640" height="360" style="display:none" data-uid="96fc71bf" preload="none">
		  <source src="http://dw8qjvaos5e4d.cloudfront.net/annualReport/ss.mp4" />
		</video>
		<video id="simonVideo" width="640" height="360" style="display:none" data-uid="96fc71bf" preload="none">
		  <source src="http://dw8qjvaos5e4d.cloudfront.net/annualReport/sk.mp4" />
		</video>
		<video id="leeVideo" width="640" height="360" style="display:none" data-uid="96fc71bf" preload="none">
		  <source src="http://dw8qjvaos5e4d.cloudfront.net/annualReport/lm.mp4" />
		</video>
		<video id="rossVideo" width="640" height="360" style="display:none" data-uid="96fc71bf" preload="none">
		  <source src="http://dw8qjvaos5e4d.cloudfront.net/annualReport/rb.mp4" />
		</video>
		<video id="peterVideo" width="640" height="360" style="display:none" data-uid="96fc71bf" preload="none">
		  <source src="http://dw8qjvaos5e4d.cloudfront.net/annualReport/pa.mp4" />
		</video>
<?php

	include ('sections/dimitri.php');
	include ('sections/susan.php');
	include ('sections/anna.php');
	include ('sections/suzan.php');
	include ('sections/simon.php');
	include ('sections/lee.php');
	include ('sections/ross.php');
	include ('sections/peter.php');

?>

	<footer>
		<div class="container">
			<img src="http://blog.cepdtoronto.ca/wp-content/uploads/2011/11/UofT-CEPD-White.png" alt="" />
		</div>
	</footer>

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js" ></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/animo.js"></script>
	
	<script type="text/javascript">

		$(window).scroll(function(event) {
			if($(".annaPhoto").offset().top < $(window).scrollTop() + $(window).outerHeight()) {
			    $('#anna').animo( {animation: "fadeInLeft", duration: 1, keep: true} );
			} else {
			}
			
			if($(".suzanPhoto").offset().top < $(window).scrollTop() + $(window).outerHeight()) {
			    $('#suzan').animo( {animation: "fadeInRight", duration: 1, keep: true} );
			} else {
			}
			
			if($(".simonPhoto").offset().top < $(window).scrollTop() + $(window).outerHeight()) {
			    $('#simon').animo( {animation: "fadeInLeft", duration: 0.5, keep: true} );
			} else {
			}
			
			if($(".leePhoto").offset().top < $(window).scrollTop() + $(window).outerHeight()) {
			    $('#lee').animo( {animation: "fadeInRight", duration: 0.5, keep: true} );
			} else {
			}
			
			if($(".rossPhoto").offset().top < $(window).scrollTop() + $(window).outerHeight()) {
			    $('#ross').animo( {animation: "fadeInLeft", duration: 0.5, keep: true} );
			} else {
			}
			
			if($(".peterPhoto").offset().top < $(window).scrollTop() + $(window).outerHeight()) {
			    $('#peter').animo( {animation: "fadeInRight", duration: 0.5, keep: true} );
			} else {
			}
		});
	</script>

	<script type="text/javascript">
	
	$('#top').animo({animation: "bounceInDown", duration: 1, keep: true}, function() {
		$('#left').animo({animation: "pulse", duration: 0.5, keep: true}, function() {
			$('#right').animo({animation: "pulse", duration: 0.5, keep: true} );
		});
	});

	</script>
	
	</body>
</html>
