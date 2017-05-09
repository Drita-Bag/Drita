<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	function writeTagsInArray($array = array()){
		foreach($array as $cell){
			echo '		' . $cell . PHP_EOL;
		}
	}
?>
<!DOCTYPE html>
<html lang = "<?php echo $header['lang'] ?? 'en'?>">
	<head>
		<title><?php echo $header['title'] ?? 'codeIgniter ' . CI_VERSION . ' project' ?></title>
		<meta charset = "<?php echo $header['charset'] ?? 'utf-8' ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- "To ensure proper rendering and touch zooming" -Bootstrap CSS introduction page found in there: http://getbootstrap.com/css/ -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<?php

	//BLOCK META
	//This block's only purpose is to create the meta tags with the DCTERMS
	if (!empty($dcterms)){
		echo '		<meta name="DCTERMS.creator" content="' . $dcterms['creator'] . '" />' . PHP_EOL;
		echo '		<meta name="DCTERMS.subject" content="' . $dcterms['subject'] . '" />' . PHP_EOL;
		echo '		<meta name="DCTERMS.created" content="' . $dcterms['created'] . '" />' . PHP_EOL;
	}
	
	//BLOCK ASSETS
	//for each 'if' statement, we check if we'll add an asset or not
	
	//css asset loader
	if (!empty($cssTags)){
		echo '		' . '<!-- CSS tags here -->' . PHP_EOL;
		writeTagsInArray($cssTags);
	}
	//js asset loader
	if (!empty($jsTags)){
		echo '		' . '<!-- JS tags here -->' . PHP_EOL;
		writeTagsInArray($jsTags);
	}
	//less asset loader
	if (!empty($lessTags)){
		echo '		' . '<!-- LESS tags here -->' . PHP_EOL;
		writeTagsInArray($lessTags);
	}
?>
	</head>
	<body>
