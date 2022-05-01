<?php

require_once 'app/Queue.php';

$valueA = rand(1, 1000);
$valueB = rand(1, 1000);
$valueC = rand(1, 1000);
$allocate = 3;

$queue = new Queue;

echo "----------- Start -----------\n\r";

echo sprintf("A: %d; B: %d; C: %d;\n\r", $valueA, $valueB, $valueC);

$queue->allocate(3);
echo sprintf("Set allocate: %d\n\r", $queue->getCapacity());

echo sprintf("Queue is empty: %s\n\r", $queue->isEmpty() ? 'true' : 'false');

echo sprintf("Add value A: %d\n\r", $valueA);
$queue->push($valueA);

echo sprintf("Add value B: %d\n\r", $valueB);
$queue->push($valueB);

echo sprintf("Add value C: %d\n\r", $valueC);
$queue->push($valueC);

echo sprintf("Peek value: %d\n\r", $queue->peek());

echo sprintf("Pop value from queue: %d\n\r", $queue->pop());
echo sprintf("Pop value from queue: %d\n\r", $queue->pop());
echo sprintf("Pop value from queue: %d\n\r", $queue->pop());

echo "------------ End ------------\r\n";
