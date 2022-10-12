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

	stack := Stack{}

	fmt.Println("----------- Start -----------")
	fmt.Printf("A: %d; B: %d; C: %d;\n\r", valueA, valueB, valueC)

	stack.Allocate(3)
	fmt.Printf("Set allocate: %d\n\r", stack.GetCapacity())

	if stack.IsEmpty() {
		isEmpty = "true"
	} else {
		isEmpty = "false"
	}

	fmt.Printf("Stack is empty: %s\n\r", isEmpty)

	fmt.Printf("Add value A: %d\n\r", valueA)
	stack.Push(valueA)

	fmt.Printf("Add value B: %d\n\r", valueB)
	stack.Push(valueB)

	fmt.Printf("Add value C: %d\n\r", valueC)
	stack.Push(valueC)

	fmt.Printf("Pop value from stack: %d\n\r", stack.Pop())
	fmt.Printf("Pop value from stack: %d\n\r", stack.Pop())
	fmt.Printf("Pop value from stack: %d\n\r", stack.Pop())

	fmt.Println("------------ End ------------")
}
