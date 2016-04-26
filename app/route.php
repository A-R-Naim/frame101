<?php 

class Router{

	// public function find( $route ){

	// 	return new Route( '' );

	// }
}


class Route{ 

	public $model;
	public $view;
	public $controler;
	
	private $_uri = array();

	public function add( $uri ){
		$this->_uri = $uri;
	}

	public function filter(){


		$uri      = isset( $_GET['url'] ) ? $_GET['url'] : '/';
		$uri      = explode( '/', $uri );
		$basetUri = $uri[0];


		foreach ($this->_uri as $key => $value) {

			$key = explode('/', $key );
			$basekey = $key[0];

			if ( $basetUri == $basekey ) {

				$this->model     = $value['model'];
				$this->view      = $value['view'];
				$this->controler = $value['controler'];

				$extractView = new $this->view;
				$extractView->outPut( $this->view );

				echo 'match found';
				
			}

		}


	
	} #filter


} #Route
