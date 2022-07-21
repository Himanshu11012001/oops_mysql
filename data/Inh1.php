<?php
class Inh1{

  function name(){
    echo "this is parent class ";
  }


}

class Child extends Inh1{
    function child(){
        echo "this is child class ";
    }
}

$obj =new Child();


echo $obj->name();


?>