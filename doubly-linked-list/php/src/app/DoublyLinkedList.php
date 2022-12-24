<?php
declare(strict_types=1);

class DoublyLinkedList
{
    /**
     * @var Item[]
     */
    private array $items = [];

    private ?Item $last = null;

    public function addItem(Item $item): void
    {
        $this->last?->setNext($item);
        $item->setPrev($this->last);
        $this->items[] = $item;
        $this->last = $item;
    }

    /**
     * @return Item[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
}