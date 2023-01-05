<?php
declare(strict_types=1);

class LinkedList
{
    private ?Item $head = null;

    private int $length = 0;

    public function addItem(string $value): void
    {
        $item = new Item($value);

        if (is_null($this->head)) {
            $this->head = $item;
        }

        $this->getLast()?->setNext($item);
        $this->length++;
    }

    /**
     * @return Item[]
     */
    public function getItems(): array
    {
        if ($this->length === 0) {
            return [];
        }

        if ($this->length === 1) {
            return [$this->head];
        }

        $next = $this->head;
        $items = [];

        for ($i = 1; $i <= $this->length; $i++) {
            $items[] = $next;
            $next = $next->getNext();
        }

        return $items;
    }

    public function getLast(): ?Item
    {
        if ($this->length === 0) {
            return null;
        }

        if ($this->length === 1) {
            return $this->head;
        }

        $item = $this->head;

        for ($i = 2; $i <= $this->length; $i++) {
            $item = $item->getNext();
        }

        return $item;
    }

    public function getLength(): int
    {
        return $this->length;
    }
}