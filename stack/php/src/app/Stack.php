<?php
declare(strict_types=1);

class Stack
{
    private int $capacity = 0;
    
    private array $values = [];

    /**
     * Allocates enough memory for a required capacity.
     */
    public function allocate(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    /**
     * Returns the current capacity.
     */
    public function getCapacity(): int
    {
        return $this->capacity;
    }

    /**
     * Clear stack.
     */
    public function clear(): void
    {
        $this->values = [];
    }

    /**
     * Returns a shallow copy of the stack.
     */
    public function copy(): Stack
    {
        return clone $this;
    }

    /**
     * Returns whether the stack is empty.
     */
    public function isEmpty(): bool
    {
        return count($this->values) < 1;
    }

    /**
     * Returns the value at the front of the stack.
     */
    public function peek(): int
    {
        return $this->values[0];
    }

    /**
     * Removes and returns the value.
     */
    public function pop(): int
    {
        return array_shift($this->values);
    }

    /**
     * Pushes values into the stack.
     */
    public function push(int $value): void
    {
        if ($this->capacity === count($this->values)) {
            throw new InvalidArgumentException(
                'Not enough memory. Capacity: ' . $this->capacity
            );
        }

        $values = array_reverse($this->values);
        $values[] = $value;
        $this->values = array_reverse($values);
    }

    /**
     * Converts the queue to an array.
     */
    public function toArray(): array
    {
        return $this->values;
    }
}