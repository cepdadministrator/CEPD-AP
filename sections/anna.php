<?php

$id = "anna";
$photo = "an3.png";
$name = "Anna Naccarato";
$title = "Event Management";
$phrase = "Reaching out to faculty and beyond";
$content = "
	<ul>
		<li>313 Accredited Events by Faculty Department</li> 		
	</ul>";
$contentMobile = "
	<ul>
		<li>313 Accredited Events by Faculty Department</li> 		
	</ul>";
	
$item = "EventsByDepartment.png";

$itemHTML = '';

$colLeft = "col-md-6";
$colRight = "col-md-6";

showSection($id, $photo, $name, $title, $phrase, $content, $contentMobile, $item, $colLeft, $colRight, $itemHTML);

?>