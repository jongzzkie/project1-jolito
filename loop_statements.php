<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Task</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 50%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        footer {
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class= "container">

<?php
    // Define the variables
    $n = 10; // You can change these values as needed
    $m = 10;

    // 1. Display n x m multiplication table using for loop
    echo "<h3>Multiplication Table of n x m ($n x $m)</h3>";
    echo "<table>";
    echo "<tr><th></th>";
    for ($i = 1; $i <= $m; $i++) {
        echo "<th>$i</th>";
    }
    echo "</tr>";
    
    for ($i = 1; $i <= $n; $i++) {
        echo "<tr><th>$i</th>";
        for ($j = 1; $j <= $m; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    // 2. Display n Fibonacci series and m Fibonacci series using while loop
    function fibonacci($length) {
        $fibo = [0, 1];
        $i = 2;
        while ($i < $length) {
            $fibo[] = $fibo[$i - 1] + $fibo[$i - 2];
            $i++;
        }
        return $fibo;
    }

    echo "<h3>Fibonacci Series for n ($n)</h3>";
    $fibo_n = fibonacci($n);
    echo implode(", ", $fibo_n);

    echo "<h3>Fibonacci Series for m ($m)</h3>";
    $fibo_m = fibonacci($m);
    echo implode(", ", $fibo_m);

    // 3. Compute factorial of n and summation of m using do...while loop
    function factorial($num) {
        $result = 1;
        $i = $num;
        do {
            $result *= $i;
            $i--;
        } while ($i > 0);
        return $result;
    }

    function summation($num) {
        $sum = 0;
        $i = 1;
        do {
            $sum += $i;
            $i++;
        } while ($i <= $num);
        return $sum;
    }

    echo "<h3>Factorial of n ($n)</h3>";
    echo "Factorial of $n is: " . factorial($n);

    echo "<h3>Summation of m ($m)</h3>";
    echo "Summation of $m is: " . summation($m);
?>

<div class="form-links">
                <a href="index.php"><b>Return To Main Page</b></a>
            </div>
    <!-- Footer with creator's name and date created -->
    <div class="footer">
        <?php
            $creator = "Jolito P. Eliseo";
            $date_created = date("F j, Y");
            echo "<p>Created by: $creator</p>";
            echo "<p>Date: $date_created</p>";
        ?>
    </div>
</div>
</body>
</html>
