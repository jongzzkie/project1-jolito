<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTU Grade Calculator</title>
    <style>
        body {
            background-image: url('ctu1.png');
            background-size: cover;          /* Ensures the image covers the entire body */
            background-repeat: no-repeat;    /* Prevents the image from repeating */
            background-position: center;     /* Centers the image on the page */
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;                       /* Removes default margin around the body */
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            /*background:white;*/
            padding: 20px;
            border-radius: 5px;
            box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1);
            border: 2px solid #333;
        }
        h1, h2 {
            text-align: center;
        }
        .grade-form {
            max-width: 600px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"], input[type="number"], textarea {
            width: 30%;              /* Full width of container */
            padding: 10px;            /* Spacing inside the input */
            margin-bottom: 15px;      /* Spacing between inputs */
            border: 1px solid #ccc;   /* Light border around the input */
            border-radius: 4px;       /* Rounded corners for inputs */
            box-sizing: border-box;   /* Ensures padding is included in width */
            background-color: #f9f9f9; /* Light background color */
            font-size: 16px;          /* Font size for better readability */
        }

        /* Add focus effect to input fields */
        input[type="text"]:focus, input[type="number"]:focus, textarea:focus {
            border-color: #333;       /* Darker border when focused */
            background-color: #fff;   /* White background when focused */
            outline: none;            /* Removes default blue outline */
        }
        .result {
            background-color: #f4f4f4;
            padding: 15px;
            margin-top: 20px;
            border: 1px solid #ccc;
        }
        footer {
            text-align: center;
            font-size: 12px;
            margin-top: 50px;
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
    <h1>CTU Grade Calculator</h1>

    <div class="grade-form">
        <form method="post">
            <h2>Midterm Calculation</h2>

            <label for="quiz1">Quiz 1 Score:</label>
            <input type="number" name="quiz1" id="quiz1" required>

            <label for="quiz2">Quiz 2 Score:</label>
            <input type="number" name="quiz2" id="quiz2" required>

            <label for="quiz3">Quiz 3 Score:</label>
            <input type="number" name="quiz3" id="quiz3" required>

            <label for="project1">Project 1 Score:</label>
            <input type="number" name="project1" id="project1" required>

            <label for="midterm_exam">Midterm Exam Score:</label>
            <input type="number" name="midterm_exam" id="midterm_exam" required>

            <label for="final_exam">Tentative Final Exam Score:</label>
            <input type="number" name="final_exam" id="final_exam" required>
            <br>
            <input type="submit" value="Compute Grades">
            </br>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get input values
            $quiz1 = $_POST['quiz1'];
            $quiz2 = $_POST['quiz2'];
            $quiz3 = $_POST['quiz3'];
            $project1 = $_POST['project1'];
            $midterm_exam = $_POST['midterm_exam'];
            $final_exam = $_POST['final_exam'];

            // Calculate average quizzes and projects
            $average_quizzes = ($quiz1 + $quiz2 + $quiz3) / 3;
            $average_project = $project1; // only one project provided

            // Midterm Grade Calculation
            $midterm_grade = ($average_quizzes * 0.30) + ($average_project * 0.20) + ($midterm_exam * 0.50);

            // Tentative Final Grade Calculation
            $tentative_final_grade = ($average_quizzes * 0.30) + ($average_project * 0.20) + ($final_exam * 0.50);

            // Final-Final Grade Calculation
            $final_final_grade = ($midterm_grade + $tentative_final_grade) / 2;

            // Display the results
            echo "<div class='result'>";
            echo "<h3>Results:</h3>";
            echo "<p>Midterm Grade: " . number_format($midterm_grade, 2) . "</p>";
            echo "<p>Tentative Final Grade: " . number_format($tentative_final_grade, 2) . "</p>";
            echo "<p>Final-Final Grade: " . number_format($final_final_grade, 2) . "</p>";
            echo "</div>";
        }
        ?>          
        <div class="form-links">
            <a href="index.php"><b>Return To Main Page</b></a>
        </div>
    </div>
    </div>
    <footer>
    <b> Created by: Jolito P. Eliseo </b>- <?php echo date('F j, Y'); ?>
    </footer>

</body>
</html>
