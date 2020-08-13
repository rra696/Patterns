<?php
namespace Patterns\FactoryMethod\LogisticExample;

require_once '../../vendor/autoload.php';

function clientCode(Logistic $logistic, string $cargo): void
{
    $logistic->deliverCargo($cargo);
}

clientCode(new RoadLogistic, "Cookie");
echo "\n";
clientCode(new AirLogistic, "Tanks");