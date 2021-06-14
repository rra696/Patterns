<?php

declare(strict_types=1);

use Patterns\Decorator\Notifier\BaseNotifier;
use Patterns\Decorator\Notifier\InstagramDecorator;
use Patterns\Decorator\Notifier\SlackDecorator;
use Patterns\Decorator\Notifier\SmsDecorator;

require_once '../../vendor/autoload.php';

const MSG_FOR_NOTIFICATION = 'Hello!';

$baseNotifier = new BaseNotifier();

$smsNotifier = new SmsDecorator($baseNotifier);
$slackNotifier = new SlackDecorator($baseNotifier);
$instagramNotifier = new InstagramDecorator($baseNotifier);

echo $smsNotifier->send(MSG_FOR_NOTIFICATION);
echo $slackNotifier->send(MSG_FOR_NOTIFICATION);
echo $instagramNotifier->send(MSG_FOR_NOTIFICATION);