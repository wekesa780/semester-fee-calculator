<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semester Fee Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-color: #e6f7ff; /* Light blue background */
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: white;
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #f0f8ff;
            border: 1px solid #0097a7;
            border-radius: 5px;
        }
        .result h3 {
            margin-top: 0;
        }
        .result table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .result table, .result th, .result td {
            border: 1px solid #ccc;
        }
        .result th, .result td {
            padding: 8px;
            text-align: center;
        }
        .result th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Semester Fee Calculator</h2>
        <form method="post" action="">
            <label for="semester1_fee">Enter Fee Payable in Semester 1 (Ksh):</label>
            <input type="number" id="semester1_fee" name="semester1_fee" required>
            <input type="submit" name="calculate" value="Calculate Fees">
        </form>

        <?php
        if (isset($_POST['calculate'])) {
            $semester1_fee = $_POST['semester1_fee'];
            $increment = 1500; // Fee increment per semester
            $total_semesters = 8; // Semester 1 + next 7 semesters

            echo "<div class='result'>";
            echo "<h3>Expected Payable Fees for the Next 7 Semesters:</h3>";

            // Using For Loop
            echo "<h4>Using For Loop:</h4>";
            echo "<table>";
            echo "<tr><th>Semester</th><th>Fee (Ksh)</th></tr>";
            for ($i = 1; $i <= $total_semesters; $i++) {
                $fee = $semester1_fee + ($i - 1) * $increment;
                echo "<tr><td>$i</td><td>$fee</td></tr>";
            }
            echo "</table>";

            
            
            echo "</table>";

            echo "</div>";
        }
        ?>
    </div>
</body>
</html>