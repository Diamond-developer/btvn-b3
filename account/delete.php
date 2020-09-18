<?php

$id	= $_GET['id']; 
	$content	= file_get_contents("./files/$id.txt");
	$content	= explode('||', $content);
	$title				= $content[0];
	$description		= $content[1];
	

    @unlink("./files/$id.txt");

    header('location: ./index.php');