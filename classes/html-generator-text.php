<?php
	
	class htmlGenerator{

		protected $name, $id, $inputType;

		public function text( $name, $id ) {

			$this->name      = $name;
			$this->id        = $id;
			$this->inputType = __FUNCTION__ ;
			return $this;
		}

		public function password( $name, $id ) {

			$this->name      = $name;
			$this->id        = $id;
			$this->inputType = __FUNCTION__ ;
			return $this;
		}

		public function attributes( array $attr ) {

			$name      = $this->name;
			$id        = $this->id;
			$id        = isset( $id ) ? $id : $name ;
			$inputType = $this->inputType;


			$atts = '';			
			foreach ($attr as $key => $value) {
				$atts = $atts . ( $key . '=' . '"' . $value . '" ' ) ;
			}
			
			return "<input type='$inputType' name='$this->name ' id='$id' $atts />"; 

		}

	}

$generator = new htmlGenerator;
echo $generator->password( 'fatherName', 'fName' )->attributes( array( 'class' => 'className', 'placeholder' => 'Type user name & hit enter ' ) ); 

