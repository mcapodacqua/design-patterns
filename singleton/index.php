<?php
require 'Singleton.php';

$a = Singleton::getInstance();
$b = Singleton::getInstance();

var_dump($a === $b);	//true -- Both are the same instance
/**
 * As both are the same instance, both have the same behavior. 
 * Both returns the same values always
 */
echo $a->getAttr(); //0
echo "\n";
echo $b->getAttr(); //0
echo "\n";

$a->setAttr(1);
echo $a->getAttr(); //1
echo "\n";
echo $b->getAttr(); //1
echo "\n";

$b->setAttr(2);
echo $a->getAttr(); //2
echo "\n";
echo $b->getAttr(); //2
echo "\n";