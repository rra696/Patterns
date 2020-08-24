<?php
namespace Patterns\DependencyInjection\DbExample;

class DatabaseConnection
{
    private $dbConfig;

    public function __construct(DatabaseConfiguration $dbConfig)
    {
        $this->dbConfig = $dbConfig;
    }

    public function getDSN(): string
    { 
        return sprintf(
            '%s:%s@%s:%d',
            $this->dbConfig->getUsername(),
            $this->dbConfig->getPassword(),
            $this->dbConfig->getHost(),
            $this->dbConfig->getPort()
        );
    }
}