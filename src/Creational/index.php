<?php

require __DIR__.'./../../vendor/autoload.php'; 

use \DesignPatterns\Creational\SimpleFactory\VehicleFactory;

function simpleFactory() {
    
    $luxurius = VehicleFactory::getVehicle('Luxurius');

    echo $luxurius->call() . '<br>'; 

    $lowCost = VehicleFactory::getVehicle('Low-Cost');

    echo $lowCost->call() . '<br>'; 

}

simpleFactory();