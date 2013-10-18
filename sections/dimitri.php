<?php

$id = "dimitri";
$photo = "da2.png";
$name = "Dimitri Anastakis";
$title = "Vice Dean";
$phrase = "Transforming healthcare in Ontario and beyond";
$content = '<ul>
		<li id="1">Expansion of Portfolio</li>
		<li id="2">Innovation in Education</li>
		<li id="3">Focus on Scholarship</li>
		<li id="4">Closer alignment with U of T Reputation</li>
	</ul>';
$contentMobile = "<ul>
		<li>Expansion of Portfolio</li>
		<li>Innovation in Education</li>
		<li>Focus on Scholarship</li>
		<li>Closer alignment with U of T Reputation</li>
	</ul>";

$item = "";
	
$itemHTML = '<div class="house-container">
	<div class="row">
		<div class="col-xs-12">
			<div id="top">
				<img src="img/house/roof.png" alt="" id="roof" />
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-6">
			<div id="left">
				<img src="img/house/clusters.png" alt="" id="administration" />
			</div>
		</div>
		<div class="col-xs-6">
			<div id="right">
				<img src="img/house/externals.png" alt="" id="ie" />
			</div>
		</div>
	</div>
</div>';

$colLeft = "col-md-6";
$colRight = "col-md-6";

showSection($id, $photo, $name, $title, $phrase, $content, $contentMobile, $item, $colLeft, $colRight, $itemHTML);
?>