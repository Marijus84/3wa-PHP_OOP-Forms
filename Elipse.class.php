<?php


class Elipse extends Shape
{

  public $rx;
  public $ry;

  public function __construct(){

    parent::__construct(); // paima tevinio elemento construktoriu

    $this->rx = 50;
    $this->ry = 50;
  }


  public function setSize($rx, $ry)
  {
    $this->rx = $rx;
    $this->ry = $ry;
  }



  public function draw(SvgRenderer $renderer)
  {
    $renderer->drawElipse($this->location->x,
                            $this->location->y,
                            $this->rx,
                            $this->ry,
                            $this->color,
                            $this->opacity);

  }
}
