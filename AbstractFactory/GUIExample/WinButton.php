<?php
namespace Patterns\AbstractFactory\GUIExample;

class WinButton implements Button
{
    public function paint(): string
    {
        return "
            -----------------------\n
            -   Windows Button    -\n
            -----------------------\n
        ";
    }
}