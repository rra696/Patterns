<?php

declare(strict_types=1);

namespace Patterns\Decorator\Notifier;

final class SlackDecorator extends NotifierDecorator
{
    /**
     * @param string $message
     * @return string
     */
    public function send(string $message): string
    {
        $message = parent::send($message);

        return "Slack notification sending with text: {$message}";
    }
}
