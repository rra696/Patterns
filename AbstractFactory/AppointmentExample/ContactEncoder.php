<?php
namespace Patterns\AbstractFactory\AppointmentExample;

interface ContactEncoder
{
    public function encode(): string;
}