<?php


class Elipse extends Shape
{

  public $rx;
  public $ry;


  public function setSize($rx, $ry)
  {
    $this->rx = $rx;
    $this->ry = $ry;
  }



  public function draw(SvgRenderer $renderer)
  {
    $renderer->drawElipse($this->x,
                            $this->y,
                            $this->rx,
                            $this->ry,
                            $this->color,
                            $this->opacity);

  }
}
