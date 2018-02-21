<?php

class Text extends Shape
{

  public $content;

  public function __construct(){

    parent::__construct(); // paima tevinio elemento construktoriu

    $this->content = 'test';

  }

  public function setContent($content)
  {
      $this->content = $content;

  }



  public function draw(SvgRenderer $renderer)
  {
    $renderer->drawText($this->location->x,
                            $this->location->y,
                            $this->content,
                            $this->color);

  }

}





 ?>
