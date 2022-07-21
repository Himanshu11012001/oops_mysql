<!DOCTYPE html>
<html>
<body>

<?php
class Himanshu {
  // Properties
  public $name;
  public $last;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_last($last) {
    $this->last = $last;
  }
  function get_last() {
    return $this->last;
  }
}

$apple = new Himanshu();
$apple->set_name('himasnhu');
$apple->set_last('dhote');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Dhote: " .  $apple->get_last();
?>
 
</body>
</html>
