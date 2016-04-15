<?php 

class Route{ 

	private $_uri = array();

	public function add( $uri ){
		$this->_uri = $uri;
	}

	public function filter(){

		$_uri = isset( $_GET['uri'] ) ? $_GET('uri') : '/' ;

		foreach ($this->_uri as $key => $value) {
			
			if ( preg_match( "#^$value$#", $_uri ) ) {
				echo 'match found !';
			}

		}
	}

}