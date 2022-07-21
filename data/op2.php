<?php



class Name{

  public $name;
  

  function set_name($name){
    $this->name=$name;
  }

  function get_name() {
    return $this->name;
  }



}
$myname=new Name();
$myname->set_name('himanshu');
echo "Name: " . $myname->get_name();

?>

