<?php

require_once 'app/Stack.php';

$valueA = rand(1, 1000);
$valueB = rand(1, 1000);
$valueC = rand(1, 1000);
$allocate = 3;

$stack = new Stack;

echo "----------- Start -----------\n\r";

echo sprintf("A: %d; B: %d; C: %d;\n\r", $valueA, $valueB, $valueC);

$stack->allocate($allocate);

echo sprintf("Set allocate: %d\n\r", $stack->getCapacity());

echo sprintf("Stack is empty: %s\n\r", $stack->isEmpty() ? 'true' : 'false');

echo sprintf("Add value A: %d\n\r", $valueA);
$stack->push($valueA);

echo sprintf("Add value B: %d\n\r", $valueB);
$stack->push($valueB);

echo sprintf("Add value C: %d\n\r", $valueC);
$stack->push($valueC);

echo sprintf("Peek value: %d\n\r", $stack->peek());

echo sprintf("Pop value from stack: %d\n\r", $stack->pop());
echo sprintf("Pop value from stack: %d\n\r", $stack->pop());
echo sprintf("Pop value from stack: %d\n\r", $stack->pop());

echo "------------ End ------------\r\n";