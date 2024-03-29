<?php
declare(strict_types=1);

class Item
{
    private ?Item $next = null;

    public function __construct(private readonly string $value)
    {
    }

    public function getNext(): ?Item
    {
        return $this->next;
    }

    public function setNext(?Item $next): void
    {
        $this->next = $next;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}