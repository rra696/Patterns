<?php
namespace Patterns\AbstractFactory\TemplateExample;

class PhpTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PhpTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PhpPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PhpRenderer();
    }
}