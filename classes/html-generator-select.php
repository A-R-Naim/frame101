<?php
	
	class htmlGenerator{

		protected $name, $id, $startTag, $endTag;

		public function select( $name, $id ) {

			$this->name      = $name;
			$this->id        = $id;
			return $this;
		}

		public function attributes( array $attr ) {

			$name      = $this->name;
			$id        = $this->id;
			$id        = isset( $id ) ? $id : $name ;


			$atts = '';			
			foreach ($attr as $key => $value) {
				$atts = $atts . ( $key . '=' . '"' . $value . '" ' ) ;
			}
			
			$this->startTag = "<select name='$this->name ' id='$id' $atts>";
			$this->endTag = "</select>";
			
			return $this;
		}
		
		public function options( array $opts, $default ){
			
			$optTag = '';
			foreach( $opts as $key => $value ){
			 	
				$selected = ( $key == $default ) ? 'selected' : '';
				
		 		if ( !is_array( $value ) ){
		 			
		 			$outPut = "<option value='$key' $selected> $value </option> ";
					
		 		} else {
		 			$result =  '';
					foreach( $value as $k => $val ){
						$result = $result . ( "<option value='$k' $selected>$val</option>" );
					}
					$outPut = "<optgroup label='$key'>$result</optgroup>";
		 		};
					
			 
			 $optTag = $optTag . $outPut;
				  	
			 }
			 return $this->startTag . $optTag . $this->endTag;
			
		}
		
		

	}

$generator = new htmlGenerator;
echo $generator->select( 'name', 'nameId' )->attributes( array( 'class' => 'className' ) )->options( 
	array( 
		'value1' => 'Value 1', 
		'value2' => array( 'child1' => 'Child 1', 'child2' => 'Child 2' ),
		'value3' => 'Value 3', 
		'value4' => 'Value 4', 
		'value5' => 'Value 5' 
		), 'value4' 
	);  

