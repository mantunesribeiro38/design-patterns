<?php

namespace DesignPatterns\Creational\SimpleFactory;

class LowCost extends AbstractVehicle {
    
    public function call(){
        return 'A '. $this->cars[ array_rand($this->cars)]. ' car is coming to get you (Low-Cost)';
    } 
}