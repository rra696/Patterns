<?php

declare(strict_types=1);

namespace Patterns\Decorator\Notifier;

interface Notifier
{
    /**
     * @param string $message
     * @return string
     */
    public function send(string $message): string;
}