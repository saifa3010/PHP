

<?php 


    class FactorialCalculator {
        public function calculateFactorial($number) {
                $factorial = 1;
                for ($i = 2; $i <= $number; $i++) {
                    $factorial *= $i;
                }
                return $factorial;
            }
        }
    
    
    $number = 5;
    $factorialCalculator = new FactorialCalculator();
    $result = $factorialCalculator->calculateFactorial($number);
    
    echo "The factorial of $number is: $result";
    


?>