<?php

//headphones 
//model __construct
//color __construct
//size __construct
//get charge
//lose charge
//turn on/off
// private volume 

ini_set('display_errors', 1);

$globalId = 0;

class Headphone {

    private $accountNumber;
    private $batteryLevel = 100;
    private $volume = 50;
    private $on = false;

    public function __construct (private $model, private $color, private $size) {
        global $globalId;
        $globalId++;
        $this->accountNumber = $globalId;
    }

    public function getId() {
        return $this->accountNumber;
    }
    public function getModel() {
        return $this->model;
    }
    public function getColor() {
        return $this->color;
    }
    public function getSize() {
        return $this->size;
    }
    public function getBatteryLevel() {
        return $this->batteryLevel;
    }
    public function loseBatteryLevel($amount) {
        if ($this->batteryLevel - $amount >= 0) {
            $this->batteryLevel -= $amount;
        } else {
            $this->batteryLevel = 0;
        }
    }
    public function chargeBatteryLevel($amount) {
        if ($this->batteryLevel + $amount <= 100) {
            $this->batteryLevel += $amount;
        } else {
            $this->batteryLevel = 100;
        }
    }
    public function isActive() {
        return $this->on;
    }
    public function turnOn() {
        $this->on = true;
    }
    public function turnOff() {
        $this->on = false;
    }
    public function getVolume() {
        return $this->volume;
    }
    private function setVolume($volume) {
        $this->volume = $volume;
    }
    public function volumeUp() {
        if ($this->volume >= 100) {
            echo "Volume 100%";
        }
        else {
            $this->setVolume($this->getVolume() + 1);
        }
    }
    public function volumeDown() {
        if ($this->volume <= 0) {
            echo "Volume 0%";
        }
        else {
            $this->setVolume($this->getVolume() - 1);
        }
    }
}

$headphone1 = new Headphone("Sony WH-1000XM4", "White", "Large");
echo "id: ", $headphone1-> getId();
echo "</br> Model: ", $headphone1->getModel(), 
"</br> color: ", $headphone1->getColor(), 
"</br>  size: ", $headphone1->getSize(), 
"</br>  battery level: ", 
$headphone1->getBatteryLevel(), 
"</br>  on: ", $headphone1->isActive() ? "its on" : "its off";
echo $headphone1->isActive() ? $headphone1->volumeUp() : "</br> The headphones are off";
echo "</br>  volume: ", $headphone1->getVolume();
echo $headphone1->isActive() ? $headphone1->loseBatteryLevel(50) : "</br> The headphones are off";
echo "</br>  battery level: ", $headphone1->getBatteryLevel();
echo $headphone1->isActive() ? "its on" : $headphone1->turnOn();
echo "</br>  on: ", $headphone1->isActive() ? "its on" : "its off";
echo $headphone1->isActive() ? $headphone1->volumeUp() : "</br> The headphones are off";
echo "</br>  volume: ", $headphone1->getVolume();
echo $headphone1->isActive() ? $headphone1->volumeDown() : "</br> The headphones are off";
echo "</br>  volume: ", $headphone1->getVolume();

echo "</br>";
echo "</br>";
echo "</br>";

$headphone1 = new Headphone("Beats Solo3", "Red", "Small");
echo "id: ", $headphone1-> getId();
echo "</br> Model: ", $headphone1->getModel(), 
"</br> color: ", $headphone1->getColor(), 
"</br>  size: ", $headphone1->getSize(), 
"</br>  battery level: ", 
$headphone1->getBatteryLevel(), 
"</br>  on: ", $headphone1->isActive() ? "its on" : "its off";
echo $headphone1->isActive() ? $headphone1->volumeUp() : "</br> The headphones are off";
echo "</br>  volume: ", $headphone1->getVolume();
echo $headphone1->isActive() ? $headphone1->loseBatteryLevel(100) : "</br> The headphones are off";
echo "</br>  battery level: ", $headphone1->getBatteryLevel();
echo $headphone1->isActive() ? "its on" : $headphone1->turnOn();
echo "</br>  on: ", $headphone1->isActive() ? "its on" : "its off";
echo $headphone1->isActive() ? $headphone1->loseBatteryLevel(101) : "</br> The headphones are off";
echo "</br>  battery level: ", $headphone1->getBatteryLevel();
echo $headphone1->isActive() ? $headphone1->volumeUp() : "</br> The headphones are off";
echo "</br>  volume: ", $headphone1->getVolume();
echo $headphone1->isActive() ? $headphone1->volumeUp() : "</br> The headphones are off";
echo "</br>  volume: ", $headphone1->getVolume();
echo $headphone1->isActive() ? $headphone1->volumeDown() : "</br> The headphones are off";
echo "</br>  volume: ", $headphone1->getVolume();
?>