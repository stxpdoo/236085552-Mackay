<!DOCTYPE html>
<html>
<head>
    <title>PHP Exercises</title>
</head>
<body>
    <h1>Exercise 1: Variables and Operators</h1>
    <?php
    $a = 15;
    $b = 7;
    echo "Sum: " . ($a + $b) . "<br>";
    echo "Difference: " . ($a - $b) . "<br>";
    echo "Product: " . ($a * $b) . "<br>";
    echo "Quotient: " . ($a / $b) . "<br>";
    ?>

    <h1>Exercise 2: Conditional Statements</h1>
    <?php
    $number = 10;
    if ($number % 2 == 0) {
        echo "$number is even.<br>";
    } else {
        echo "$number is odd.<br>";
    }
    if ($number > 0) {
        echo "$number is positive.<br>";
    } elseif ($number < 0) {
        echo "$number is negative.<br>";
    } else {
        echo "$number is zero.<br>";
    }
    ?>

    <h1>Exercise 3: Loops</h1>
    <h2>FizzBuzz</h2>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz<br>";
        } elseif ($i % 3 == 0) {
            echo "Fizz<br>";
        } elseif ($i % 5 == 0) {
            echo "Buzz<br>";
        } else {
            echo "$i<br>";
        }
    }
    ?>
    
    <h2>Even Fibonacci Numbers</h2>
    <?php
    $fib = [0, 1];
    for ($i = 2; $i < 10; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    foreach ($fib as $num) {
        if ($num % 2 == 0) {
            echo "$num ";
        }
    }
    ?>

    <h1>Exercise 4: Functions</h1>
    <?php
    function greet($name) {
        return "Hello, " . $name . "!";
    }
    function square($number) {
        return $number * $number;
    }
    echo greet("Alice") . "<br>";
    echo "Square of 5: " . square(5) . "<br>";
    ?>

    <h1>Exercise 5: Form Handling</h1>
    <form method="post">
        Name: <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        echo "<p>Hello, $name!</p>";
    }
    ?>
</body>
</html>
