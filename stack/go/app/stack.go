package main

import (
	"fmt"
	"log"
)

type Stack struct {
	capacity int
	values   []int
}

func (s *Stack) Allocate(capacity int) {
	s.capacity = capacity
}

func (s Stack) GetCapacity() int {
	return s.capacity
}

func (s *Stack) Clear() {
	s.values = nil
}

func (s Stack) IsEmpty() bool {
	return len(s.values) < 1
}

func (s Stack) Copy() Stack {
	clone := s

	return clone
}

func (s *Stack) Push(value int) {
	s.validateCapacity()
	s.values = append(s.values, 0)
	copy(s.values[1:], s.values)
	s.values[0] = value
}

func (s *Stack) Peek() int {
	return s.values[0]
}

func (s *Stack) Pop() int {
	var value int

	value, s.values = s.values[0], s.values[1:]

	return value
}

func (s Stack) validateCapacity() {
	if len(s.values) > s.capacity {
		log.Fatal(fmt.Sprintf("Not enough memory. Capacity: %d", s.capacity))
	}
}
