package main

import (
	"fmt"
	"math/rand"
)

func main() {
	valueA := rand.Intn(1000)
	valueB := rand.Intn(1000)
	valueC := rand.Intn(1000)
	var isEmpty string

	queue := Queue{}

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
