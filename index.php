
<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL|E_STRICT);









include 'Shape.class.php';
include 'Rectangle.class.php';
include 'Circle.class.php';
include 'Polygon.class.php';
include 'Elipse.class.php';

include 'Program.class.php';
include 'index.view.php';














// class Kitten
// {
//   public $name;
//
//   public function speak()
//   {
//     $name = $this->name;
//         echo $name . ': Meow' . "\n";
//   }
// }
//
// $ginger = new Kitten();
// $lucile = new Kitten();
// $tiger = new Kitten();
// $misty = new Kitten();
//
// $ginger->name = 'Ginger';
// $lucile->name = 'Lucile';
// $tiger->name = 'Tiger';
// $misty->name = 'Misty';
//
//
// $kittens = [$ginger, $lucile, $tiger, $misty];
//
// foreach ($kittens as $value) {
//   $value->speak();
// }
