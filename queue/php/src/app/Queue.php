<?php
declare(strict_types=1);

class Queue
{
    private int $capacity = 8;

    /**
     * @var int[]
     */
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
     * Clear queue.
     */
    public function clear(): void
    {
        $this->values = [];
    }

    /**
     * Returns a shallow copy of the queue.
     */
    public function copy(): Queue
    {
        return clone $this;
    }

    /**
     * Returns whether the queue is empty.
     */
    public function isEmpty(): bool
    {
        return count($this->values) < 1;
    }

    /**
     * Returns the value at the front of the queue.
     */
    public function peek(): int
    {
        return $this->values[0];
    }

    /**
     * Removes and returns the value at the front of the queue.
     */
    public function pop(): int
    {
        return array_shift($this->values);
    }

    /**
     * Pushes values into the queue.
     */
    public function push(int $value): void
    {
        if ($this->capacity === count($this->values)) {
            throw new InvalidArgumentException(
                'Not enough memory. Capacity: ' . $this->capacity
            );
        }

        $this->values[] = $value;
    }

    /**
     * Converts the queue to an array.
     */
    public function toArray(): array
    {
        return $this->values;
    }
}