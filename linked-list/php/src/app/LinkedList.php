<?php
declare(strict_types=1);

class LinkedList
{
    private array $items = [];

    public function addItem(Item $item): void
    {
        $this->items[] = $item;
    }

    /**
     * @return Item[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
}