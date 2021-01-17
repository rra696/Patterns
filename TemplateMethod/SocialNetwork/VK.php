<?php

declare(strict_types=1);

namespace Patterns\TemplateMethod\SocialNetwork;

class VK extends SocialNetwork
{
    /**
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function logIn(string $username, string $password): bool
    {
        echo "Checking credentials... \n";
        echo "User: " . $username . " tries to log in with password: " . str_repeat('*', strlen($password));
        echo "\nVK: " . $username . " has logged in successfully.\n";

        return true;
    }

    /**
     * @param string $message
     * @return bool
     */
    public function sendData(string $message): bool
    {
        echo "VK: User: " . $this->username . " has posted message: '" . $message . "'.\n";

        return true;
    }

    /**
     * @return void
     */
    public function logOut(): void
    {
        echo "VK: User: " . $this->username . " logged out. \n\n";
    }
}
