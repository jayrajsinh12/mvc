<?php
class person {
  public $name;
  public $name1;
  public $city;
  public $city1;


  public function setName($n,$n1)
  {
    $this->name = $n;
    $this->name1 = $n1;

  }

  public function getName() {
    return $this->name;
    return $this->name1;
  }

  public function setCity($c,$c1)
  {
    $this->city = $c;
    $this->city1 = $c1;
  }

  public function getCity() {
    return $this->city;
    return $this->city1;
  }
};

$p1 = new person();


$p1->setName("Jayraj","Kuldeep");
$p1->setCity("Rajkot","Delhi");


echo $p1->getName();
echo $p1->getCity();
?>
