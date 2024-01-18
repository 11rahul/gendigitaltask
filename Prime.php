<?php

class Prime
{
    public $N;

    /* constructor */
    function __construct($n = 1)
    {
        $this->N = $n;
    }

    /* setter method */
    function setNumber($n)
    {
        $this->N = $n;
    }

    /*
     * check whether a number is prime
     * input whole number
     * return bool
     */
    private function isPrime($num)
    {
        if ($num < 2) return false;

        for ($i = 2; $i <= sqrt($num); $i++) if ($num % $i == 0) return false;

        return true;
    }

    /*
     * find N number of prime numbers
     * return type array
     */
    function findPrimeNums()
    {
        $i = 1;
        $count = 0;
        $primes = [];

        while ($count < $this->N)
        {
            if ($this->isPrime($i))
            {
                $primes[] = $i;
                $count++;
            }

            $i++;
        }

        return $primes;
    }

    /*
     * prints primes table
     * input array
     * return void
     */
    function printPrimeTable($primes)
    {
        foreach ($primes as $i)
        {
            echo nl2br("<pre>");
            foreach ($primes as $j) echo " " . $i*$j . " ";
            echo nl2br("</pre>");
        }
    }

}