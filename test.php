<?php

require __DIR__ . '/vendor/autoload.php';

use Beycan\Bitcoin\Provider;
use Beycan\Bitcoin\Transaction;

$provider = new Provider(true);
$hash = "faff07e384382cc1bc5dac57aa36fefaf91a3255ccaa4c51be39d02bbd292aa2";
$tx = new Transaction($hash, $provider);

var_dump($tx->getUrl());

