<?php
require_once 'app/Item.php';
require_once 'app/LinkedList.php';

echo "----------- Start -----------\n\r";
echo "\n\r";

$linkedList = new LinkedList;
$linkedList->addItem("foo");
echo "Add item 'foo'\n\r";

$linkedList->addItem('bar');
echo "Add item 'bar'\n\r";

$linkedList->addItem("baz");
echo "Add item 'baz'\n\r";
echo "---------------------------\n\r";

foreach ($linkedList->getItems() as $item) {
    echo $item->getValue();
    echo $item->getNext() ? ' -> ' : ' -> null';
}

echo "\n\r";
echo sprintf("Length linked list: %d", $linkedList->getLength());
echo "\n\r";
echo "\n\r";
echo "----------- End -----------\n\r";