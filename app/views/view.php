<?php 

class View{

	private $controler;
	private $model;

	public function __construct( $controler, $model ){

		$this->controler = $controler;
		$this->model     = $model;

	}

	public function output(){
        return "<p><a href='mvc.php?action=clicked'> " . $this->model->string . "</a></p>";
    }


}

class userView{

	public function outPut( $viewName ){
		echo "coming from $viewName class <br>";
	}
	
}