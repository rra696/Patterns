<?php
namespace Patterns\FactoryMethod\AppointmentExample;

class MegaCommsManager extends CommsManager
{
    public function getApptEncoder(): ApptEncoder
    {
        return new MegaApptEncoder;
    }
    public function getHeaderText(): string
    {
        return "\n------------- MegaCal header ---------------\n";
    }
    public function getFooterText(): string
    {
        return "------------- MegaCal footer ---------------\n";
    }
}