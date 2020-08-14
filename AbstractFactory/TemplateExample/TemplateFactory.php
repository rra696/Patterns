<?php
namespace Patterns\AbstractFactory\TemplateExample;

interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;
    public function createPageTemplate(): PageTemplate;
    public function getRenderer(): TemplateRenderer; 
}