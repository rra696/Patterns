<?php
namespace Patterns\TemplateMethod\SocialNetwork;

require_once '../../vendor/autoload.php';

$username = 'Alex0896';
$password = 'qwe123rty';

function clientCode(SocialNetwork $socialNetwork)
{
    $socialNetwork->post('Hello world!!!');
}

$odnoklassiniki = new Odnoklassniki($username, $password);
clientCode($odnoklassiniki);

$vk = new VK($username, $password);
clientCode($vk);