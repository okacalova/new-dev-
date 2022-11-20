<?php

 interface Movable
{
    public function start();
    public function stop();
    
}

class Car implements Movable
{
    protected $speed;
    protected $maxSpeed;
    public function __construct($speed, $maxSpeed=180) {
      $this->speed = $speed;  
      $this->maxSpeed=$maxSpeed;
    }
     public function start()
     {
        if ($this->speed > $this->maxSpeed){
            echo "Max speed 180 km";
        }else{
         echo "Now car moving, speed " . $this->speed . ' km';
        }
     }
     public function stop()
     {
         echo "Car stop";
     }
     
}
$car= new Car(181);

$car->start();
//$car->stop();
