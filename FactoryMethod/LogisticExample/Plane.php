<?php
namespace Patterns\FactoryMethod\LogisticExample;

class Plane implements Transport
{
    public function load(): void
    {
        echo "The Plane is loading...\n";
    }

    public function deliver(string $cargo): void
    {
        echo "The Plane is delivering $cargo\n";
    }

    public function unload(): void
    {
        echo "The Plane unloaded the cargo\n";
    }
}