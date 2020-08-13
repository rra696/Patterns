<?php
namespace Patterns\FactoryMethod\LogisticExample;

class RoadLogistic extends Logistic
{
    public function getTransport(): Transport
    {
        return new Truck;
    }
}