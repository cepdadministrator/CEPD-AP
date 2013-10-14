<?php

$id = "dimitri";
$photo = "dimitri-video.jpg";
$name = "Dimitri Anastakis";
$title = "Vice Dean";
$phrase = "Partners in transforming healthcare in Ontario and beyond";
$content = '<ul>
		<li id="1">Expansion of Portfolio</li>
		<li id="2">Innovation in Education</li>
		<li id="3">Focus on Academic Integrity and Development</li>
		<li id="4">Closer alignment with U of T Reputation</li>
	</ul>';
$contentMobile = "<ul>
		<li>Expansion of Portfolio</li>
		<li>Innovation in Education</li>
		<li>Focus on Academic Integrity and Development</li>
		<li>Closer alignment with U of T Reputation</li>
	</ul>";

$item = "";
	
$itemHTML = '<div class="house-container">
	<div class="row">
		<div class="col-xs-12">
			<div id="top">
				<img src="img/house/0-roof.png" alt="" id="roof" />
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-6">
			<div id="left">
				<img src="img/house/l1-administration.png" alt="" id="administration" />
				<img src="img/house/l2-accreditation.png" alt="" id="accreditation" />
				<img src="img/house/l3-program.png" alt="" id="program" />
				<img src="img/house/l4-research.png" alt="" id="research" />
				<img src="img/house/l5-event.png" alt="" id="event" />
				<img src="img/house/l6-info.png" alt="" id="info" />
				<img src="img/house/l7-academic.png" alt="" id="academic" />
			</div>
		</div>
		<div class="col-xs-6">
			<div id="right">
				<img src="img/house/r1-ie.png" alt="" id="ie" />
				<img src="img/house/r2-spp.png" alt="" id="spp" />
			</div>
		</div>
	</div>
</div>';

$colLeft = "col-md-6";
$colRight = "col-md-6";

showSection($id, $photo, $name, $title, $phrase, $content, $contentMobile, $item, $colLeft, $colRight, $itemHTML);
?>