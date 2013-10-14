<?php

$id = "anna";
$photo = "no-photo.jpg";
$name = "Anna Naccarato";
$title = "Event Management";
$phrase = "Reaching out to faculty and beyond";
$content = "
	<ul>
		<li>315 Accredited Events by Faculty Department</li> 		
	</ul>";
$contentMobile = "
	<ul>
		<li>315 Accredited Events by Faculty Department</li> 		
	</ul>";
	
$item = "EventsByDepartment.png";

$itemHTML = '';

$colLeft = "col-md-6";
$colRight = "col-md-6";

showSection($id, $photo, $name, $title, $phrase, $content, $contentMobile, $item, $colLeft, $colRight, $itemHTML);

?>