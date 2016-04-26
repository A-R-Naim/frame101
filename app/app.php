<?php


class Application{
	
	public function __construct(){
		
		require_once( APP . '/route.php' );
		require_once( APP . '/models/model.php' );
		require_once( APP . '/views/view.php' );
		require_once( APP . '/controlers/controler.php' );
		
		$route = new Route;
			
		$route->add( array(
				'/'         => array( 'model' => 'homeModel', 'view' => 'homeView', 'controler' => 'homeControler' ),       
				'about'     => array( 'model' => 'aboutModel', 'view' => 'pageView', 'controler' => 'aboutControler' ),
				'blog'      => array( 'model' => 'blogModel', 'view' => 'blogView', 'controler' => 'blogControler' ),
				'user/naim' => array( 'model' => 'userModel', 'view' => 'userView', 'controler' => 'userControler' ),
				) )->filter();
		
		
		// $model     = new Model;
		// $controler = new Controler( $model );
		// $view      = new View ( $controler, $model );
		// echo $view->output();
				
	}
}
