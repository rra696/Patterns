<?php
namespace Patterns\AbstractFactory\TemplateExample;

require_once '../../vendor/autoload.php';

$page = new Page("Заголовок первого уровня", "Это тестовый контент, так что ничего серьезного");
print $page->render(new PhpTemplateFactory);