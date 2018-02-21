<?php

/**
 *
 */
class A
{
  public $viesas = 1;
  private $pasleptas = 2;
  protected $pusiau = 3;


public  function out()
  {
    echo $this->viesas;
    echo $this->pasleptas;
    echo $this->pusiau;
  }
}

/**
 *
 */
class B extends A
{



}
  $a = new A();
  $a->out();
  $b = new B();
  echo "<pre>";
  var_dump($a);
  var_dump($b);
  echo "</pre>";



 ?>
