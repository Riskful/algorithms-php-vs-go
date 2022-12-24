<?php
declare(strict_types=1);

class Item
{
    private ?Item $next = null;

    private ?Item $prev = null;

    public function __construct(private readonly string $value)
    {
    }

    public function getNext(): ?Item
    {
        return $this->next;
    }

    public function setNext(?Item $next): self
    {
        $this->next = $next;

        return $this;
    }

    public function getPrev(): ?Item
    {
        return $this->prev;
    }

    public function setPrev(?Item $prev): self
    {
        $this->prev = $prev;

        return $this;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}