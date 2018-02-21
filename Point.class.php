<?php

/**
 *
 */
class Point
{

  public $x;
  public $y;



  public function __construct(){
    $this->x = 0;
    $this->y = 0;
  }
//

public function set($x, $y)
{
  $this->x = $x;
  $this->y = $y;
//   public function setLocation($x, $y)
//   {
//     $this->x = $x;
//     $this->y = $y;
//   }
// public function setColor($color)
//   {
//     $this->color = $color;
//   }
//
//   public function setOpacity($opacity)
//   {
//     $this->opacity = $opacity;
//   }

}

}
