<?php

/**
 *
 */
class Shape
{

  public $location;
  public $color;
  public $opacity;


  public function __construct(){
    $this->location = new Point();
    $this->color = 'black';
    $this->opacity = 1;

  }



public function setColor($color)
  {
    $this->color = $color;
  }

  public function setOpacity($opacity)
  {
    $this->opacity = $opacity;
  }

}










 ?>
