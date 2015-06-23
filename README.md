# calculator

This project implements a very simple calculator class in php


it get an input of array, which contains numbers separated by operator '*', '/', '%', '+','-'
The '*', '/', '%' has higher priority than '+','-'

The class has two functions,
The function binaryCompute($n1, $n2, $op) compute the results of a binary operations on two numbers
The function compute($input) compute the results of an input array

It handle binary operations, e.g. 5 + 6
It handle combinations of binary combinations, e.g. 1 + 1 - 4 * 4
It take associativity into account, first process multiplication, division and modulus, then addition
and subtraction
It cannot handle parentheses



