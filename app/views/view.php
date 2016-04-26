<?php 

class View{

	private $controler;
	private $model;

	public function __construct( $controler, $model ){

		$this->controler = $controler;
		$this->model     = $model;

	}

	public function output(){
        return "<p>" . $this->model->string . "</p>";
    }


}

class userView{

	public function outPut( $viewName ){
		echo "coming from $viewName class <br>";
	}
	
}

class homeView{

	public function outPut( $viewName ){
		echo "coming from $viewName class <br>";
	}
	
}