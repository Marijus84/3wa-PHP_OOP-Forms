<?php

class Rectangle extends Shape
{

  public $width;
  public $height;

  public function __construct(){

    parent::__construct(); // paima tevinio elemento construktoriu

    $this->width = 50;
    $this->height = 50;
  }

  public function setSize($width, $height)
  {
    $this->width = $width;
    $this->height = $height;
  }



  public function draw(SvgRenderer $renderer)
  {
    $renderer->drawRectangle($this->location->x,
                            $this->location->y,
                            $this->width,
                            $this->height,
                            $this->color,
                            $this->opacity);

  }

}





 ?>
