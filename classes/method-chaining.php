<?php

class Calculator
{
	protected $val1, $val2, $result;

	public function setVal($val1, $val2)
	{
		$this->val1 = $val1;
		$this->val2	= $val2;
		return $this;
	}

	public function sum()
	{
		return $this->val1+$this->val2;
	}
	
	public function mul()
	{
		echo mysqli_autocommit($link, $mode);
	}

}


$cal = new Calculator();

echo $cal->setVal(3,6)->sum();

?>