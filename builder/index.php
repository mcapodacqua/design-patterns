<?php
require 'IBuilder.php';
require 'IEntityBuilder.php';
require 'EntityBuilder.php';
require 'Entity.php';

$entity = (new EntityBuilder())	->attr1("I'm attr 1!")
								->attr2("I'm attr 2!")
								->attr3("I'm attr 3!'")
								->id(12)
								->build();

echo "Showing Entity object \n\n";
echo $entity;