<?php
namespace Patterns\AbstractFactory\GUIExample;

require_once '../../vendor/autoload.php';

function clientCode(GUIFactory $factory)
{   
    print "\n";
    print $factory->createButton()->paint();
    print $factory->createCheckbox()->paint();
    print "\n";
}

echo "Detected Windows env.\n";
$winFactory = new WinFactory();
clientCode($winFactory);

echo "Detected Mac env.\n";
$macFactory = new MacFactory();
clientCode($macFactory);

