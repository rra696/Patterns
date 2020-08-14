<?php
namespace Patterns\FactoryMethod\AppointmentExample;

abstract class ApptEncoder
{
    abstract public function encode(): string;
}