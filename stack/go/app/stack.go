package main

import (
	"errors"
	"fmt"
)

type Stack struct {
	capacity int
	values   []int
}

func (s *Stack) allocate(capacity int) {
	s.capacity = capacity
}

func (s *Stack) getCapacity() int {
	return s.capacity
}

func (s *Stack) clear() {
	s.values = nil
}

func (s *Stack) isEmpty() bool {
	return len(s.values) < 1
}

func (s Stack) copy() Stack {
	clone := s

	return clone
}

func (s *Stack) push(value int) {
	if len(s.values) == 0 {
		errors.Unwrap(fmt.Errorf("Not enough memory. Capacity: %d", s.capacity))
	}

	s.values = append(s.values, 0)
	copy(s.values[1:], s.values)
	s.values[0] = value
}

func (s *Stack) peek() int {
	return s.values[0]
}

func (s *Stack) pop() int {
	var value int

	value, s.values = s.values[0], s.values[1:]

	return value
}
