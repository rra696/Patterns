<?php
namespace Patterns\FactoryMethod\AppointmentExample;

abstract class CommsManager
{
    abstract public function getApptEncoder(): ApptEncoder;
    abstract public function getHeaderText(): string;
    abstract public function getFooterText(): string;

    public function sendInfo(): void
    {
        print $this->getHeaderText();
        print $this->getApptEncoder()->encode();
        print $this->getFooterText();
    }
}