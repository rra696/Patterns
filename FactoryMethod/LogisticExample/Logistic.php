<?php
namespace Patterns\FactoryMethod\LogisticExample;

abstract class Logistic
{
    abstract public function getTransport(): Transport;
    
    public function deliverCargo(string $cargo): void
    {
        $transport = $this->getTransport();

        $transport->load();
        $transport->deliver($cargo);
        $transport->unload();
    }
}