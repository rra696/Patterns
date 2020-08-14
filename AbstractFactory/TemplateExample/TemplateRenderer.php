<?php
namespace Patterns\AbstractFactory\TemplateExample;

interface TemplateRenderer
{
    public function render(string $templateString, array $args = []): string;
}