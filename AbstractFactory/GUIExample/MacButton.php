<?php
namespace Patterns\AbstractFactory\GUIExample;

class MacButton implements Button
{
    public function paint(): string
    {
        return "
            ~~~~~~~~~~~~~~~~~~~~~~~~\n
            ~      Mac Button      ~\n
            ~~~~~~~~~~~~~~~~~~~~~~~~\n
        ";
    }
}