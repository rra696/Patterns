<?php
namespace Patterns\FactoryMethod\AppointmentExample;

require_once '../../vendor/autoload.php';

$blogsMgr = new BlogsCommsManager;
print $blogsMgr->sendInfo();

$megaMgr = new MegaCommsManager;
print $megaMgr->sendInfo();