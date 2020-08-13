<?php
namespace Patterns\FactoryMethod\LogisticExample;

interface Transport
{
    public function load(): void;
    public function deliver(string $cargo): void;
    public function unload(): void;
}