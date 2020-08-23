<?php
namespace Patterns\ServiceLocator\ConfigExample;

class AppConfig
{
    private static $instance;
    private $commsManager;

    public function __construct()
    {
        $this->init();
    }

    private function init(): void
    {
        switch (Settings::$COMMSTYPE) {
            case 'Mega':
                $this->commsManager = new MegaCommsManager();
                break;
            default:
                $this->commsManager = new BloggsCommsManager();
        }
    }

    public static function getInstance(): self
    {   
        if (empty(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getCommsManager(): CommsManager
    {
        return $this->commsManager;
    }
}