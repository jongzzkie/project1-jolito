<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
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
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        footer {
            text-align: center;
            font-size: 12px;
            margin-top: 20px;
        }
        .form-links a {
            display: inline-block;
            margin: 10px;
            padding: 15px 25px;
            color: #501b1b;
            text-decoration: none;
            background-color: white;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .form-links a:hover {
            background-color: black;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>PHP Math Functions Demo</h1>

        <?php
        // Declare variables
        $whole_numbers = [10, 15, 23, 7, 5];
        $floating_numbers = [3.14, 2.71, 1.618, 0.577, 4.669];

        // Display the declared variables
        echo "<h2>Declared Variables</h2>";
        echo "<p>Whole Numbers: " . implode(", ", $whole_numbers) . "</p>";
        echo "<p>Floating Point Numbers: " . implode(", ", $floating_numbers) . "</p>";

        // Perform and demonstrate 15 math functions
        echo "<h2>Math Functions Demonstration</h2>";
        echo "<table>";
        echo "<tr><th>Function</th><th>Result</th></tr>";

        // Math Functions
        echo "<tr><td>abs(-23)</td><td>" . abs(-23) . "</td></tr>";
        echo "<tr><td>ceil(3.14)</td><td>" . ceil(3.14) . "</td></tr>";
        echo "<tr><td>floor(2.71)</td><td>" . floor(2.71) . "</td></tr>";
        echo "<tr><td>round(1.618, 1)</td><td>" . round(1.618, 1) . "</td></tr>";
        echo "<tr><td>sqrt(16)</td><td>" . sqrt(16) . "</td></tr>";
        echo "<tr><td>pow(2, 3)</td><td>" . pow(2, 3) . "</td></tr>";
        echo "<tr><td>max(whole_numbers)</td><td>" . max($whole_numbers) . "</td></tr>";
        echo "<tr><td>min(floating_numbers)</td><td>" . min($floating_numbers) . "</td></tr>";
        echo "<tr><td>sin(30 degrees in radians)</td><td>" . sin(deg2rad(30)) . "</td></tr>";
        echo "<tr><td>cos(60 degrees in radians)</td><td>" . cos(deg2rad(60)) . "</td></tr>";
        echo "<tr><td>tan(45 degrees in radians)</td><td>" . tan(deg2rad(45)) . "</td></tr>";
        echo "<tr><td>log(100)</td><td>" . log(100) . "</td></tr>";
        echo "<tr><td>exp(1)</td><td>" . exp(1) . "</td></tr>";
        echo "<tr><td>rand()</td><td>" . rand() . "</td></tr>";
        echo "<tr><td>deg2rad(180)</td><td>" . deg2rad(180) . "</td></tr>";

        echo "</table>";
        ?>
        <div class="form-links">
                <a href="index.php"><b>Return To Main Page</b></a>
        </div>
    </div>

    <div class="footer">
        <?php
            $creator = "Jolito P. Eliseo";
            $date_created = date("F j, Y");
            echo "<p>Created by: $creator</p>";
            echo "<p>Date: $date_created</p>";
        ?>
    </div>

</body>
</html>
