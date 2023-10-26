<?php

//hw - 25.10
//headphones 
//model
//color
//size
//get charge
//lose charge
//turn on/off
// private volume 

ini_set('display_errors', 1);

$globalId = 0;

class Headphone {

    private $batteryLevel = 100;
    private $volume = 50;
    private $on = "its off";

    public function __construct (private $model, private $color, private $size) {
        global $globalId;
        $globalId++;
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
    public function isOn() {
        return $this->on;
    }
    public function turnOn() {
        $this->on = "its on";
    }
    public function turnOff() {
        $this->on = "its off";
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
echo "Model: ", $headphone1->getModel(), ", color: ", $headphone1->getColor(), ", size: ", $headphone1->getSize(), ", battery level: ", $headphone1->getBatteryLevel(), ", on: ", $headphone1->isOn();
$headphone1->loseBatteryLevel(50);
echo ", battery level: ", $headphone1->getBatteryLevel();
echo ", volume: ", $headphone1->getVolume();
$headphone1->turnOn();
echo ", on: ", $headphone1->isOn();
?>