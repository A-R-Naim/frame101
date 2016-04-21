<?php

// Inclue files
require_once( dirname(__FILE__) . '/app/route.php' );
require_once( dirname(__FILE__) . '/app/models/model.php' );
require_once( dirname(__FILE__) . '/app/views/view.php' );
require_once( dirname(__FILE__) . '/app/controlers/controler.php' );

$route = new Route;
	
$route->add( 
	array(
		'/'      => array( 'model' => 'homeModel', 'view' => 'homeView', 'controler' => 'homeControler' ),       
		'/about' => array( 'model' => 'aboutModel', 'view' => 'pageView', 'controler' => 'aboutControler' ),
		'/blog'  => array( 'model' => 'blogModel', 'view' => 'blogView', 'controler' => 'blogControler' ),
		)
	);

$route->filter();
// echo $route->model . '<br/>';
// echo $route->view . '<br/>';
// echo $route->controler . '<br/>';


// 
$model     = new Model;
$controler = new Controler( $model );
$view      = new View ( $controler, $model );

if ( isset( $_GET['action'] ) && !empty( $_GET['action'] ) ) {
	$controler->{$_GET['action']}();
}

echo $view->output();

