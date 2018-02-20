<?php


class Circle extends Shape
{

  public $radius;


  public function setRadius($radius)
  {
    $this->radius = $radius;
  }

  public function draw(SvgRenderer $renderer)
  {
    $renderer->drawCircle($this->x,
                            $this->y,
                            $this->radius,
                            $this->color,
                            $this->opacity);

  }
}





 ?>
