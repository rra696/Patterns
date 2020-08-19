<?php
namespace Patterns\AbstractFactory\GUIExample;

class MacCheckbox implements Checkbox
{
    public function paint(): string
    {
        return "
            ~~~~~~~~~~~~~~~~~~~~~~~\n
            ~                     ~\n
            ~                     ~\n
            ~     Mac checkbox    ~\n
            ~                     ~\n
            ~                     ~\n
            ~~~~~~~~~~~~~~~~~~~~~~~\n
        ";
    }
}