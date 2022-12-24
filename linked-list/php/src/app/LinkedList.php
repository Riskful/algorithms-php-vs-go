<?php
declare(strict_types=1);

class LinkedList
{
    /**
     * @var Item[]
     */
    private array $items = [];

    private ?Item $last = null;

    public function addItem(Item $item): void
    {
        $this->items[] = $item;
        $this->last?->setNext($item);
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