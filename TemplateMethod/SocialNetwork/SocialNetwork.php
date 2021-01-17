<?php

declare(strict_types=1);

namespace Patterns\TemplateMethod\SocialNetwork;

abstract class SocialNetwork
{
    protected string $username;
    protected string $password;

    /**
     * @param string $username
     * @param string $password
     */
    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @param string $message
     * @return bool
     */
    public function post(string $message): bool
    {
        if (!$this->logIn($this->username, $this->password)) {
            return false;
        }

        $isSend = $this->sendData($message);
        $this->logOut();

        return $isSend;
    }

    /**
     * @param string $username
     * @param string $password
     * @return bool
     */
    abstract public function logIn(string $username, string $password): bool;

    /**
     * @param string $message
     * @return bool
     */
    abstract public function sendData(string $message): bool;

    /**
     * @return void
     */
    abstract public function logOut(): void;
}
