<?php
require_once 'app/Item.php';
require_once 'app/DoublyLinkedList.php';

echo "----------- Start -----------\n\r";

$linkedList = new DoublyLinkedList();

$foo = new Item('foo');
$linkedList->addItem($foo);
echo sprintf("Add item '%s' to doubly linked list\n\r", $foo->getValue());

$bar = new Item('bar');
$linkedList->addItem($bar);
echo sprintf("Add item '%s' to doubly linked list\n\r", $bar->getValue());

$baz = new Item('baz');
$linkedList->addItem($baz);
echo sprintf("Add item '%s' to doubly linked list\n\r", $baz->getValue());
echo "---------------------------\n\r";

foreach ($linkedList->getItems() as $item) {
    echo $item->getPrev() ? ' <- ' : 'null <- ';
    echo $item->getValue();
    echo $item->getNext() ? ' -> ' : ' -> null';
}

echo "\n\r";
echo "\n\r";
echo "----------- End -----------\n\r";