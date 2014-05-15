<?php
class MyClass
{
	public $ivar = "Declared a new instance variable";

	function  __construct()
	{
		echo "New instance created for the class". "<br/>";
	}

	public function setIvar($newIvarValue)
	{
		$this->ivar = $newIvarValue;
	}

	public function getIvar()
	{
		return $this->ivar. "<br/>";
	}

	function  __destruct()
	{
		echo "Instance destroyed for the class";
	}

}

$obj = new MyClass();
echo $obj->getIvar();
echo $obj->setIvar("New string assigned");
echo $obj->getIvar();

?>
