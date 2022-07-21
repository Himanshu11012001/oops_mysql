<?php

class Opt{

    public $name;
    public $email;

    function set_name($name){
        $this->name=$name;
    }
    
    function get_name(){
        return $this->name;
    }

    function set_email($email){
        $this->email=$email;
    }

    function get_email(){
        return $this->email;
    }





}


$obj = new Opt();

$obj->set_name('himasnhu');
$obj->set_email('dhotehimashu87@gmail.com');

echo $obj->get_name();

echo $obj->get_email();



?>