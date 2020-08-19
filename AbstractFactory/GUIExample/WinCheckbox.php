<?php
namespace Patterns\AbstractFactory\GUIExample;

class WinCheckbox implements Checkbox
{
    public function paint(): string
    {
        return "
            -----------------------\n
            -                     -\n
            -                     -\n
            -   Windows checkbox  -\n
            -                     -\n
            -                     -\n
            -----------------------\n
        ";
    }
}