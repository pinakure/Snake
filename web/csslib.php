<?php
error_reporting(E_ALL);

header("Content-Type: text/css;charset=utf-8"); 
   
   
function half($q){
	if(strpos($q, 'px')){
		return (explode('px', $q)[0]/2).'px';		
	} else if(strpos($q, '%')){
		return (explode('%', $q)[0]/2).'%';
	} else {
		return $q/2;
	}
}  

function gradient($deg, $gradient, $important = false){
	$i = $important?' !important':'';
	return "background:-webkit-linear-gradient($deg, $gradient)$i;".
			"background:-o-linear-gradient($deg, $gradient)$i;".
			"background:-moz-linear-gradient($deg, $gradient)$i;".
			"background:linear-gradient($deg, $gradient)$i;";
}

function radius($a, $b, $c, $d, $important = false){
	$i = $important?' !important':'';
	return $a.'px '.$b.'px '.$c.'px '.$d."px$i;";
}

function border_radius($radius, $important = false){
	$i = $important?' !important':'';
	return "border-radius:$radius"."$i;".
			"-o-border-radius:$radius"."$i;".
			"-moz-border-radius:$radius"."$i;".
			"-webkit-border-radius:$radius"."$i;";
}

function radial_gradient($gradient, $important = false){
	$i = $important?' !important':'';
	return "background:-webkit-radial-gradient($gradient)$i;".
			"background:-o-radial-gradient($gradient )$i;".
			"background:-moz-radial-gradient($gradient )$i;".
			"background:radial-gradient($gradient )$i;";
}		

function no_select(){
	return '-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;';
}

?>