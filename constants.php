<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constants Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1);
        }
        .footer {
            margin-top: 20px;
            font-size: 0.8em;
            color: gray;
        }
        .constants {
            margin-bottom: 20px;
        }
       
    </style>
</head>
<body>
<div class= "container">
    <h1>Constants</h1>

    <?php
        // Defining 
        define("SITE_NAME", "MyWebsite");
        define("MAX_LOGIN_ATTEMPTS", 5);
        define("PI", 3.14159);
        define("COUNTRY_CODE", "PHILIPPINES");
        define("DISCOUNT_RATE", 0.10); // 10%
        define("DEFAULT_LANGUAGE", "TAGALOG");
        define("CURRENCY_SYMBOL", "&#8369");
        define("GRAVITY", 9.81); // m/s²
        define("MINIMUM_AGE", 18);
        define("MAX_UPLOAD_SIZE", 10485760); // 10 MB in bytes

        // Displaying constant values
        echo "<div class='constants'>";
        echo "<p><strong>SITE_NAME:</strong> " . SITE_NAME . "</p>";
        echo "<p><strong>MAX_LOGIN_ATTEMPTS:</strong> " . MAX_LOGIN_ATTEMPTS . "</p>";
        echo "<p><strong>PI:</strong> " . PI . "</p>";
        echo "<p><strong>COUNTRY_CODE:</strong> " . COUNTRY_CODE . "</p>";
        echo "<p><strong>DISCOUNT_RATE:</strong> " . DISCOUNT_RATE * 100 . "%</p>";
        echo "<p><strong>DEFAULT_LANGUAGE:</strong> " . DEFAULT_LANGUAGE . "</p>";
        echo "<p><strong>CURRENCY_SYMBOL:</strong> " . CURRENCY_SYMBOL . "</p>";
        echo "<p><strong>GRAVITY:</strong> " . GRAVITY . " m/s²</p>";
        echo "<p><strong>MINIMUM_AGE:</strong> " . MINIMUM_AGE . "</p>";
        echo "<p><strong>MAX_UPLOAD_SIZE:</strong> " . MAX_UPLOAD_SIZE / 1048576 . " MB</p>";
        echo "</div>";

        // Examples of using the constants
        echo "<h2>Examples of using constants:</h2>";
        echo "<p>Welcome to " . SITE_NAME . ".</p>";
        echo "<p>The maximum number of login attempts is " . MAX_LOGIN_ATTEMPTS . ".</p>";
        echo "<p>The value of Pi is approximately " . PI . ".</p>";
        echo "<p>Our site is based in " . COUNTRY_CODE . ".</p>";
        echo "<p>Enjoy a discount of " . (DISCOUNT_RATE * 100) . "% on selected items.</p>";
        echo "<p>Our default language is " . DEFAULT_LANGUAGE . ".</p>";
        echo "<p>Prices are displayed with the " . CURRENCY_SYMBOL . " symbol.</p>";
        echo "<p>Earth's gravity is " . GRAVITY . " m/s².</p>";
        echo "<p>You must be at least " . MINIMUM_AGE . " years old to register.</p>";
        echo "<p>The maximum upload size is " . (MAX_UPLOAD_SIZE / 1048576) . " MB.</p>";
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
