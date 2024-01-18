<?php

/* Load all classes */
spl_autoload_register
(
    function ($class_name)
    {
        include $class_name . '.php';
    }
);

/* fetch form input */
$N = $_POST["num"];

/* initialize class Prime */
$prime = new Prime();

/* setter */
$prime->setNumber($N);

/* find N prime numbers */
$primeNumbers = $prime->findPrimeNums();

/* print table */
$prime->printPrimeTable($primeNumbers);

/* back button */
echo '<br><br>' . '<a class=".back_button" href="javascript:history.back(1)">Return to main</a>';
