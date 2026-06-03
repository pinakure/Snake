<?php
	error_reporting(E_ALL);		
	$size 	= 8;
	$width 	= intval(320 / $size);
	$height = intval(240 / $size);
	$speed  = 60;	
	
	session_start();
	
	$_SESSION['key'] = '0xdeadbabe';
?>