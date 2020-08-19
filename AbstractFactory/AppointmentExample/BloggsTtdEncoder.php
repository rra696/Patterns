<?php
namespace Patterns\AbstractFactory\AppointmentExample;

class BloggsTtdEncoder implements TtdEncoder
{
    public function encode(): string
    {
        return "Данные о встрече закодированы в формате BloggsTtd \n";
    }
}