<?php

$id = "susan";
$photo = "sr4.png";
$name = "Susan Rock";
$title = "Operations";
$phrase = "Canada’s largest provider of CPD Accredited events driving C-IPE";
$content = "<ul>
	<li>120 Managed Events</li>
	<li>27,025+ Total Registrants</li>
	<li>5 Year CACME Successful Review</li>
</ul>";
$contentMobile = "<ul>
	<li>120 Managed Accredited Events</li>
	<li>27,025 Total Registrants</li>
	<li>5 Year CACME Successful Review</li>
</ul>";
	
$item = "Event-Management.png";

$itemHTML = '';

$colLeft = "col-md-9";
$colRight = "col-md-3";

showSection($id, $photo, $name, $title, $phrase, $content, $contentMobile, $item, $colLeft, $colRight, $itemHTML);

?>