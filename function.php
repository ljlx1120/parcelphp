<?php

class Parcel{
  private $weight;
  private $height;
  private $length;
  private $width;

function __construct($weight, $height, $length, $width){
  $this->weight = $weight;
  $this->height = $height;
  $this->length = $length;
  $this->width = $width;
}
  function getWeight(){
    return $this->weight;
  }
  function getHeight(){
    return $this->height;
  }
  function getLength(){
    return $this->length;
  }
  function getWidth(){
    return $this->width;
  }
  function volume(){
    return $this->height * $this->length * $this->width;
  }
  function cost(){
    if (($this->volume()<=450) && ($this->weight<5)){
      return "$6";
    } elseif (($this->volume()<=450) && ($this->weight>=5)) {
      return "$8";
    } elseif (($this->volume()>450) && ($this->weight<5)) {
      return "$9";
    } else {
      return "$120";
    }
  }

}

$test = new Parcel ($_GET['weight'],$_GET['height'],$_GET['length'],$_GET['width']);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Price</title>
  </head>
  <body>
    <p>Your parcel's weight is: <?php echo $test->getWeight() . 'lbs'; ?></p>
    <p>Your parcel's height is: <?php echo $test->getHeight() . 'in'; ?></p>
    <p>Your parcel's width is: <?php echo $test->getWidth() . 'in'; ?></p>
    <p>Your parcel's lenght is: <?php echo $test->getLength() . 'in'; ?></p>
    <p>Your parcel's volume is: <?php echo $test->volume() . 'in'; ?></p>
    <p>Your parcel's price is: <?php echo $test->cost(); ?></p>
  </body>
</html>
