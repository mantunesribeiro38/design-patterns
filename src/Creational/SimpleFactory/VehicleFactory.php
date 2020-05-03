<?php

namespace DesignPatterns\Creational\SimpleFactory;

class  VehicleFactory {
    
    public static function getVehicle(string $type): AbstractVehicle
    {
        switch ($type){
            case 'Luxurius':
                return new Luxurious(['Mercedes', ' BMW', 'Bentley']);
            case 'Low-Cost':
                return new LowCost(['Fiat', 'Renault']);
            default:
                throw new \Exception('Type is not valid');        
        }
    }  
}