<?php
namespace Patterns\FactoryMethod\LogisticExample;

class Truck implements Transport
{
    public function load(): void 
    {
        echo "The Truck is loading...\n";
    }

    public function deliver(string $cargo): void 
    {
        echo "The Truck is delivering $cargo\n";
    }

    public function unload(): void
    {
        echo "The Truck unloaded cargo\n";
    }
}