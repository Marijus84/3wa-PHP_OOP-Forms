<?php

/**
 *
 */
class SvgRenderer
{
  public $elements;

  function __construct($width = 700, $height = 600, $color = 'white'){
    $this->elements = [];
    $this->width = $width;
    $this->height = $height;
    $this->color = $color;
  }


  public function drawRectangle($x, $y, $width, $height, $color, $opacity)
  {
    if ($width > $this->width || $height > $this->height) {
      throw new Exception("Element can't be larger than SVG");

    }
    $svg = ' <rect x="'.$x.'" y="'.$y.'" width="'.$width.'" height="'.$height.'" style="fill:'.$color.'" opacity = "'.$opacity.'" />';
    array_push($this->elements, $svg);

  }


  public function drawElipse($x, $y, $rx, $ry, $color, $opacity)
  {
    $svg = ' <ellipse cx="'.$x.'" cy="'.$y.'" rx="'.$rx.'" ry="'.$ry.'" style="fill:'.$color.'" opacity = "'.$opacity.'" />';
    array_push($this->elements, $svg);

  }

  public function drawPoligon($x1, $y1, $x2, $y2, $x3, $y3, $color, $opacity)
  {
    $svg = ' <polygon points="'.$x1.' '.$y1.' '.$x2.' '.$y2.' '.$x3.' '.$y3.'" style="fill:'.$color.'" opacity = "'.$opacity.'" />';
    array_push($this->elements, $svg);

  }

  public function drawPoli($x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4, $color, $opacity)
  {
    $svg = ' <polygon points="'.$x1.' '.$y1.' '.$x2.' '.$y2.' '.$x3.' '.$y3.' '.$x4.' '.$y4.'" style="fill:'.$color.'" opacity = "'.$opacity.'" />';
    array_push($this->elements, $svg);

  }


  public function drawText($x, $y, $content, $color)
  {


    $svg = ' <text x="'.$x.'" y="'.$y.'" fill="'.$color.'">'.$content.'</text>';
    array_push($this->elements, $svg);

  }

  public function run()
  {
  //  echo "run svg renderer";
    $svg = '<svg width="'.$this->width.'" height="'.$this->height.'" style ="background-color:'.$this->color.'">';
    $svg .= implode('',$this->elements);
    $svg .= '</svg>';
    //var_dump($this->elements);
    echo $svg;
  }
}







 ?>
