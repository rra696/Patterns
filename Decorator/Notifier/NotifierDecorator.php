<?php

declare(strict_types=1);

namespace Patterns\Decorator\Notifier;

class NotifierDecorator implements Notifier
{
    private Notifier $notifier;

    /**
     * @param Notifier $notifier
     */
    public function __construct(Notifier $notifier)
    {
        $this->notifier = $notifier;
    }

    /**
     * @param string $message
     * @return string
     */
    public function send(string $message): string
    {
        return $this->notifier->send($message);
    }
}
