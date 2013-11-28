<?php

$id = "simon";
$photo = "sk1.png";
$name = "Simon Kitto";
$title = "Research";
$phrase = "Global leaders in CPD Research";
$content = "
	<ul>
		<li>38 CEPD Research Grants</li>
		<li>$19M+ CEPD Research Funds</li>
		<li>66 CEPD Publications</li>
	</ul>";
$contentMobile = "
	<ul>
		<li>38 CEPD Research Grants</li>
		<li>$19M+ CEPD Research Funds</li>
		<li>66 CEPD Publications</li>
	</ul>";
	
$item = "Research.png";

$itemHTML = '';

$colLeft = "col-md-7";
$colRight = "col-md-4";

showSection($id, $photo, $name, $title, $phrase, $content, $contentMobile, $item, $colLeft, $colRight, $itemHTML);

?>