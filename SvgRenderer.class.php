<?php

/**
 *
 */
class SvgRenderer
{
  public $elements;

  function __construct(){
    $this->elements = [];
  }


  public function drawRectangle($x, $y, $width, $height, $color, $opacity)
  {
    $svg = ' <rect x="'.$x.'" y="'.$y.'" width="'.$width.'" height="'.$height.'" style="fill:'.$color.'" opacity = "'.$opacity.'" />';

    array_push($this->elements, $svg);

  }

  public function drawCircle($x, $y, $radius, $color, $opacity)
  {
    $svg = ' <circle cx="'.$x.'" cy="'.$y.'" r="'.$radius.'" style="fill:'.$color.'" opacity = "'.$opacity.'" />';
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

  public function run()
  {
  //  echo "run svg renderer";
    $svg = '<svg width="650" height="450">';
    $svg .= implode('',$this->elements);
    $svg .= '</svg>';
    //var_dump($this->elements);
    echo $svg;
  }
}







 ?>
