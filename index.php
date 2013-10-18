<?php
require ('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="2012-13 A Year of Transformation: CEPD Annual Report Executive Summary">
		<meta name="author" content="Continuing Education and Profession Development, Faculty of Medicine, University of Toronto">

		<link rel="shortcut icon" href="../../assets/ico/favicon.png">
		<link rel="icon" type="image/png" href="http://cdn1.cepdtoronto.ca/wp-content/themes/cepd/images/cepd-favicon.png" />

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
	include ('sections/suzan.php');
	include ('sections/simon.php');
	include ('sections/lee.php');
	include ('sections/peter.php');
	include ('sections/susan.php');
	include ('sections/anna.php');
	include ('sections/ross.php');

?>

<?php
	include ('footer.php');
?>

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
	
	<script type="text/javascript">
	  var _gauges = _gauges || [];
	  (function() {
	    var t   = document.createElement('script');
	    t.type  = 'text/javascript';
	    t.async = true;
	    t.id    = 'gauges-tracker';
	    t.setAttribute('data-site-id', '52610d2cf5a1f54695000039');
	    t.src = '//secure.gaug.es/track.js';
	    var s = document.getElementsByTagName('script')[0];
	    s.parentNode.insertBefore(t, s);
	  })();
	</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-42768709-1', 'utoronto.ca');
	  ga('send', 'pageview');

	</script>
	
	</body>
</html>
