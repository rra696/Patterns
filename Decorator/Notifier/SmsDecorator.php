<?php

declare(strict_types=1);

namespace Patterns\Decorator\Notifier;

final class SmsDecorator extends NotifierDecorator
{
    public function send(string $message): string
    {
        $message = parent::send($message);

        return "Sms sending with text: {$message}";
    }
}
