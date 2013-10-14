<?php

$id = "lee";
$photo = "no-photo.jpg";
$name = "Lee Manchul";
$title = "CEPD Awards Committee &amp; Award Winners";
$phrase = "Rewarding Excellence in CPD";
$content = '	
	<p><span class="award">Colin R. Woolf Awards</span></p>

	<p><span class="award-area">Excellence in Course Coordination</span><br />
	<span class="name">Dr. Albino Chiodo</span></p>

	<p><span class="award-area">Teaching Excellence</span><br />
	<span class="name">Dr. Marcus Burnstein</span></p>

	<p><span class="award-area">Long-Term Contribution to Continuing Education</span><br />
	<span class="name">Dr. Mary Bell</span></p>

	<p><span class="award">Fred Fallis Award in Online Learning</span><br />
	<span class="name">Dr. Heather MacNeill</span></p>

	<p><span class="award">Interpofessional Education (IPE) Team CE Award</span><br />
	<span class="name">Drs. Rene Wong &amp; Catherine Yu</span></p>

	<p><span class="award">Ivan Silver Innovation Award</span><br />
	<span class="name">Dr. Peter Selby and<br>CAMH Nicotene Dependence Clinic Program Team</span></p>';
$contentMobile = '	
	<p><span class="award">Colin R. Woolf Awards</span></p>

	<p><span class="award-area">Excellence in Course Coordination</span><br />
	<span class="name">Dr. Albino Chiodo</span></p>

	<p><span class="award-area">Teaching Excellence</span><br />
	<span class="name">Dr. Marcus Burnstein</span></p>

	<p><span class="award-area">Long-Term Contribution to Continuing Education</span><br />
	<span class="name">Dr. Mary Bell</span></p>

	<p><span class="award">Fred Fallis Award in Online Learning</span><br />
	<span class="name">Dr. Heather MacNeill</span></p>

	<p><span class="award">Interpofessional Education (IPE) Team CE Award</span><br />
	<span class="name">Drs. Rene Wong &amp; Catherine Yu</span></p>

	<p><span class="award">Ivan Silver Innovation Award</span><br />
	<span class="name">Dr. Peter Selby and<br>CAMH Nicotene Dependence Clinic Program Team</span></p>
';
	
$item = "";

$itemHTML = '<div class="award-recipients hidden-xs">
	<div class="row">
		<div class="col-xs-4"><img src="img/awards/chiodo.png" alt="" /></div>
		<div class="col-xs-4"><img src="img/awards/burnstein.png" alt="" /></div>
		<div class="col-xs-4"><img src="img/awards/bell.png" alt="" /></div>
	</div>
	<div class="row">
		<div class="col-xs-4"><img src="img/awards/macneill.png" alt="" /></div>
		<div class="col-xs-8"><img src="img/awards/wong-yu.png" alt="" /></div>
	</div>
	<div class="row">
		<div class="col-xs-12"><img src="img/awards/selby.png" alt="" /></div>
	</div>';

$colLeft = "col-md-7";
$colRight = "col-md-4";

showSection($id, $photo, $name, $title, $phrase, $content, $contentMobile, $item, $colLeft, $colRight, $itemHTML);

?>