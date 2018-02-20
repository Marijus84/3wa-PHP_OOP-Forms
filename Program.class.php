<?php
include 'SvgRenderer.class.php';

class Program
{


  public function run(SvgRenderer $renderer) // class injection
  {

    $rectangle1 = new Rectangle();
    $rectangle1->setLocation(0,0);
    $rectangle1->setSize(200,100);
    $rectangle1->setColor('#B22222');
    $rectangle1->setOpacity(1);
    $rectangle1-> draw($renderer);

    $rectangle2 = new Rectangle();
    $rectangle2->setLocation(320,125);
    $rectangle2->setSize(100,100);
    $rectangle2->setColor('#85DAFF');
    $rectangle2->setOpacity(0.75);
    $rectangle2-> draw($renderer);


    $circle = new Circle();
    $circle->setLocation(250,180);
    $circle->setRadius(150);
    $circle->setColor('#FFF3AB');
    $circle->setOpacity(0.75);
    $circle-> draw($renderer);

    $elipse1 = new Elipse();
    $elipse1->setLocation(550,140);
    $elipse1->setSize(60,90);
    $elipse1->setColor('#2E8A57');
    $elipse1->setOpacity(0.75);
    $elipse1-> draw($renderer);

    $polygon1 = new Polygon();
    $polygon1->setPlace(20, 50, 20, 200, 140, 200);
    $polygon1->setColor('#A040A1');
    $polygon1->setOpacity(0.85);
    $polygon1-> draw($renderer);
      //
      // $renderer->drawRectangle(0,0,200,100,'#B22222', 1);
      // $renderer->drawRectangle(320,125,100,100,'#85DAFF', 0.75);
       $renderer->run(); //class injection
  }
}




 ?>
