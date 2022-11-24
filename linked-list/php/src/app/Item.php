<?php
declare(strict_types=1);

class Item
{
    public function __construct(
        private readonly string $value,
        private ?Item $next = null,
        private ?Item $prev = null
    ) {
    }

    public function getNext(): ?Item
    {
        return $this->next;
    }

    public function setNext(?Item $next): void
    {
        $this->next = $next;
    }

    public function getPrev(): ?Item
    {
        return $this->prev;
    }

    public function setPrev(?Item $prev): void
    {
        $this->prev = $prev;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}