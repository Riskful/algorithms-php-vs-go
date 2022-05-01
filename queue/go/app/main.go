package main

import (
	"fmt"
	"math/rand"
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

func (q Queue) isEmpty() bool {
	return len(q.values) < 1
}

func (q *Queue) push(value int) {
	if len(q.values) == q.capacity {
		fmt.Errorf("Not enough memory. Capacity: %d", q.capacity)
	}

	q.values = append(q.values, value)
}

func (q Queue) peek() int {
	return q.values[0]
}

func (q *Queue) pop() int {
	element := q.values[0]
	q.values = q.values[1:]

	return element
}

func main() {
	valueA := rand.Intn(1000)
	valueB := rand.Intn(1000)
	valueC := rand.Intn(1000)

	queue := Queue{}
	var isEmpty string

	fmt.Println("----------- Start -----------")

	fmt.Printf("A: %d; B: %d; C: %d;\r\n", valueA, valueB, valueC)

	queue.allocate(3)
	fmt.Printf("Set allocate: %d\r\n", queue.getCapacity())

	if queue.isEmpty() {
		isEmpty = "true"
	} else {
		isEmpty = "false"
	}

	fmt.Printf("Qeue is empty: %s\n\r", isEmpty)

	fmt.Printf("Add value A: %d\n\r", valueA)
	queue.push(valueA)

	fmt.Printf("Add value B: %d\n\r", valueB)
	queue.push(valueB)

	fmt.Printf("Add value C: %d\n\r", valueC)
	queue.push(valueC)

	fmt.Printf("Peek value: %d\n\r", queue.peek())

	fmt.Printf("Pop value from queue: %d\n\r", queue.pop())
	fmt.Printf("Pop value from queue: %d\n\r", queue.pop())

	fmt.Printf("Pop value from queue: %d\n\r", queue.pop())

	fmt.Println("------------ End ------------")
}
