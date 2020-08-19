<?php
namespace Patterns\AbstractFactory\GUIExample;

interface GUIFactory
{
    public function createButton(): Button;
    public function createCheckbox(): Checkbox;
}