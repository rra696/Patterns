<?php
namespace Patterns\FactoryMethod\LogisticExample;

class AirLogistic extends Logistic
{
    public function getTransport(): Transport
    {
        return new Plane;
    }
}