<?php
namespace Patterns\AbstractFactory\GUIExample;

class MacFactory implements GUIFactory
{
    function createButton(): Button
    {
        return new MacButton();
    }

    function createCheckbox(): Checkbox
    {
        return new MacCheckbox();
    }
}