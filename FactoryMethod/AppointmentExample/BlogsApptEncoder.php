<?php
namespace Patterns\FactoryMethod\AppointmentExample;

class BlogsApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Данные о встрече закодированы в формате BlogsCal \n";
    }
}