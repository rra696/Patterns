<?php
namespace Patterns\AbstractFactory\AppointmentExample;

interface TtdEncoder
{
    public function encode(): string;
}