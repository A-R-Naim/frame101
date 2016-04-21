<?php 

class Route{ 

	public $model;
	public $view;
	public $controler;
	private $_uri = array();

	public function add( $uri ){
		$this->_uri = $uri;
	}

	public function filter(){


		$uri = $_GET['url'];
		$url = isset( $uri ) ? '/' . $uri : '/' ;

		foreach ($this->_uri as $key => $value) {

			if ( $url == $key ) {

				$this->model     = $value['model'];
				$this->view      = $value['view'];
				$this->controler = $value['controler'];
				
			}

		}

	
	} #filter


} #Route