<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Excercise</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1, h2, h3 {
            color: #333;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            color: #0056b3;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header nav {
            margin-top: 10px;
        }

        header nav a {
            margin: 0 15px;
            color: white;
        }

        main {
            padding: 20px;
        }

        section {
            margin-bottom: 40px;
        }

        section h2 {
            font-size: 2em;
            margin-bottom: 10px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }
    
        @media screen and (min-width: 1025px) {
            header nav {
                display: flex;
                justify-content: center;
            }

            header nav a {
                margin: 0 20px;
            }

            section h2 {
                font-size: 2.5em;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>PHP and Arithmetic Operations</h1>
    <nav>
        <a href="#personal">Personal Info</a>
        <a href="#arithmetic">Arithmetic Operations</a>
        <a href="#rectangle">Rectangle Calculations</a>
        <a href="#temperature">Temperature Conversion</a>
        <a href="#swap">Variable Swap</a>
        <a href="#salary">Salary Computation</a>
        <a href="#bmi">BMI Calculator</a>
        <a href="#string">String Manipulations</a>
        <a href="#balance">Bank Balance</a>
        <a href="#grade">Grade Calculation</a>
        <a href="#currency">Currency Conversion</a>
        <a href="#travel">Travel Costs</a>
    </nav>
</header>

<main class="container">
    <section id="personal">
        <h2>Personal Information</h2>
        <?php
            $name = "Ashiorz";
            $age = 19; 
            $favoriteColor = "blue";
            echo "Hi, I'm $name, I am $age years old, and my favorite color is $favoriteColor.";
        ?>
    </section>

    <section id="arithmetic">
        <h2>Arithmetic Operations</h2>
        <?php
            $a = 20;
            $b = 4;
            echo "Number a = $a <br>";
            echo "Number b = $b <br>";
            echo "<hr>"; 
            $sum = $a + $b;
            echo "Sum (a + b): $sum <br>";
            $difference = $a - $b;
            echo "Difference (a - b): $difference <br>";
            $product = $a * $b;
            echo "Product (a * b): $product <br>";
            if ($b != 0) {
                $quotient = $a / $b;
                echo "Quotient (a / b): $quotient <br>";
            } else {
                echo "Quotient: Cannot divide by zero! <br>";
            }
        ?>
    </section>

    <section id="rectangle">
        <h2>Rectangle Calculations</h2>
        <?php
            $length = 10; 
            $width = 5;   
            echo "Given Length: $length <br>";
            echo "Given Width: $width <br>";
            echo "<hr>"; 
            $area = $length * $width;
            $perimeter = 2 * ($length + $width);
            echo "The Area of the rectangle is: <strong>$area</strong><br>";
            echo "The Perimeter of the rectangle is: <strong>$perimeter</strong><br>";
        ?>
    </section>

    <section id="temperature">
        <h2>Temperature Conversion</h2>
        <?php
            $celsius = 25; 
            $fahrenheit = ($celsius * 9/5) + 32;
            echo "The temperature in Celsius is: " . $celsius . "°C<br>";
            echo "The temperature in Fahrenheit is: " . $fahrenheit . "°F";
        ?>
    </section>

    <section id="swap">
        <h2>Variable Swap</h2>
        <?php
            $a = 10;
            $b = 25;
            echo "--- Before Swapping ---<br>";
            echo "Value of \$a: " . $a . "<br>"; 
            echo "Value of \$b: " . $b . "<br>"; 
            $temp = $a;
            $a = $b;
            $b = $temp;
            echo "--- After Swapping ---<br>";
            echo "Value of \$a: " . $a . "<br>"; 
            echo "Value of \$b: " . $b . "<br>";
        ?>
    </section>

    <section id="salary">
        <h2>Salary Computation</h2>
        <?php
            $basic_salary = 4500.00; 
            $allowance    = 500.00;  
            $deduction    = 350.50;  
            $net_salary = ($basic_salary + $allowance) - $deduction;
            echo "Basic Salary: \$" . number_format($basic_salary, 2) . "<br>";
            echo "Allowance:    +\$" . number_format($allowance, 2) . "<br>";
            echo "Deduction:    -\$" . number_format($deduction, 2) . "<br>";
            echo "Net Salary:   \$" . number_format($net_salary, 2) . "<br>";
        ?>
    </section>

    <section id="bmi">
        <h2>BMI Calculator</h2>
        <?php
            $weight = 75; 
            $height = 1.75; 
            $bmi = $weight / ($height * $height);
            echo "Weight: " . $weight . " kg<br>";
            echo "Height: " . $height . " m<br>";
            echo "Your calculated BMI is: " . number_format($bmi, 2) . "<br>";
        ?>
    </section>

    <section id="string">
        <h2>String Manipulations</h2>
        <?php
            $sentence = "PHP is a powerful scripting language for web development.";
            echo "Sentence: " . $sentence . "<br>";
            $char_count = strlen($sentence);
            echo "Number of Characters: " . $char_count . "<br>";
            $word_count = str_word_count($sentence);
            echo "Number of Words: " . $word_count . "<br>";
            echo "Uppercase: " . strtoupper($sentence) . "<br>";
            echo "Lowercase: " . strtolower($sentence) . "<br>";
        ?>
    </section>

    <section id="balance">
        <h2>Bank Balance</h2>
        <?php
            $balance = 1000;  
            $deposit = 500;   
            $withdraw = 200;  
            $balance += $deposit;    
            $balance -= $withdraw;   
            echo "Current balance: $" . $balance . "<br>";
        ?>
    </section>

    <section id="grade">
        <h2>Grade Calculation</h2>
        <?php
            $mathScore = 85;
            $englishScore = 92;
            $scienceScore = 78;
            $averageScore = ($mathScore + $englishScore + $scienceScore) / 3;
            if ($averageScore >= 90) {
                $grade = 'A';
            } elseif ($averageScore >= 80) {
                $grade = 'B';
            } elseif ($averageScore >= 70) {
                $grade = 'C';
            } elseif ($averageScore >= 60) {
                $grade = 'D';
            } else {
                $grade = 'F';
            }
            echo "Average Score: " . round($averageScore, 2) . "<br>";
            echo "Grade: " . $grade . "<br>";
        ?>
    </section>

    <section id="currency">
        <h2>Currency Conversion</h2>
        <?php
            $amount = 1000;  
            $usdRate = 0.012;   
            $eurRate = 0.011;   
            $jpyRate = 1.65;    
            $usdAmount = $amount * $usdRate;
            $eurAmount = $amount * $eurRate;
            $jpyAmount = $amount * $jpyRate;
            echo "Original Amount: " . $amount . " (Local Currency)<br>";
            echo "Amount in USD: $" . round($usdAmount, 2) . "<br>";
            echo "Amount in EUR: €" . round($eurAmount, 2) . "<br>";
            echo "Amount in JPY: ¥" . round($jpyAmount, 2) . "<br>";
        ?>
    </section>

    <section id="travel">
        <h2>Travel Costs</h2>
        <?php
            $distance = 500;              
            $fuel_consumption = 12;       
            $fuel_price = 1.25;           
            $fuel_needed = $distance / $fuel_consumption;  
            $travel_cost = $fuel_needed * $fuel_price;      
            echo "Distance: " . $distance . " km<br>";
            echo "Fuel Consumption: " . $fuel_consumption . " km/l<br>";
            echo "Fuel Price: $" . round($fuel_price, 2) . " per liter<br>";
            echo "Fuel Needed: " . round($fuel_needed, 2) . " liters<br>";
            echo "Travel Cost: $" . round($travel_cost, 2) . "<br>";
        ?>
    </section>
</main>

<footer>
    <p>&copy; 2025 PHP Calculations and Operations</p>
</footer>

</body>
</html>
