<?php
namespace Patterns\AbstractFactory\TemplateExample;

class TwigPageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return <<<HTML
<div class="page">
    $renderedTitle
    <article class="content">{{ content }}</article>
</div>
HTML;
    }
}