<?php

require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('config/chatroom-447cc-firebase-adminsdk-1upg8-3e49fbb016.json')
    ->withDatabaseUri('https://chatroom-447cc-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();


?>