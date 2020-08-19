<?php
namespace Patterns\AbstractFactory\AppointmentExample;

class BloggsApptEncoder implements ApptEncoder
{
    public function encode(): string
    {
        return "Данные о встрече закодированы в формате BloggsAppt \n";
    }
}