<?php
namespace Patterns\FactoryMethod\SocialNetworkExample;

require_once '../../vendor/autoload.php';

function clientCode(SocialNetworkPoster $creator)
{
    $creator->post("Hello world!");
    $creator->post("I had a large hamburger this morning!");
}

echo "Testing ConcreteCreator1:\n";
clientCode(new FacebookPoster("john_doe", "12345"));

echo "Testing ConcreteCreator2:\n";
clientCode(new LinkedInPoster("john_doe@gmail.com", "qwerty12345"));