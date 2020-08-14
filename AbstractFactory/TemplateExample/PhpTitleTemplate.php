<?php
namespace Patterns\AbstractFactory\TemplateExample;

class PhpTitleTemplate implements TitleTemplate 
{
    public function getTemplateString(): string 
    {
        return <<<HTML
        <h1><?= \$title; ?></h1>
HTML;
    }
}
