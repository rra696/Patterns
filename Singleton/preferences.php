<?php
/**
 * Singleton - порождающий шаблон проектирования. Данный шаблон гарантирует, что в однопоточном приложении
 * будет единственный экземляр определенного класса, который будет доступен из любого места в программе.
 */
declare(strict_types = 1);

namespace Patterns\Singleton;

class Preferences 
{
    private $props = [];
    private static $instanse;

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    public function getInstance()
    {
        if (empty(self::$instanse)) {
            self::$instanse = new static;
        }

        return self::$instanse;
    }

    public function getProperty(string $key)
    {
        return $this->props[$key];
    }

    public function setProperty(string $key, string $value)
    {
        $this->props[$key] = $value;
    }
}

//Пример клиентского кода
$pref = Preferences::getInstance();
$pref->setProperty("key1", "value1");
unset($pref);
$pref = Preferences::getInstance();
print $pref->getProperty("key1");
