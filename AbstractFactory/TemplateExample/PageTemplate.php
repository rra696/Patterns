<?php
namespace Patterns\AbstractFactory\TemplateExample;

interface PageTemplate
{
    public function getTemplateString(): string;
}