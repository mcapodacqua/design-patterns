<?php
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