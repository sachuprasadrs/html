<?php
function fibonacci($n) {
    $a = 0;
    $b = 1;    
    if ($n <= 0) {
        echo "Please enter a positive integer.";
    } else {
        echo "Fibonacci Sequence up to $n terms: <br>";

        for ($i = 1; $i <= $n; $i++) {
            echo $a . " ";
            $nextTerm = $a + $b;
            $a = $b;
            $b = $nextTerm;
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['n'];
    fibonacci($n);
}
?>

