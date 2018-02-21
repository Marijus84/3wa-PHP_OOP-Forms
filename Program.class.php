<?php
include 'SvgRenderer.class.php';


class Program
{


  public function run(SvgRenderer $renderer) // class injection
  {

    $rectangle1 = new Rectangle();
    $rectangle1->location->set(0,0);
    $rectangle1->setSize(200,100);
    $rectangle1->setColor('#B22222');
    $rectangle1->setOpacity(1);
    $rectangle1-> draw($renderer);

    $rectangle2 = new Square();
    $rectangle2->location->set(320,125);
    $rectangle2->setSize(100);
    $rectangle2->setColor('#85DAFF');
    $rectangle2->setOpacity(0.75);
    $rectangle2-> draw($renderer);

    $circle = new Circle();
    $circle->location->set(250,180);
    $circle->setRadius(150);
    $circle->setColor('#FFF3AB');
    $circle->setOpacity(0.75);
    $circle-> draw($renderer);

    $elipse1 = new Elipse();
    $elipse1->location->set(550,140);
    $elipse1->setSize(60,90);
    $elipse1->setColor('#2E8A57');
    $elipse1->setOpacity(0.75);
    $elipse1-> draw($renderer);

    $polygon1 = new Polygon();
    $polygon1->setPlace(20, 50, 20, 200, 140, 200);
    $polygon1->setColor('#A040A1');
    $polygon1->setOpacity(0.85);
    $polygon1-> draw($renderer);




    $polygon2 = new Polyline();
    $polygon2->setPlace(80, 150, 230, 300, 230, 500, 80, 350);
    $polygon2->setColor('black');
    $polygon2->setOpacity(1);
    $polygon2-> draw($renderer);

    $polygon3= new Polyline();
    $polygon3->setPlace(230, 300, 380, 150, 380, 350, 230, 500);
    $polygon3->setColor('grey');
    $polygon3->setOpacity(1);
    $polygon3-> draw($renderer);

    $polygon4 = new Polyline();
    $polygon4->setPlace(80, 150, 230, 0, 380, 150, 230, 300);
    $polygon4->setColor('lightgrey');
    $polygon4->setOpacity(1);
    $polygon4-> draw($renderer);

    $text = new Text();
    $text->location->set(380,180);
    $text->setContent('Just a test');
    $text->setColor('Blue');
    $text->draw($renderer);

      //
      // $renderer->drawRectangle(0,0,200,100,'#B22222', 1);
      // $renderer->drawRectangle(320,125,100,100,'#85DAFF', 0.75);
       $renderer->run(); //class injection
  }
}




 ?>
