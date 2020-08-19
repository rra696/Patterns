<?php
namespace Patterns\AbstractFactory\AppointmentExample;

require_once '../../vendor/autoload.php';

function clientCode(CommsManager $commsManager)
{
    print $commsManager->getHeaderText();
    print $commsManager->getApptEncoder()->encode();
    print $commsManager->getTtdEncoder()->encode();
    print $commsManager->getContactEncoder()->encode();
    print $commsManager->getFooterText();   
}

$bloggs = new BloggsCommsManager;

clientCode($bloggs);