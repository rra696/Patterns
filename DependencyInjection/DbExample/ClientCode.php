<?php
namespace Patterns\DependencyInjection\DbExample;

require_once '../../vendor/autoload.php';

$config = new DatabaseConfiguration('localhost', 3306, 'adminUser', '12345pass');
$connection = new DatabaseConnection($config);

print "DSN: ".$connection->getDSN();