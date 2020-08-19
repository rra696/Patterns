<?php
namespace Patterns\AbstractFactory\AppointmentExample;

class BloggsContactEncoder implements ContactEncoder
{
    public function encode(): string
    {
        return "Данные о встрече закодированы в формате BloggsContact\n";
    }
}