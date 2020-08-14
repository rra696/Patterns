<?php
namespace Patterns\AbstractFactory\TemplateExample;

class TwigTitleTemplate implements TitleTemplate 
{
    public function getTemplateString(): string
    {
        return "<h1>{{ title }}</h1>";
    }
}