<?php
class Project
{
  public $name = "";
  public $description = "";
  public $platform = "";

  public function __construct($name, $description, $platform)
  {
    $this->name = $name;
    $this->description = $description;
    $this->platform = $platform;
  }
}

 $obj = new Project("LM", "Test Project", "iOS");

 echo $obj->name ."<br/>";
 echo $obj->description ."<br/>";
 echo $obj->platform ."<br/>";

?>
