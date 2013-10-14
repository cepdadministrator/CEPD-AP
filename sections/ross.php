<?php

$id = "ross";
$photo = "no-photo.jpg";
$name = "Ross Barclay";
$title = "Information Services";
$phrase = "Going to the next level in Event Management Software";
$content = "<ul>
	<li>University of Toronto</li>
	<li>University of British Columbia</li>
	<li>University of Manitoba </li>
	<li>University of Ottawa</li>
	<li>SimONE</li>
</ul>";
$contentMobile = "<ul>
	<li>University of Toronto</li>
	<li>University of British Columbia</li>
	<li>University of Manitoba </li>
	<li>University of Ottawa</li>
	<li>SimONE</li>
</ul>";
	
$item = "EvE-Logo.png";

$itemHTML = '';

$colLeft = "col-md-7";
$colRight = "col-md-5";

showSection($id, $photo, $name, $title, $phrase, $content, $contentMobile, $item, $colLeft, $colRight, $itemHTML);

?>