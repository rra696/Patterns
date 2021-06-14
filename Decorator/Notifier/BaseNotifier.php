<?php

declare(strict_types=1);

namespace Patterns\Decorator\Notifier;

final class BaseNotifier implements Notifier
{
    /**
     * @param string $message
     * @return string
     */
    public function send(string $message): string
    {
        return $message . PHP_EOL;
    }
}
