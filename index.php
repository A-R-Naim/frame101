<?php

// Inclue route file
require_once( 'route.php' );

$route = new Route;
	
$route->add( 
	array(
		'/',       
		'/about', 
		'/contact',
		)
	);

// $route->add( '/' );
// $route->add( '/about' );
// $route->add( '/contact' );

// echo '<pre>';
// print_r( $route );

$route->filter();
