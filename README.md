# gendigitaltask
WAA that takes numeric input (N) from a user and outputs a multiplication table of (N) prime numbers.

Files:
1. landing page - index.html
2. callback for form submit - callback.php
3. business logic to generate primes multiplication table - Prime.php

Algorithm main:
1. fetch input N
2. validate if N is a whole number
3. generate N number of prime numbers and store in a array
4. use the array in a multilevel loop to generate primes multiplication table 

Algorithm to check if a number is prime:
1. input number n
2. if n < 2 ; return false
3. loop start
4. begin i = 2; end i <= sqrt(n)
5. if n % i = 0 ; return false
6. loop end
7. return true
