<?php
namespace Patterns\AbstractFactory\AppointmentExample;

interface ApptEncoder
{
    public function encode(): string;
}