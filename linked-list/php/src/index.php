<?php
require_once 'app/Item.php';
require_once 'app/LinkedList.php';

echo "----------- Start -----------\n\r";

$linkedList = new LinkedList;

$foo = new Item('foo');
$linkedList->addItem($foo);
echo sprintf("Add item '%s' to linked list\n\r", $foo->getValue());

$bar = new Item('bar');
$linkedList->addItem($bar);
echo sprintf("Add item '%s' to linked list\n\r", $bar->getValue());

$baz = new Item('baz');
$linkedList->addItem($baz);
echo sprintf("Add item '%s' to linked list\n\r", $baz->getValue());
echo "---------------------------\n\r";

foreach ($linkedList->getItems() as $item) {
    echo $item->getValue();
    echo $item->getNext() ? ' -> ' : ' -> null';
}

echo "\n\r";
echo "\n\r";
echo "----------- End -----------\n\r";