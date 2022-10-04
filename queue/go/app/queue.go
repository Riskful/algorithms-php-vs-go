package main

import (
	"errors"
	"fmt"
)

type Queue struct {
	capacity int
	values   []int
}

func (q *Queue) allocate(capacity int) {
	q.capacity = capacity
}

func (q *Queue) getCapacity() int {
	return q.capacity
}

func (q *Queue) clear() {
	q.values = nil
}

func (q Queue) copy() Queue {
	clone := q

	return clone
}

func (q *Queue) isEmpty() bool {
	return len(q.values) < 1
}

func (q *Queue) push(value int) {
	if len(q.values) == q.capacity {
		errors.Unwrap(fmt.Errorf("Not enough memory. Capacity: %d", q.capacity))
	}

	q.values = append(q.values, value)
}

func (q *Queue) peek() int {
	return q.values[0]
}

func (q *Queue) pop() int {
	var value int

	value, q.values = q.values[0], q.values[1:]

	return value
}
