# PHP Type Juggling Bug

This repository demonstrates a common but subtle bug in PHP related to type juggling during arithmetic operations.  The `calculateSum` function attempts to sum an array of numbers; however, the presence of a string value leads to unexpected behavior due to PHP's loose typing system. The solution showcases how to use strict type checking to prevent this issue. 

## How to reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.  Observe the unexpected output. 
3. Run `bugSolution.php` which demonstrates the correct use of type checking for a robust solution.
