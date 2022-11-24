<?php
require_once 'app/Item.php';
require_once 'app/LinkedList.php';

echo "----------- Start -----------\n\r";

$linkedList = new LinkedList;

$foo = new Item('foo');
$linkedList->addItem($foo);
echo sprintf("Add item: %s\n\r", $foo->getValue());

$bar = new Item('bar', $foo);
$linkedList->addItem($bar);
echo sprintf("Add item: %s\n\r", $bar->getValue());

$baz = new Item('baz', $bar, $foo);
$linkedList->addItem($baz);
echo sprintf("Add item: %s\n\r", $baz->getValue());
echo "---------------------------\n\r";

foreach ($linkedList->getItems() as $item) {
    echo sprintf("ITEM: %s\n\r", $item->getValue());
    echo sprintf("prev: %s\n\r", $item->getPrev() ? $item->getPrev()->getValue() : '[empty]');
    echo sprintf("next: %s\n\r", $item->getNext() ? $item->getNext()->getValue() : '[empty]');
}

echo "----------- End -----------\n\r";