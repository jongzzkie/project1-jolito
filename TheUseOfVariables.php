<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background : violet;
        }
        h1 {
            text-align: center;
        }
        .content {
            margin-bottom: 50px;
        }
        footer {
            text-align: center;
            font-size: 12px;
            position: fixed;
            bottom: 10px;
            width: 100%;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1);
            border: 2px solid #333;
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

    <h1>PHP Variable Declaration Example</h1>
    <div class="container">
        <div class="content">
            <?php
            // Declare whole numbers
            $whole_num1 = 10;
            $whole_num2 = 25;
            $whole_num3 = 50;
            $whole_num4 = 100;
            $whole_num5 = 200;

            // Declare floating point numbers
            $float_num1 = 10.5;
            $float_num2 = 20.99;
            $float_num3 = 30.75;
            $float_num4 = 40.25;
            $float_num5 = 50.5;

            // Declare strings
            $string1 = "Item 1: Laptop";
            $string2 = "Item 2: Smartphone";
            $string3 = "Item 3: Tablet";
            $string4 = "Item 4: Monitor";
            $string5 = "Item 5: Keyboard";

            // Declare characters (representing item codes)
            $char1 = 'L';
            $char2 = 'S';
            $char3 = 'T';
            $char4 = 'M';
            $char5 = 'K';

            // Display values
            echo "<h3>Whole Numbers (Quantities):</h3>";
            echo "Quantity of item 1: $whole_num1<br>";
            echo "Quantity of item 2: $whole_num2<br>";
            echo "Quantity of item 3: $whole_num3<br>";
            echo "Quantity of item 4: $whole_num4<br>";
            echo "Quantity of item 5: $whole_num5<br>";

            echo "<h3>Floating Point Numbers (Prices):</h3>";
            echo "Price of item 1: $$float_num1<br>";
            echo "Price of item 2: $$float_num2<br>";
            echo "Price of item 3: $$float_num3<br>";
            echo "Price of item 4: $$float_num4<br>";
            echo "Price of item 5: $$float_num5<br>";

            echo "<h3>Strings (Descriptions):</h3>";
            echo "$string1<br>";
            echo "$string2<br>";
            echo "$string3<br>";
            echo "$string4<br>";
            echo "$string5<br>";

            echo "<h3>Characters (Item Codes):</h3>";
            echo "Code for item 1: $char1<br>";
            echo "Code for item 2: $char2<br>";
            echo "Code for item 3: $char3<br>";
            echo "Code for item 4: $char4<br>";
            echo "Code for item 5: $char5<br>";
            ?>
            <div class="form-links">
                <a href="index.php"><b>Return To Main Page</b></a>
            </div>
        </div>
    </div>
    <div class="footer">
        <?php
            $creator = "Jolito P. Eliseo";
            $date_created = date("F j, Y");
            echo "<p>Created by: $creator</p>";
            echo "<p>Date: $date_created</p>";
        ?>
    </div>>

</body>
</html>
