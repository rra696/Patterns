<?php
namespace Patterns\FactoryMethod\AppointmentExample;

class MegaApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Данные о встрече закодированы в формате MegaCal \n";
    }
}