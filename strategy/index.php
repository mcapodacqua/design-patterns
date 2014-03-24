<?php

/**
 * With this example you can see different ways to apply the Strategy Pattern.
 * You could understand that you can use a lof of different ways to instanciate 
 * different Strategies, assign it to the client, etc.
 * If you will create different Strategy based on the status of the client, I recommend 
 * to use a Factory class, this class should need a Client object and it should returns 
 * the Strategy to be used.
 */

require 'IStrategy.php';
require 'StrategyA.php';
require 'StrategyB.php';
require 'Client.php';
require 'ChainClient.php';

echo "Client:";
$client = new Client();
$client->doAction();
$client->doOtherAction();
$client->setStrategy(new StrategyB());
$client->doAction();
$client->doOtherAction();
echo "\n";
echo "\n";
echo "Chain Client:";
$chainClient = new ChainClient();
$chainClient->doAction();
$chainClient->doOtherAction();
$chainClient->doAction();
$chainClient->doOtherAction();
echo "\n";